@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <dl class="row">
                    <dt class="col-sm-3">ID</dt>
                    <dd class="col-sm-9">{{ $world->id }}</dd>

                    <dt class="col-sm-3">Name</dt>
                    <dd class="col-sm-9">{{ $world->name }}</dd>

                    <dt class="col-sm-3">Created</dt>
                    <dd class="col-sm-9">{{ date('F d, Y', strtotime($world->created_at)) }}</dd>

                    <dt class="col-sm-3">Updated</dt>
                    <dd class="col-sm-9">{{ date('F d, Y', strtotime($world->updated_at)) }}</dd>
                </dl>
            </div>
        </div>
    </div>
@endsection
