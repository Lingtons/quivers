@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="float-left"><h4>Users</h4></div>
                <div class="float-right">
                    <a href="#" class="btn btn-sm float-right btn-outline-secondary" title="add user" data-target="#newUserModal" data-toggle="modal"><i class="fa fa-plus"></i> Add User</a>
                    @include('partials.modals.new_user')
                </div>
                <table class="table table-striped table-bordered table-responsive-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <span style="display:inline;">
                                <a href="#" class="btn btn-sm btn-outline-secondary mr-2"><i class="fa fa-cogs"></i></a>
                                <a href="{{route('manage.users.show', $user->id)}}" class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i></a>
                                </span>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>


            </div>
        </div>
    </div>
@endsection
