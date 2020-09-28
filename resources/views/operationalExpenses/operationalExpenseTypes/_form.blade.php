<div class="row">
    <div class="input-field col s12 m6">
        <label for="operational_expense_type_name">Expense Type Name * @if ($errors->has('operational_expense_type_name')) <small class="red-text"> [ {{ $errors->first('operational_expense_type_name') }} ] </small> @endif</label>
        <input class="validate" required="" id="operational_expense_type_name" name="operational_expense_type_name" value="{{ old('operational_expense_type_name',isset($data) ? $data->operational_expense_type_name : null ) }}" type="text">
    </div>
    <div class="input-field col s12 m6">
        <label for="operational_expense_type_order">Expense Type Order @if ($errors->has('operational_expense_type_order')) <small class="red-text"> [ {{ $errors->first('operational_expense_type_order') }} ] </small> @endif</label>
        <input class="validate" id="operational_expense_type_order" name="operational_expense_type_order" value="{{ old('operational_expense_type_order',isset($data) ? $data->operational_expense_type_order : null ) }}" type="text">
    </div>
</div>
<div class="row">
    <div class="input-field col s12 m6">
        <br>
        <select class="validate js-example-basic-single" name="operational_expense_type_status" id="status"  >
            <option value="" disabled selected> - Select Expense Type Status - </option>
            <option value="Active" @if(old('operational_expense_type_status', (isset($data ) && $data->operational_expense_type_status == 'Active'))) selected @endif>Active</option>
            <option value="Inactive" @if(old('operational_expense_type_status', (isset($data ) && $data->operational_expense_type_status == 'Inactive'))) selected @endif>Inactive</option>
        </select>
        <label for="status">Expense type Status *  @if ($errors->has('operational_expense_type_status')) <small class="red-text"> [ {{ $errors->first('operational_expense_type_status') }} ] </small> @endif</label>
    </div>
</div>







