<div class="mb-3">
    <label class="form-label" for="{{$ref}}">{{$label}}</label>
    <select class="form-select input-air-primary" id="{{$ref}}" name="{{$ref}}">
        @foreach ($data as $row)
            <option value="{{$row->id}}">{{$row->title}}</option>    
        @endforeach
    </select>
</div>