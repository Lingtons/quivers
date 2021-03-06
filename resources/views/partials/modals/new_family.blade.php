<!-- Modal -->
<div class="modal fade" id="newFamilyModal" tabindex="-1" role="dialog" aria-labelledby="addVendorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                New Family
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                    <form method="POST" action="{{ route('manage.families.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="user_id" class="col-form-label text-md-right">{{ __('Account Name') }} <span class="text-danger">*</span></label>
                            <select name="user_id" class="form-control" tabindex="-1" id="user_id" {{!isset($user) ? '' : 'readonly'}}>
                                <option value="">Select User</option>
                                @foreach($users as $userx)
                                    <option value="{{$userx->id}}" {{!isset($user) ? '' :($user->id == $userx->id ? 'selected' : '')}}>{{__($userx->name.' '.$userx->email)}}</option>
                                @endforeach

                            </select>

                        </div>
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
        </div>
    </div>
</div>
