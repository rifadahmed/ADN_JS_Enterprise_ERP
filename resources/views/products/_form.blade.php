
<div class="row">
    <div class="input-field col s12 m6">
        <label for="product_name"> Name * @if ($errors->has('product_name')) <small class="red-text"> [ {{ $errors->first('product_name') }} ] </small> @endif</label>
        <input class="validate"  required="" id="product_name" name="product_name" value="{{ old('product_name',isset($data) ? $data->product_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="product_retail_price"> Retail Price @if ($errors->has('product_retail_price')) <small class="red-text"> [ {{ $errors->first('product_retail_price') }} ] </small> @endif</label>
        <input class="validate" id="product_retail_price" name="product_retail_price" value="{{ old('product_retail_price',isset($data) ? $data->product_retail_price : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="product_wholesale_price"> Wholesale price @if ($errors->has('product_wholesale_price')) <small class="red-text"> [ {{ $errors->first('product_wholesale_price') }} ] </small> @endif</label>
        <input class="validate" id="product_wholesale_price" name="product_wholesale_price" value="{{ old('product_wholesale_price',isset($data) ? $data->product_wholesale_price : null ) }}" type="text">
    </div>

    <div class="input-field col s12 m6">
        <label for="product_sku"> Product SKU @if ($errors->has('product_sku')) <small class="red-text"> [ {{ $errors->first('product_sku') }} ] </small> @endif</label>
        <input class="validate" id="product_sku" name="product_sku" value="{{ old('product_sku',isset($data) ? $data->product_sku : null ) }}" type="text">
    </div>

   

    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="product_category_id" id="product_category_id"  >
            <option value="" disabled selected> - Select Category - </option>
             @foreach($categories as $category)
                    <option value={{$category->id}} @if(old('product_category_id', (isset($data ) && $data->product_category_id == $category->id))) selected @endif>{{$category->category_name}}</option>       
            @endforeach
        </select>
        <label for="product_category_id">Category * @if ($errors->has('product_category_id')) <small class="red-text"> [ {{ $errors->first('product_category_id') }} ] </small> @endif</label>
    </div>

    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="product_sub_category_id" id="product_sub_category_id"  >
            <option value="" disabled selected> - Select Sub Category - </option>
            @foreach($subCategories as $subCategory)
                <option value={{$subCategory->id}} @if(old('product_sub_category_id', (isset($data ) && $data->product_sub_category_id == $subCategory->id))) selected @endif>{{$subCategory->sub_category_name}}</option>       
            @endforeach
        </select>
        <label for="product_sub_category_id">Sub Category * @if ($errors->has('product_sub_category_id')) <small class="red-text"> [ {{ $errors->first('product_sub_category_id') }} ] </small> @endif</label>
    </div>

    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="product_brand_id" id="product_brand_id"  >
            <option value="" disabled selected> - Select Brand - </option>
            @foreach($brands as $brand)
                <option value={{$brand->id}} @if(old('product_brand_id', (isset($data ) && $data->product_brand_id == $brand->id))) selected @endif>{{$brand->brand_name}}</option>       
            @endforeach
        </select>
        <label for="product_brand_id">Sub Category * @if ($errors->has('product_brand_id')) <small class="red-text"> [ {{ $errors->first('product_brand_id') }} ] </small> @endif</label>
    </div>
    <div class="input-field col s12 m6" >
        <textarea id="product_description" class="materialize-textarea" name="product_description" value="{{ old('product_description',isset($data) ? $data->product_description : null ) }}">@if(isset($data)){{$data->product_description}}@endif</textarea>
        <label for="product_description">Description @if ($errors->has('product_description')) <small class="red-text"> [ {{ $errors->first('product_description') }} ] </small> @endif</label>
    </div>
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="product_status" id="status"  >
            <option value="" disabled selected> - Select Product Status - </option>
            <option value="Active" @if(old('product_status', (isset($data ) && $data->product_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('product_status', (isset($data ) && $data->product_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Product Status * @if ($errors->has('product_status')) <small class="red-text"> [ {{ $errors->first('product_status') }} ] </small> @endif</label>
    </div>

</div>

{{-- <div class="row">
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_status" id="status"  >
            <option value="" disabled selected> - Select Buyer Status - </option>
            <option value="Active" @if(old('buyer_status', (isset($data ) && $data->buyer_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('buyer_status', (isset($data ) && $data->buyer_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Buyer Status * @if ($errors->has('buyer_status')) <small class="red-text"> [ {{ $errors->first('buyer_status') }} ] </small> @endif</label>
    </div>
    
   

     <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_district_id" id="buyer_district_id"  >
            <option value="" disabled selected> - Select District - </option>
                @foreach($districts as $district)
                        <option value={{$district->id}} @if(old('buyer_district_id', (isset($data ) && $data->buyer_district_id == $district->id))) selected @endif>{{$district->name}}</option>       
                @endforeach
        </select>
        <label for="buyer_district_id">District *  @if ($errors->has('buyer_district_id')) <small class="red-text"> [ {{ $errors->first('buyer_district_id') }} ] </small> @endif</label>
    </div>
    
     <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="buyer_area_id" id="buyer_area_id"  >
            <option value="">- Select Upazila -</option>
                @foreach($areas as $area)
                    <option value={{$area->id}} @if(old('buyer_area_id', (isset($data ) && $data->buyer_area_id == $area->id))) selected @endif>{{$area->name}}</option>       
                @endforeach
        </select>
        <label for="buyer_area_id">Upazila *  @if ($errors->has('buyer_area_id')) <small class="red-text"> [ {{ $errors->first('buyer_area_id') }} ] </small> @endif</label>
    </div>

  
</div> --}}

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $.ajaxSetup({
                   beforeSend: function(xhr, type) {
                       if (!type.crossDomain) {
                           xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                       }
                   },
           });

   $(document).ready(function () {
    
       $('#product_category_id').on('change',function(e) {
           var cat_id = e.target.value;
           $.post('{{ route('subcategory.ajaxcall') }}', {_token:'{{ csrf_token() }}', cat_id: cat_id}, function(data){
               //$(".loader2").hide();
               $('#product_sub_category_id').html(data);
           });
       });



});
</script>




