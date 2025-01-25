<?php

namespace App\Http\Controllers\admin;

use App\Models\Sosmed;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $db;
    public function __construct()
    {
        $this->db = new Sosmed();
    }
    public function index()
    {
        //
        $data = [
            'title' => 'Sosmed',
            'sosmed' => $this->db->find('1')
        ];
        return view('admin/sosmed/sosmed', $data);
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
        $data = [
            'fb' => $request->input('fb'),
            'url_fb' => $request->input('url_fb'),
            'wa' => $request->input('wa'),
            'url_wa' => $request->input('url_wa'),
            'ig' => $request->input('ig'),
            'url_ig' => $request->input('url_ig'),
            'tt' => $request->input('tt'),
            'url_tt' => $request->input('url_tt'),
            'x' => $request->input('x'),
            'url_x' => $request->input('url_x'),
        ];
        $this->db->where('id', $id)->update($data);
        return redirect('/admin/sosmed')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
