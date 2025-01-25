<?php

namespace App\Http\Controllers\admin;

use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mobil;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $db;
    public function __construct()
    {
        $this->db = new Wisata();
    }
    public function index()
    {
        $data = [
            'title' => 'Wisata',
            'wisatas' => $this->db->all()
        ];
        return view('admin/wisata/wisata', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Tambah Data Wisata',
            'mobils' => Mobil::all()
        ];
        return view('admin/wisata/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_mobil' => 'required',
            'nama' => 'required',
            'harga' => 'required|integer',
            'wilayah' => 'required',
            'include' => 'required',
            'daftar_wisata' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg,webp,svg|max:2048'
        ], [
            'nama.required' => 'nama tidak boleh kosong',
            'harga.required' => 'harga tidak boleh kosong',
            'harga.integer' => 'harga harus berupa angka',
            'wilayah.required' => 'wilayah tidak boleh kosong',
            'include.required' => 'include tidak boleh kosong',
            'daftar_wisata.required' => 'daftar wisata tidak boleh kosong',
            'foto.required' => 'Foto tidak boleh kosong',
            'foto.image' => 'File yang diunggah harus berupa gambar',
            'foto.mimes' => 'Foto hanya boleh memiliki ekstensi: png, jpg, jpeg, webp, svg',
            'foto.max' => 'Ukuran foto tidak boleh lebih dari 2MB'
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');

            // Generate nama unik untuk file
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Simpan file ke dalam folder public/images/mobil/
            $file->move(public_path('images/wisata'), $fileName);

            // Contoh: Simpan nama file ke dalam database (opsional)
            // $data['foto'] = 'images/mobil/' . $fileName;
            $data = [
                'id_mobil' => $request->input('id_mobil'),
                'nama' => $request->input('nama'),
                'harga' => $request->input('harga'),
                'wilayah' => $request->input('wilayah'),
                'include' => $request->input('include'),
                'daftar_wisata' => $request->input('daftar_wisata'),
                'foto' => $fileName
            ];
            $this->db->create($data);
            return redirect('/admin/wisata')->with('success', 'Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = [
            'title' => 'Edit Data Wisata',
            'wisata' => $this->db->find($id),
            'mobils' => Mobil::all()
        ];
        return view('admin/wisata/edit', $data);
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
        $request->validate([
            'id_mobil' => 'required',
            'nama' => 'required',
            'harga' => 'required|integer',
            'wilayah' => 'required',
            'include' => 'required',
            'daftar_wisata' => 'required',
        ], [
            'nama.required' => 'nama tidak boleh kosong',
            'harga.required' => 'harga tidak boleh kosong',
            'harga.integer' => 'harga harus berupa angka',
            'wilayah.required' => 'wilayah tidak boleh kosong',
            'include.required' => 'include tidak boleh kosong',
            'daftar_wisata.required' => 'daftar wisata tidak boleh kosong',
        ]);

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:png,jpg,jpeg,webp,svg|max:2048'
            ], [
                'foto.image' => 'File yang diunggah harus berupa gambar',
                'foto.mimes' => 'Foto hanya boleh memiliki ekstensi: png, jpg, jpeg, webp, svg',
                'foto.max' => 'Ukuran foto tidak boleh lebih dari 2MB'
            ]);
            $file = $request->file('foto');

            // Generate nama unik untuk file
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Simpan file ke dalam folder public/images/mobil/
            $file->move(public_path('images/wisata'), $fileName);

            // Contoh: Simpan nama file ke dalam database (opsional)
            // $data['foto'] = 'images/wisata/' . $fileName;
            // Path ke file foto lama
            $oldData = $this->db->where('id_wisata', $id)->first();
            $oldFilePath = public_path('images/wisata/' . $oldData->foto);

            // Hapus file lama jika ada
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
            $data = [
                'id_mobil' => $request->input('id_mobil'),
                'nama' => $request->input('nama'),
                'harga' => $request->input('harga'),
                'wilayah' => $request->input('wilayah'),
                'include' => $request->input('include'),
                'daftar_wisata' => $request->input('daftar_wisata'),
                'foto' => $fileName
            ];
            $this->db->where('id_wisata', $id)->update($data);
            return redirect('/admin/wisata')->with('success', 'Data berhasil diubah');
        }
        $data = [
            'id_mobil' => $request->input('id_mobil'),
            'nama' => $request->input('nama'),
            'harga' => $request->input('harga'),
            'wilayah' => $request->input('wilayah'),
            'include' => $request->input('include'),
            'daftar_wisata' => $request->input('daftar_wisata'),

        ];
        $this->db->where('id_wisata', $id)->update($data);
        return redirect('/admin/wisata')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $oldData = $this->db->where('id_wisata', $id)->first();
        $oldFilePath = public_path('images/wisata/' . $oldData->foto);

        // Hapus file lama jika ada
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);
        }
        $this->db->where('id_wisata', $id)->delete();
        return redirect('/admin/wisata')->with('success', 'Data berhasil dihapus');
    }
}
