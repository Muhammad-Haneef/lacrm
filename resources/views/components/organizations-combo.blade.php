<div class="mb-3">
    <label class="form-label" for="organization_id">Organization</label>
    <select class="form-select input-air-primary" id="organization_id" name="organization_id">
        @foreach ($data as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>    
        @endforeach
    </select>
</div>