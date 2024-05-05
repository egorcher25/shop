<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $goods = Goods::paginate(6);

        return view('goods.index', compact('goods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'required|max:255',
        ]);

        Goods::create($validatedData);

        return redirect()->route('goods.index')->with('success', 'Товар успешно создан');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Goods $goods)
    {
        return view('goods.show', compact('goods'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Goods $goods)
    {
        return view('goods.edit', compact('goods'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Goods $goods)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'required|max:255',
        ]);

        $goods->update($validatedData);

        return redirect()->route('goods.index')->with('success', 'Товар успешно обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Goods $goods)
    {
        $goods->delete();

        return redirect()->route('goods.index')->with('success', 'Товар успешно удален');
    }
}
