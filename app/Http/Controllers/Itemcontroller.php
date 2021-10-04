<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Events\UserLogEvents;

class Itemcontroller extends Controller
{
    public function index(){
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create(){
        return view('items.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        $item = Item::create($request->all());

        event(new UserLogEvents("Create the item with ID#$item->id"));

        return redirect()->route('items.index')->with('success', 'New Item has been added!');
    }

    public function show(Item $item){
        return view ('items.show', ['item' =>  $item]);
    }

    public function edit(Item $item){
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer'
        ]);
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->quantity = $request->quantity;
        $item->save();

        event(new UserLogEvents("Updated the item with ID#$item->id"));

        return redirect()->route('items.index');
    }

    public function destroy(Item $item) {

        $item->delete();

        event(new UserLogEvents("Deleted the item with ID#$item->id"));

        return back();
    }
}
