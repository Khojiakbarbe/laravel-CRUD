<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Home;

class HomesController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view("Homes.index", compact("homes"));
    }
    public function create()
    {
        return view("Homes.create");
    }

    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'address' => 'required', 'price' => 'required']);
        Home::create($request->all());
        return redirect()->route('home')->with('success', "$request->name is successfuly created");
    }

    public function show($id)
    {
        $home = Home::find($id);
        return view('Homes.show', compact('home'));
    }

    public function delete()
    {
        return view('Homes.delete');
    }

    public function destroy($id)
    {
        $name = Home::find($id);
        Home::find($id)->delete();

        return redirect()->route('home')->with('success', "$name->name is deleted");
    }
    public function edit($id)
    {
        $home = Home::find($id);
        return view('Homes.edit', compact('home'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required', "price" => 'required', "address" => 'required']);
        $info = Home::find($id);
        $homeData = $request->all();
        $home = Home::find($id);
        $home->update($homeData);
        return redirect()->route('home')->with('success', "$info->name is changed to $request->name");
    }

}
