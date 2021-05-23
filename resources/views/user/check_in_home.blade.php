@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex">
                <div class="flex-grow-1 ms-3">
                    <p>Check-in Code</p>
                    <span class="font-weight-bold"><h1 class="blink_me">{{$checkin_code}}</h1></span>
                </div>
            </div>

            <div class="col-12">
                <div class="float-left"><h4>Select Children</h4></div>
                <form action="{{route('post_check_in')}}" method="POST">
                    @csrf
                <table class="table table-striped table-bordered table-responsive-sm">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Child's Name</th>
                        <th>Gender</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($family->children as $key => $child)
                            <tr>
                                <td><input type="checkbox" name="child_ids[]" value="{{$child->id}}" checked class="form-control"></td>
                                <td>{{$child->name}}</td>
                                <td>{{$child->gender}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    <div>
                        <button class="btn btn-block  btn-outline-secondary"><span class="text-black-50">Check In</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
