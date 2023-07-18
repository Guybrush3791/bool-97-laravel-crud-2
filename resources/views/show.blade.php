@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>
            {{ $duck -> name }}
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
        </h1>
        <img src="{{ $duck -> picture }}" width="350px">
        <div class="row justify-content-between py-3">
            <span class="col bg-dark text-light mx-3 rounded">
                Weight: {{ $duck -> weight }}Kg
            </span>
            <span class="col bg-dark text-light mx-3 rounded">
                Color: {{ $duck -> color }}
            </span>
        </div>
    </div>

@endsection
