<?php

namespace App\Http\Controllers\dashboard;

use App\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class HospitalLoginController extends Controller
{
    public function showLoginForm(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('dashboard.login.hospital-login');
        }

        if ($request->isMethod('post')) {
            $email = $request->email;
            $password = $request->password;

            if (Auth::guard('hospital')->attempt(['email' => $email, 'password' => $password])) {
                return redirect()->intended(route('hospital-dashboard'));
            } else {
                return redirect()->back()->with('error', 'Username & password not match');
            }


        }

    }

    public function deleteWithFile($id)
    {
        $criteria = $id;
        $hospital = Hospital::findOrFail($criteria);
        $fileName = $hospital->image;
        $deletePath = public_path('backend/uploads/images/doctor/' . $fileName);
        if (file_exists($deletePath) && is_file($deletePath)) {
            return unlink($deletePath);

        }

        return true;
    }

    public function setting(Request $request)
    {
        if ($request->isMethod('get')) {
            $hospitalData = Auth::guard('hospital')->user();
            $this->data('hospitalData', $hospitalData);
            return view('dashboard.pages.setting-doctor',$this->data);
        }

        if ($request->isMethod('post')) {
            $id = $request->criteria;
            $this->validate($request, [
                'name' => 'required|min:3|max:50',
                'email' => 'required|email|', [
                    Rule::unique('hospitals', 'email')->ignore($id)
                ],
                'upload' => 'mimes:jpg,png,jpeg,gif'

            ]);

            $hospitalObj = Hospital::findOrFail($id);
            $hospitalObj->name = $request->name;
            $hospitalObj->email = $request->email;
            $hospitalObj->password = bcrypt($request->password);

            if ($request->hasFile('upload')) {
                $file = $request->file('upload');
                $ext = $file->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('backend/uploads/images/doctor/');
                if ($this->deleteWithFile($id) && $file->move($uploadPath, $imageName)) {
                    $hospitalObj->image = $imageName;
                }

            }

            if ($hospitalObj->update()) {
                return redirect()->back()->with('success', 'hospital was added');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('hospital-login');
    }
}


