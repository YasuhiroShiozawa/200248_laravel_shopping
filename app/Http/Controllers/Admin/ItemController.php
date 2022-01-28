<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function index()
    {
        //SELECT * FROM items;
        $items = Item::get();
        $data = ['items' => $items];
        return view('admin.item.index', $data);
    }

    public function create()
    {
        return view('admin.item.create');
    }
    public function add(Request $request)
    {
        $posts = $request->all();

        // dd($posts);

        Item::create($posts);

        return redirect('/admin/item/');
    }

    public function edit(Request $request, $id)
    {
        $item = Item::find($id);
        $data = ['item' => $item];
        return view('admin.item.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $posts = $request->all();
        //UPDATE items SET name = 'xxxx', code = 'xxxx' ... WHERE id = xxx;
        Item::find($id)->update($posts);
        return redirect()->route('admin.item.index');
    }
}
