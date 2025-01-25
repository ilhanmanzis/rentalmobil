<?php

namespace App\Http\Controllers\public;

use App\Models\Mobil;
use App\Models\Motor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Kendaraan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'nama' => 'halaman kendaraan',
            'title' => 'Kendaraan',
            'motors' => Motor::all(),
            'mobils' => Mobil::all(),
        ];
        return view('kendaraan', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
