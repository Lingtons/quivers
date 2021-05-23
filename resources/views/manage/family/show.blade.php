@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="float-left"><h4>The Family of {{$family->family_name}}</h4></div>
                <div class="float-right">
                    <a href="#" class="btn btn-sm float-right btn-outline-secondary"  title="add children" data-target="#newChildModal" data-toggle="modal"><i class="fa fa-plus"></i> Add Children</a>
                    @include('partials.modals.new_child')
                </div>
                <table class="table table-striped table-bordered table-responsive-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Child's Name</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
{{--                        <th>Maid</th>--}}
{{--                        <th>Phone</th>--}}
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($family->children as $key => $child)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$child->name}}</td>
                            <td>{{$child->gender}}</td>
                            <td>{{$child->dob}}</td>
{{--                            <td>{{$family->maid_name}}</td>--}}
{{--                            <td>{{$family->phone_alt}}</td>--}}
                            <td>
                                <span style="display:inline;">
                                <a href="#" class="btn btn-sm btn-outline-secondary mr-2"><i class="fa fa-cogs"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i></a>
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
