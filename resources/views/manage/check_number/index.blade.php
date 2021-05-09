@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="float-left"><h4>Check-in Codes</h4></div>
                <div class="float-right">
                    <a href="#" class="btn btn-sm float-right btn-outline-secondary" title="add check-in code" data-target="#newCodeModal" data-toggle="modal"><i class="fa fa-plus"></i> Add Code</a>
                    @include('partials.modals.new_chekin-code')
                </div>
                <table class="table table-striped table-bordered table-responsive-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Check-in Code</th>
                        <th>In Use</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($check_numbers as $key => $code)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$code->checkin_code}}</td>
                            <td>{{$code->status ? 'True' : 'False'}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
