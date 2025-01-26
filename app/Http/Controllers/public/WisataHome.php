<?php

namespace App\Http\Controllers\public;

use App\Models\Sosmed;
use App\Models\Wisata;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WisataHome extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'nama' => 'halaman wisata',
            'title' => 'Paket Wisata',
            'wisatas' => Wisata::all(),
            'sosmed' => Sosmed::find('1'),
            'profile' => Profile::find('1'),
        ];
        return view('wisata', $data);
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
