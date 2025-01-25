<?php

namespace App\Http\Controllers\admin;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $db;
    public function __construct()
    {
        $this->db = new Profile();
    }
    public function index()
    {
        //
        $data = [
            'title' => 'Setting',
            'profile' => $this->db->find('1')
        ];
        return view('admin/setting/setting', $data);
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
        if ($request->hasFile('logo')) {
            $request->validate([
                'logo' => 'image|mimes:png,jpg,jpeg,webp,svg|max:2048'
            ], [
                'logo.image' => 'File yang diunggah harus berupa gambar',
                'logo.mimes' => 'logo hanya boleh memiliki ekstensi: png, jpg, jpeg, webp, svg',
                'logo.max' => 'Ukuran logo tidak boleh lebih dari 2MB'
            ]);
            $file = $request->file('logo');

            // Generate nama unik untuk file
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Simpan file ke dalam folder public/images/mobil/
            $file->move(public_path('images/logo'), $fileName);

            // Contoh: Simpan nama file ke dalam database (opsional)
            // $data['foto'] = 'images/mobil/' . $fileName;
            // Path ke file foto lama
            $oldData = $this->db->where('id', $id)->first();
            $oldFilePath = public_path('images/logo/' . $oldData->logo);

            //Hapus file lama jika ada
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
            $data = [
                'nama' => $request->input('nama'),
                'slogan' => $request->input('slogan'),
                'banner1' => $request->input('banner1'),
                'banner2' => $request->input('banner2'),
                'banner3' => $request->input('banner3'),
                'sekilas_tittle' => $request->input('sekilas_tittle'),
                'sekilas' => $request->input('sekilas'),
                'tentang' => $request->input('tentang'),
                'tentang_mengapa' => $request->input('tentang_mengapa'),
                'alamat' => $request->input('alamat'),
                'logo' => $fileName
            ];
            $this->db->where('id', $id)->update($data);
            return redirect('/admin/setting')->with('success', 'Data berhasil diubah');
        }
        $data = [
            'nama' => $request->input('nama'),
            'slogan' => $request->input('slogan'),
            'banner1' => $request->input('banner1'),
            'banner2' => $request->input('banner2'),
            'banner3' => $request->input('banner3'),
            'sekilas_tittle' => $request->input('sekilas_tittle'),
            'sekilas' => $request->input('sekilas'),
            'tentang' => $request->input('tentang'),
            'tentang_mengapa' => $request->input('tentang_mengapa'),
            'alamat' => $request->input('alamat'),
        ];
        $this->db->where('id', $id)->update($data);
        return redirect('/admin/setting')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
