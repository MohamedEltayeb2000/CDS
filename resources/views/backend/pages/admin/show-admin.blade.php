@extends('backend.master.master')

@section('content')

    <div class="right_col" role="main">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Show Admin</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-md-12">
                                @include('backend.layouts.messages')

                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>S.n</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Image</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($adminData as $key=>$admin)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>
                                                <img src="{{url('public/backend/uploads/images/admin/'.$admin->image)}}" alt="INF" width="50">
                                            </td>
                                            <td>{{$admin->created_at->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{route('admin-edit').'/'.$admin->id}}" class="btn btn-success btn-xs">
                                                    <i class="fa fa-edit"></i> Edit</a>
                                                <a href="{{route('admin-delete').'/'.$admin->id}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash"></i> Delete</a>
                                            </td>

                                        </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection