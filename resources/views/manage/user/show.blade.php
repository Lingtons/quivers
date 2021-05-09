@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="float-left"><h4>The Family of {{$user->name}}</h4></div>
                <div class="float-right">
                    @if(is_null($user->family))
                    <a href="#" class="btn btn-sm float-right btn-outline-secondary"  title="add family" data-target="#newFamilyModal" data-toggle="modal"><i class="fa fa-plus"></i> Add Family</a>
                    @endif
                    @include('partials.modals.new_family')
                </div>

            </div>
            @if(!is_null($user->family))
            <div class="col-12 mb-5">
                <h5>Family Details</h5>
                <table class="table table-striped table-bordered table-responsive-sm">
                    <thead>
                    <tr>
                        <th>Family Name</th>
                        <th>Father</th>
                        <th>Mother</th>
                        <th>Maid</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$user->family->family_name}}</td>
                        <td>{{$user->family->father_name}}</td>
                        <td>{{$user->family->mother_name}}</td>
                        <td>{{$user->family->maid_name}}</td>
                        <td>{{$user->family->phone_alt}}</td>
                        <td>
                                <span style="display:inline;">
                                <a href="#" class="btn btn-sm btn-outline-secondary mr-2"><i class="fa fa-cogs"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i></a>
                                </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <h5>New Child</h5>
                <form method="POST" action="{{ route('manage.children.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="family_name" class="col-form-label text-md-right">{{ __('Family Name') }} <span class="text-danger">*</span></label>
                        <input id="family_name" type="text" class="form-control @error('family_name') is-invalid @enderror" name="family_name" value="{{ old('family_name') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="father_name" class="col-form-label text-md-right">{{ __('Father\'s Name') }}</label>
                        <input id="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" value="{{ old('father_name') }}">
                    </div>

                    <div class="form-group">
                        <label for="mother_name" class="col-form-label text-md-right">{{ __('Mother\'s Name') }}</label>
                        <input id="mother_name" type="text" class="form-control @error('mother_name') is-invalid @enderror" name="mother_name" value="{{ old('mother_name') }}" >
                    </div>

                    <div class="form-group">
                        <label for="maid_name" class="col-form-label text-md-right">{{ __('Maid\'s Name') }}</label>
                        <input id="maid_name" type="text" class="form-control @error('maid_name') is-invalid @enderror" name="maid_name" value="{{ old('maid_name') }}">
                    </div>
                    <div class="form-group">
                        <label for="phone_alt" class="col-form-label text-md-right">{{ __('Phone Number') }}</label>
                        <input id="phone_alt" type="text" class="form-control @error('phone_alt') is-invalid @enderror" name="phone_alt" value="{{ old('phone_alt') }}">
                    </div>
                    <div class="form-group">
                        <label for="preferred_check_code" class="col-form-label text-md-right">{{ __('Family Preferred Code') }}</label>
                        <input id="preferred_check_code" type="text" class="form-control @error('preferred_check_code') is-invalid @enderror" name="preferred_check_code" value="{{ old('preferred_check_code') }}">
                    </div>


                    <div class="form-group row m-3">
                        <button type="submit" class="btn btn-outline-secondary">
                            {{ __('Save') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-8">
                <h5>Children</h5>
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
            @endif
        </div>
    </div>
@endsection
