<div class="col-xs-12">
	<div class="form-group {{ $errors->has('file') ? 'has-error' : ''}}">
	    <label for="file" control-label>{{ 'File' }}</label>
	    <div>
	        <input class="form-control" name="file" type="file" id="file" value="{{ $image->file }}" >
	        {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
	    </div>
	</div>
</div><div class="col-xs-12">
	<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
	    <label for="description" control-label>{{ 'Description' }}</label>
	    <div>
	        <input class="form-control" name="description" type="text" id="description" value="{{ $image->description }}" >
	        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
	    </div>
	</div>
</div><div class="col-xs-12">
	<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
	    <label for="type" control-label>{{ 'Type' }}</label>
	    <div>
	        <input class="form-control" name="type" type="text" id="type" value="{{ $image->type }}" >
	        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
	    </div>
	</div>
</div><div class="col-xs-12">
	<div class="form-group {{ $errors->has('height') ? 'has-error' : ''}}">
	    <label for="height" control-label>{{ 'Height' }}</label>
	    <div>
	        <input class="form-control" name="height" type="number" id="height" value="{{ $image->height }}" >
	        {!! $errors->first('height', '<p class="help-block">:message</p>') !!}
	    </div>
	</div>
</div><div class="col-xs-12">
	<div class="form-group {{ $errors->has('width') ? 'has-error' : ''}}">
	    <label for="width" control-label>{{ 'Width' }}</label>
	    <div>
	        <input class="form-control" name="width" type="number" id="width" value="{{ $image->width }}" >
	        {!! $errors->first('width', '<p class="help-block">:message</p>') !!}
	    </div>
	</div>
</div><div class="col-xs-12">
	<div class="form-group {{ $errors->has('size_kb') ? 'has-error' : ''}}">
	    <label for="size_kb" control-label>{{ 'Size Kb' }}</label>
	    <div>
	        <input class="form-control" name="size_kb" type="number" id="size_kb" value="{{ $image->size_kb }}" >
	        {!! $errors->first('size_kb', '<p class="help-block">:message</p>') !!}
	    </div>
	</div>
</div><div class="col-xs-12">
	<div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
	    <label for="date" control-label>{{ 'Date' }}</label>
	    <div>
	        <input class="form-control" name="date" type="datetime-local" id="date" value="{{ $image->date }}" >
	        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
	    </div>
	</div>
</div><div class="col-xs-12">
	<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
	    <label for="user_id" control-label>{{ 'User Id' }}</label>
	    <div>
	        <input class="form-control" name="user_id" type="number" id="user_id" value="{{ $image->user_id }}" >
	        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
	    </div>
	</div>
</div><div class="col-xs-12">
	<div class="form-group {{ $errors->has('hive_id') ? 'has-error' : ''}}">
	    <label for="hive_id" control-label>{{ 'Hive Id' }}</label>
	    <div>
	        <input class="form-control" name="hive_id" type="number" id="hive_id" value="{{ $image->hive_id }}" >
	        {!! $errors->first('hive_id', '<p class="help-block">:message</p>') !!}
	    </div>
	</div>
</div><div class="col-xs-12">
	<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
	    <label for="category_id" control-label>{{ 'Category Id' }}</label>
	    <div>
	        <input class="form-control" name="category_id" type="number" id="category_id" value="{{ $image->category_id }}" >
	        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
	    </div>
	</div>
</div><div class="col-xs-12">
	<div class="form-group {{ $errors->has('checklist_id') ? 'has-error' : ''}}">
	    <label for="checklist_id" control-label>{{ 'Checklist Id' }}</label>
	    <div>
	        <input class="form-control" name="checklist_id" type="number" id="checklist_id" value="{{ $image->checklist_id }}" >
	        {!! $errors->first('checklist_id', '<p class="help-block">:message</p>') !!}
	    </div>
	</div>
</div>


<div class="col-xs-12" style="margin-top: 20px;">
	<div class="form-group">
    	<input class="btn btn-primary btn-block" type="submit" value="{{ $submitButtonText }}">
    </div>
</div>
