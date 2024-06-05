<?php

namespace App\Http\Controllers;

use App\Models\kategoriPelanggan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::with('kategoriPelanggan')->get();
        return view('pelanggan.index', compact('pelanggan'));
    }
    
   /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis = KategoriPelanggan::all(); 
    return view('pelanggan.create', compact('jenis'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        
        $validator = validator::make($request->all(), [
            'kode_pelanggan' => 'required',
            'nama_pelanggan' => 'required|max:100',
            'alamat' => 'required|max:100',
            'kota' => 'required|max:20',
            'provinsi' => 'required|max:20',
            'nomor_telepon' => 'required',
            'email' => 'required|max:20',
            'kategori_pelanggan' => 'required',
            'batas_kredit' => 'required'
        ]);

        if ($validator->fails()){
            Session::flash('error', "Inputan Harus terisi semua.");
            return redirect('/pelanggan/create')->withInput();
        } else { 
            $simpanDatapelanggan = Pelanggan::create([ 
                'kode_pelanggan'     => $request->input('kode_pelanggan'),
                'nama_pelanggan'   => $request->input('nama_pelanggan'),
                'alamat'    => $request->input('alamat'),
                'kota'  => $request->input('kota'),
                'provinsi'  => $request->input('provinsi'),
                'nomor_telepon'  => $request->input('nomor_telepon'),
                'email' => $request->input('email'),
                'kategori_pelanggan' => $request->input('kategori_pelanggan'),
                'batas_kredit' => $request->input('batas_kredit')
            ]);
            if ($simpanDatapelanggan) {
                Session::flash('success', 'Proses menyimpan data pelanggan telah berhasil. ');
                return redirect('/pelanggan');
            } else {
                Session::flash('error', 'Proses menyimpan data pelanggan telah gagal. ');
                return redirect('/pelanggan/create');
            }

        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $pelanggan = Pelanggan::find($id);

        
        if ($pelanggan) {
            return view('/pelanggan.show', ['pelanggan' => $pelanggan]);
        } else {
            Session::flash('error', 'Data tidak ditemukan.');
            return redirect('/pelanggan');
            }
    }
    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $jenis = kategoriPelanggan::all();
        $pelanggan = Pelanggan::with('kategoriPelanggan')->find($id);
        return view('pelanggan.edit', compact('pelanggan','jenis')); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'kode_pelanggan' => 'required',
            'nama_pelanggan' => 'required|max:100',
            'alamat' => 'required|max:100',
            'kota' => 'required|max:20',
            'provinsi' => 'required|max:20',
            'nomor_telepon' => 'required',
            'email' => 'required|max:100',
            'kategori_pelanggan' => 'required',
            'batas_kredit' => 'required'
        ]);

        if ($validator->fails()) {
            Session::flash('error', 'Inputan harus terisi semua.');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $updatePelanggan = Pelanggan::find($id);

            
            $updatePelanggan->kode_pelanggan = $request->input('kode_pelanggan');
            $updatePelanggan->nama_pelanggan = $request->input('nama_pelanggan');
            $updatePelanggan->alamat = $request->input('alamat');
            $updatePelanggan->kota = $request->input('kota');
            $updatePelanggan->provinsi = $request->input('provinsi');
            $updatePelanggan->nomor_telepon = $request->input('nomor_telepon');
            $updatePelanggan->email = $request->input('email');
            $updatePelanggan->kategori_pelanggan = $request->input('kategori_pelanggan');
            $updatePelanggan->batas_kredit = $request->input('batas_kredit');

            if ($updatePelanggan->save()) {
                Session::flash('success', 'Proses update data pelanggan telah berhasil.');
                return redirect('/pelanggan');
            } else {
                Session::flash('error', 'Proses update data pelanggan telah gagal.');
                return redirect()->back()->withInput();
            }
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $pelanggan = Pelanggan::where('kode_pelanggan', $id)->first();

    if ($pelanggan) {
        if ($pelanggan->delete()) {
            Session::flash('success', 'Data pelanggan berhasil dihapus.');
        } else {
            Session::flash('error', 'Data pelanggan gagal dihapus.');
        }
    } else {
        Session::flash('error', 'Data pelanggan tidak ditemukan.');
    }

    return redirect('/pelanggan');
}
}