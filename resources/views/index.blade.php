@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>
            DUCK-DUCK
            <a href="{{ route('create') }}">+</a>
        </h1>
        <ul class="list-unstyled">
            @foreach ($ducks as $duck)
                <li class="my-3">
                    <a class="mx-3 btn btn-primary" href="{{ route('show', $duck -> id) }}">
                        {{ $duck -> name }}
                    </a>

                    <a class="mx-3 btn btn-primary" href="{{ route('edit', $duck -> id) }}">
                        EDIT
                    </a>
                    <form
                        class="d-inline"
                        method="POST"
                        action="{{ route('destroy', $duck -> id) }}"
                    >

                        @csrf
                        @method('DELETE')

                        <input class="mx-3 btn btn-primary" type="submit" value="DELETE">
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
