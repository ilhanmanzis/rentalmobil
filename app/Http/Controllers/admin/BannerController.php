<?php

namespace App\Http\Controllers\admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $db;
    public function __construct()
    {
        $this->db = new Banner();
    }
    public function index()
    {
        $data = [
            'title' => 'Banner',
            'banners' => $this->db->all(),
        ];
        return view('admin/banner/banner', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah Data Banner',
        ];
        return view('admin/banner/create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'url' => 'required|image|mimes:png,jpg,jpeg,webp,svg|max:2048'
        ], [
            'url.required' => 'url tidak boleh kosong',
            'url.image' => 'File yang diunggah harus berupa gambar',
            'url.mimes' => 'url hanya boleh memiliki ekstensi: png, jpg, jpeg, webp, svg',
            'url.max' => 'Ukuran url tidak boleh lebih dari 2MB'
        ]);

        if ($request->hasFile('url')) {
            $file = $request->file('url');

            // Generate nama unik untuk file
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Simpan file ke dalam folder public/images/mobil/
            $file->move(public_path('images/banner'), $fileName);

            // Contoh: Simpan nama file ke dalam database (opsional)
            // $data['url'] = 'images/mobil/' . $fileName;
            $data = [
                'url' => $fileName
            ];
            $this->db->create($data);
            return redirect('/admin/banner')->with('success', 'Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = [
            'title' => 'Edit Data Banner',
            'banner' => $this->db->find($id)
        ];
        return view('admin/banner/edit', $data);
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
        if ($request->hasFile('url')) {
            $request->validate([
                'url' => 'image|mimes:png,jpg,jpeg,webp,svg|max:2048'
            ], [
                'url.image' => 'File yang diunggah harus berupa gambar',
                'url.mimes' => 'url hanya boleh memiliki ekstensi: png, jpg, jpeg, webp, svg',
                'url.max' => 'Ukuran url tidak boleh lebih dari 2MB'
            ]);
            $file = $request->file('url');

            // Generate nama unik untuk file
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Simpan file ke dalam folder public/images/mobil/
            $file->move(public_path('images/banner'), $fileName);
            // Path ke file url lama
            $oldData = $this->db->where('id_banner', $id)->first();
            $oldFilePath = public_path('images/banner/' . $oldData->url);

            // Hapus file lama jika ada
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }

            // Contoh: Simpan nama file ke dalam database (opsional)
            // $data['foto'] = 'images/mobil/' . $fileName;
            $data = [
                'url' => $fileName
            ];
            $this->db->where('id_banner', $id)->update($data);
            return redirect('/admin/banner')->with('success', 'Data berhasil diubah');
        }
        return redirect('/admin/banner')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $oldData = $this->db->where('id_banner', $id)->first();
        $oldFilePath = public_path('images/banner/' . $oldData->url);

        // Hapus file lama jika ada
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);
        }
        $this->db->where('id_banner', $id)->delete();
        return redirect('/admin/banner')->with('success', 'Data berhasil dihapus');
    }
}
