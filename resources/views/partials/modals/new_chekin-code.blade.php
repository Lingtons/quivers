<!-- Modal -->
<div class="modal fade" id="newCodeModal" tabindex="-1" role="dialog" aria-labelledby="addVendorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                New Code
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                    <form method="POST" action="{{ route('manage.check_numbers.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="col-form-label text-md-right">{{ __('Code Number') }} <span class="text-danger">*</span></label>
                            <input id="checkin_code" type="text" class="form-control @error('checkin_code') is-invalid @enderror" name="checkin_code" value="{{ old('checkin_code') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="quantity" class="col-form-label text-md-right">{{ __('Quantity') }} <span class="text-danger">*</span></label>
                            <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="5" required>
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
