<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Duck;

class MainController extends Controller
{

    public function index() {

        $ducks = Duck :: all();

        return view('index', compact("ducks"));
    }

    public function show($id) {

        $duck = Duck :: findOrFail($id);

        return view('show', compact("duck"));
    }

    public function create() {

        return view('create');
    }

    public function store(Request $request) {

        $data = $request -> all();

        $duck = Duck :: create($data);

        return redirect() -> route('show', $duck -> id);
    }

    public function edit($id) {

        $duck = Duck :: findOrFail($id);

        return view('edit', compact("duck"));
    }
    public function update(Request $request, $id) {

        $data = $request -> all();

        $duck = Duck :: findOrFail($id);

        $duck -> update($data);

        return redirect() -> route('show', $duck -> id);
    }

    public function destroy($id) {

        $duck = Duck :: findOrFail($id);

        $duck -> delete();

        return redirect() -> route('index');
    }
}
