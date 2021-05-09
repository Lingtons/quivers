@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="float-left"><h4>Families</h4></div>
                <div class="float-right">
                    <a href="#" class="btn btn-sm float-right btn-outline-secondary"  title="add family" data-target="#newFamilyModal" data-toggle="modal"><i class="fa fa-plus"></i> Add Family</a>
                    @include('partials.modals.new_family')
                </div>
                <table class="table table-striped table-bordered table-responsive-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Family Name</th>
                        <th>Father</th>
                        <th>Mother</th>
                        <th>Maid</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($families as $key => $family)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$family->family_name}}</td>
                            <td>{{$family->father_name}}</td>
                            <td>{{$family->mother_name}}</td>
                            <td>{{$family->maid_name}}</td>
                            <td>{{$family->phone_alt}}</td>
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
