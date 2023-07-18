@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h3>
            DUCK-DUCK CREATE
        </h3>
        <form
            method="POST"
            action="{{ route('store') }}"
        >

            @csrf

            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name">
            <br>

            <label for="weight">Weight</label>
            <br>
            <input type="number" name="weight" id="weight">
            <br>

            <label for="color">Color</label>
            <br>
            <input type="text" name="color" id="color">
            <br>

            <label for="picture">Picture</label>
            <br>
            <input type="text" name="picture" id="picture">
            <br>

            <input class="my-3" type="submit" value="CREATE">

        </form>
    </div>

@endsection
