<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Models\Post;
use Illuminate\Http\Request;

class DogController extends Controller
{

    public function index()
    {
        return Dog::all();
    }

    public function store(Request $request)
    {
        Dog::create($request->all());
    }

    public function show($id)
    {   $dogs = Dog::find($id);
        Dog::where('id', $id)->first();
        return view('admin.posts.dogs', compact('dogs'));
        return redirect()->route('dogs.show');
        return Dog::findOrFail();

    }



    public function update(Request $request, $id)
    {
        $dog = Dog::findOrFail($id);
        $dog->update($request->all());
    }


    public function destroy($id)
    {
        $dog = Dog::findOrFail($id);
        $dog->delete();
    }
}
