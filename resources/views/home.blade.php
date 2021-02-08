@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>User Details</h3>
        <a href="{{ url('/add_user') }}" class="btn btn-success pull-right"><i class="fa fa-plus-circle"></i> Add User</a>
        <br>
        <br>
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif

    </div>
    <div class="row">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Profile pic</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key=> $user)    
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>
                        <img src="{{ $user->profile_pic }}" width="100">
                    </td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>

                    <td>
                        <a href="{{ url('edit_user') }}/{{ $user->id }}" class="btn btn-info">
                            <i class="fa fa-edit"></i>
                        </a>

                        <a href="{{ url('delete_user') }}/{{ $user->id }}" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection