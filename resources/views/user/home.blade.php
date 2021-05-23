@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="float-left"><h4>Search Families</h4></div>
                <table class="table table-striped table-bordered table-responsive-sm" id="familiesTable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Family Name</th>
                        <th>Father</th>
                        <th>Mother</th>
                        <th>Maid</th>
                        <th>Phone</th>
                        <th>Phone Alt</th>
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
                            <td>{{$family->user->phone}}</td>
                            <td>{{$family->phone_alt}}</td>
                            <td>
                                <span style="display:inline;">
                                <a href="#" class="btn btn-sm btn-outline-secondary mr-2"><i class="fa fa-cogs"></i></a>
                                <a href="{{route('check_in',$family->id)}}" class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i></a>
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
@section('scripts')
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#familiesTable').DataTable();
        } );
    </script>
@endsection
@section('css')
    <link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
