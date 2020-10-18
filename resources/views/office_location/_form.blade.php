<div class="card-body">
    <div class="row">
      <div class="form-group col-md-6">
         <label for="">Company Name</label>
         <select class="form-control" name="sbu_id" id="sbu_id" >
            <option value="" disabled selected> - Select Shareholder - </option>
            @foreach ($sbu_infos as $sbu_info)
            <option value={{$sbu_info->id}} @if(old('sbu_id', (isset($data ) && $data->sbu_id == $sbu_info->id))) selected @endif>{{$sbu_info->company_name}}</option>
            @endforeach
        </select>
      </div>  

      <div class="form-group col-md-6">
        <label >Address  @if ($errors->has('address')) <small class="red-text"> [ {{ $errors->first('address') }} ] </small>@endif</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="Navana Shefali,Gulshan-1" required value="{{ old('address',isset($data) ? $data->address :null) }}">
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
