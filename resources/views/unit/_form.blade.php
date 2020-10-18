<div class="card-body">
    <div class="row">
  

      <div class="form-group col-md-6">
        <label >Unit Name  @if ($errors->has('unit_name')) <small class="red-text"> [ {{ $errors->first('unit_name') }} ] </small>@endif</label>
        <input type="text" name="unit_name" class="form-control" id="unit_name" placeholder="XYZ" required value="{{ old('unit_name',isset($data) ? $data->unit_name :null) }}">
      </div>

  </div>
</div>


@push('script')
    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
          bsCustomFileInput.init();
        });
    </script>
@endpush
