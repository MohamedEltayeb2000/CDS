<?php

namespace App\Http\Controllers\backend;

use App\Hospital;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class HospitalController extends Controller
{
    //
    public function index()
    {
        return view( 'home.home');
    }
    public function showHospital()
    {
        $this->data('hospitalData', Hospital::orderBy('id', 'DESC')->get());
        return view('backend.pages.hospital.show-hospital', $this->data);
    }

        public function addHospital(Request $request)
    {

        if ($request->isMethod('get')) {
            return view('backend.pages.hospital.add-hospital');
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|min:3|max:50',
                'email' => 'required|email|unique:hospitals,email',
                'password' => 'required|min:5|max:20|confirmed',
                'upload' => 'required|mimes:jpg,png,jpeg,gif'

            ]);

            $hospitalObj = new Hospital();
            $hospitalObj->name = $request->name;
            $hospitalObj->email = $request->email;
            $hospitalObj->password = bcrypt($request->password);

            if ($request->hasFile('upload')) {
                $file = $request->file('upload');
                $ext = $file->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('backend/uploads/images/doctor/');
                if ($file->move($uploadPath, $imageName)) {
                    $hospitalObj->image = $imageName;
                }

            }

            if ($hospitalObj->save()) {
                return redirect()->route('show-hospital')->with('success', 'hospital was added');
            }
        }

    }
}
