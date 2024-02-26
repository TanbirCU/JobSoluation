@extends('admin.master')

@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header"><h4>Manage All Job</h4></div>
            <div class="card-body">
                {{-- <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                <h4 class="text-center text-success">{{ Session::get('message1') }}</h4> --}}
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Job Title</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($projects as $project) --}}
                        <tr>
                            <td>tt</td>
                            <td>tanvir</td>
                            <td>dsjadfkl</td>
                            <td>

                                {{-- <a href="{{ route('admin.project.edit_project',['id'=>$project['id']]) }}" class="btn btn-success ">Edit</a> --}}
                                 <a href="" class="btn btn-danger">Edit</a>
                                 <a href="" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                         {{-- @endforeach --}}


                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection
