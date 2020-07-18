@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a class="btn btn-primary" href="{{ route('worlds.create') }}" role="button">Add New World</a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th class="Actions">Actions</th>
                        </tr>
                    </thead>
                @if($worlds)
                @forelse ( $worlds as $world )
                <tr>
                    <td>ID: {{ $world->id ?? '' }}</td>
                    <td>NAME: {{ $world->name ?? '' }}</td>
                    {{-- @forelse ( $world->parties as $party )
                        <pre>Party name: {{ $party->name ?? '' }}</pre>
                        <pre>Party id: {{ $party->id ?? '' }}</pre>
                        <pre>Party Solo: {{ $party->solo ? 'true' : 'false' }}</pre>
                    @empty
                    @endforelse --}}
                    <td class="actions">
                        <a
                            href="{{ action('WorldsController@show', ['world' => $world->id]) }}"
                            alt="View"
                            title="View">
                          View
                        </a>
                        <a
                            href="{{ action('WorldsController@edit', ['world' => $world->id]) }}"
                            alt="Edit"
                            title="Edit">
                          Edit
                        </a>
                    <form action="{{ action('WorldsController@destroy', ['world' => $world->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-link" title="Delete" value="DELETE">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                @endforelse
                @endif($worlds)
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
