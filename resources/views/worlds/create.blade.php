@extends('layouts.app')

@section('content')
<div class="col">
    <form action="{{ route('worlds.store') }}" method="POST">
        @include('worlds.fields')
        <div class="form-group row">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Create New World</button>
            </div>
            <div class="col-sm-9">
                <a href="{{ route('worlds.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
@endsection