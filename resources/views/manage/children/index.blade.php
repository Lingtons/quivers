@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="float-left"><h4>Children</h4></div>
                <div class="float-right">
                    <a href="#" class="btn btn-sm float-right btn-outline-secondary" title="add child"><i class="fa fa-plus"></i> Add Child</a>
                </div>
                <table class="table table-striped table-bordered table-responsive-sm">
                    <thead>
                    <tr>
                        <th>Family Name</th>
                        <th>Child Name</th>
                        <th>Gender</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($children as $key => $child)
                        <tr>
                            <td>{{$child->name}}</td>
                            <td>{{$child->name}}</td>
                            <td>{{$child->gender}}</td>
                            <td>{{$child->category}}</td>
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
