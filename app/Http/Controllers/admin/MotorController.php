<?php

namespace App\Http\Controllers\admin;

use App\Models\Motor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $db;

    public function __construct()
    {
        $this->db = new Motor();
    }
    public function index()
    {
        //
        $data = [
            'title' => 'Motor',
            'motors' => $this->db->all(),
        ];
        return view('admin/motor/motor', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah Data Motor'
        ];
        return view('admin/motor/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|integer',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'helm' => 'required',
            'wilayah' => 'required',
            'include' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg,webp,svg|max:2048'
        ], [
            'nama.required' => 'nama tidak boleh kosong',
            'harga.required' => 'harga tidak boleh kosong',
            'harga.integer' => 'harga harus berupa angka',
            'jam_mulai.required' => 'jam mulai tidak boleh kosong',
            'jam_selesai.required' => 'jam selesai tidak boleh kosong',
            'helm.required' => 'helm tidak boleh kosong',
            'wilayah.required' => 'wilayah tidak boleh kosong',
            'include.required' => 'include tidak boleh kosong',
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
            $file->move(public_path('images/motor'), $fileName);

            // Contoh: Simpan nama file ke dalam database (opsional)
            // $data['foto'] = 'images/mobil/' . $fileName;
            $data = [
                'nama' => $request->input('nama'),
                'harga' => $request->input('harga'),
                'jam_mulai' => $request->input('jam_mulai'),
                'jam_selesai' => $request->input('jam_selesai'),
                'helm' => $request->input('helm'),
                'wilayah' => $request->input('wilayah'),
                'include' => $request->input('include'),
                'foto' => $fileName
            ];
            $this->db->create($data);
            return redirect('/admin/motor')->with('success', 'Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = [
            'title' => 'Edit Data Motor',
            'motor' => $this->db->find($id)
        ];
        return view('admin/motor/edit', $data);
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
            'nama' => 'required',
            'harga' => 'required|integer',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'helm' => 'required',
            'wilayah' => 'required',
            'include' => 'required',

        ], [
            'nama.required' => 'nama tidak boleh kosong',
            'harga.required' => 'harga tidak boleh kosong',
            'harga.integer' => 'harga harus berupa angka',
            'jam_mulai.required' => 'jam mulai tidak boleh kosong',
            'jam_selesai.required' => 'jam selesai tidak boleh kosong',
            'helm.required' => 'jumlah helm tidak boleh kosong',
            'wilayah.required' => 'wilayah tidak boleh kosong',
            'include.required' => 'include tidak boleh kosong',
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
            $file->move(public_path('images/motor'), $fileName);
            // Path ke file foto lama
            $oldData = $this->db->where('id', $id)->first();
            $oldFilePath = public_path('images/motor/' . $oldData->foto);

            // Hapus file lama jika ada
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }

            // Contoh: Simpan nama file ke dalam database (opsional)
            // $data['foto'] = 'images/mobil/' . $fileName;
            $data = [
                'nama' => $request->input('nama'),
                'harga' => $request->input('harga'),
                'jam_mulai' => $request->input('jam_mulai'),
                'jam_selesai' => $request->input('jam_selesai'),
                'helm' => $request->input('helm'),
                'wilayah' => $request->input('wilayah'),
                'include' => $request->input('include'),
                'foto' => $fileName
            ];
            $this->db->where('id', $id)->update($data);
            return redirect('/admin/motor')->with('success', 'Data berhasil diubah');
        }
        $data = [
            'nama' => $request->input('nama'),
            'harga' => $request->input('harga'),
            'jam_mulai' => $request->input('jam_mulai'),
            'jam_selesai' => $request->input('jam_selesai'),
            'helm' => $request->input('helm'),
            'wilayah' => $request->input('wilayah'),
            'include' => $request->input('include'),
        ];
        $this->db->where('id', $id)->update($data);
        return redirect('/admin/motor')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // Path ke file foto lama
        $oldData = $this->db->where('id', $id)->first();
        $oldFilePath = public_path('images/motor/' . $oldData->foto);

        // Hapus file lama jika ada
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);
        }
        $this->db->where('id', $id)->delete();
        return redirect('/admin/motor')->with('success', 'Data berhasil dihapus');
    }
}
