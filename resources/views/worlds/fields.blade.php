<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="name">Name</label>
    <div class="col-sm-10">
        <input name="name" type="text" class="form-control" placeholder="World Name" value="{{ $worlds->name ?? '' }}"/>
        <small class="form-text text-muted">Name of your world.</small>
    </div>
</div>
@if(isset($existing_worlds))
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="dup">Duplicate world</label>
        <div class="col-sm-10">
            <select name="dup" class="form-control" id="world_id" required>
                <option value="0" selected>No</option>
                @foreach($existing_worlds as $name => $id)
                    <option value="{{ $id }}" {{ (isset($world->user_id) && Auth::user()->id == $world->user_id) ? 'selected' : '' }}>{{ $name }}</option>
                @endforeach
            </select>
            <small class="form-text text-muted">Inherit progress from another world?</small>
        </div>
    </div>
@endif
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

@csrf