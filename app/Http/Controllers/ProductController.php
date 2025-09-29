<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Devuelve la vista que está en resources/views/products/index.blade.php
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Devuelve la vista para crear un nuevo producto
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Aún no hacemos nada aquí
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Aún no hacemos nada aquí
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Devuelve la vista para editar un producto
        return view('products.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Aún no hacemos nada aquí
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Aún no hacemos nada aquí
    }
}