
    <div class="row">
        <div class="input-field col s12 m6">
            <label for="operational_expense_name">Expense Name * @if ($errors->has('operational_expense_name')) <small class="red-text"> [ {{ $errors->first('operational_expense_name') }} ] </small> @endif</label>
            <input class="validate" required="" id="operational_expense_name" name="operational_expense_name" value="{{ old('operational_expense_name',isset($data) ? $data->operational_expense_name : null ) }}" type="text">
        </div>
        <div class="input-field col s12 m6">
            <label for="operational_expense_order">Expense Order @if ($errors->has('operational_expense_order')) <small class="red-text"> [ {{ $errors->first('operational_expense_order') }} ] </small> @endif</label>
            <input class="validate" id="operational_expense_order" name="operational_expense_order" value="{{ old('operational_expense_order',isset($data) ? $data->operational_expense_order : null ) }}" type="text">
        </div>
    </div>

    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="operational_expense_type_id" id="operational_expense_type_id"  >
            <option value="" disabled selected> - Select Expense Type - </option>


             @foreach($operational_expense_types as $operational_expense_type)
                    <option value={{$operational_expense_type->id}} @if(old('operational_expense_type_id', (isset($data ) && $data->operational_expense_type_id == $operational_expense_type->id))) selected @endif>{{$operational_expense_type->operational_expense_type_name}}</option>       

                    @endforeach

        </select>
        <label for="operational_expense_type_id">Expense Type * @if ($errors->has('operational_expense_type_id')) <small class="red-text"> [ {{ $errors->first('operational_expense_type_id') }} ] </small> @endif</label>
    </div>

    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="operational_expense_status" id="status"  >
            <option value="" disabled selected> - Select Expense Status - </option>
            <option value="Active" @if(old('operational_expense_status', (isset($data ) && $data->operational_expense_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('operational_expense_status', (isset($data ) && $data->operational_expense_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Expense type Status *  @if ($errors->has('operational_expense_status')) <small class="red-text"> [ {{ $errors->first('operational_expense_status') }} ] </small> @endif</label>
    </div>








