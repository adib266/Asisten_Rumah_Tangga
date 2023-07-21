<?php

namespace App\Http\Controllers;


use App\Models\boking;
use App\Models\Pekerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Pekerjaan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function tentang()
    {
        return view('tentang');
    }

    //                  pekerja                 //
    public function pendaftaran_pekerja()
    {
        return view('pendaftaran_pekerja');
    }

    public function pekerja()
    {
        $pekerja = Pekerja::all();
        $data['pekerja'] = $pekerja;
        return view('pekerja', $data);
    }
    public function action_pekerja(Request $request){
      
        $nama = $request->nama;
        $ttl = $request->ttl;
        $nik = $request->nik;
        $alamat = $request->alamat;
        $desa = $request->desa;
        $pekerjaan = $request->pekerjaan;
        $kecamatan = $request->kecamatan;
        $kode_pos = $request->kode_pos;
        $pengalaman = $request->pengalaman;
        $no_hp = $request->no_hp;
        $no_wa = $request->no_wa;
        $deskripsi = $request->deskripsi;
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->storeAs('image/foto/',$filename);
            $foto = $filename;
        }
        if($request->hasFile('ktp')){
            $file = $request->file('ktp');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->storeAs('image/ktp/',$filename);
            $ktp = $filename;
        }
        $gaji = $request->gaji;

        $insert = pekerja::create([
            'nama' => $nama,
            'ttl' => $ttl,
            'nik' => $nik,
            'alamat' => $alamat,
            'desa' => $desa,
            'pekerjaan' => $pekerjaan,
            'kecamatan'=> $kecamatan,
            'kode_pos' => $kode_pos,
            'pengalaman' => $pengalaman,
            'no_hp' => $no_hp,
            'no_wa' => $no_wa,
            'deskripsi' => $deskripsi,
            'foto' => $foto,
            'ktp' => $ktp,
            'gaji' => $gaji,
        ]);

        return redirect("/pegawai");
    }
    // public function store(HomeController $request)
    // {
    //     $imageName = time().'.'.$request->file('foto')->extension();
    //     $uploadedImage = $request->file('foto')->move(public_path('images'), $imageName);
    //     $imagePath = 'images/' . $imageName;

    //     $params = $request->validated();
        
    //     if ($product = Product::create($params)) {
    //         $product->image = $imagePath;
    //         $product->save();

    //         return redirect(route('products.index'))->with('success', 'Added!');
    //     }
    // }

    public function edit_pekerja($id)
    {
        $pekerja = Pekerja::find($id);
        $data['pekerja'] = $pekerja;
        return view('/edit_pekerja', $data);
    }

    public function hapus_pekerja($id){
        $pekerja = Pekerja::find($id);
        $pekerja->delete();
        return redirect("/verifikasi");
    }
    public function supir()
    {
        $supir = Pekerja::where('pekerjaan', 'Supir')->where('status', 1)->get();
        
        
        return view('supir',compact('supir') );
    }
    public function satpam()
    {
        $satpam = Pekerja::where('pekerjaan', 'Satpam')->where('status', 1)->get();
        return view('satpam',compact('satpam') );
    }
    public function pembantu()
    {
        $pembantu = Pekerja::where('pekerjaan', 'Pembantu Rumah')->where('status', 1)->get();
        return view('pembantu',compact('pembantu') );
    }
    public function baby()
    {
        $baby = Pekerja::where('pekerjaan', 'Babysitter')->where('status', 1)->get();
        return view('baby',compact('baby') );
    }
    public function kebun()
    {
        $kebun = Pekerja::where('pekerjaan', 'Tukang Kebun')->where('status', 1)->get();
        return view('kebun',compact('kebun') );
    }
    public function home()
    {
        return view('home');
    }
    public function readmore()
    {
        return view('readmore');
    }
    //                 PEGAWAI               //
    public function pegawai()
    {
        return view('pegawai');
    }
    //                BOKING                  //
    public function majikan()
    {
        return view('majikan');
    }
    public function orderan_anda()
    {
        $boking = Boking::all();
        $data['boking'] = $boking;
        return view('orderan_anda', $data);
    }
    public function data_boking()
    {
        $idUser = Auth::user()->username;
        $boking = boking::where('nama_majikan', $idUser)->where('acc', 1)->get();
        return view('data_boking', compact('boking'));       
    }
    public function boking($id)
    {
        $detail = Pekerja::findOrFail($id);
        return view('boking',['detail' => $detail]);
    }
    public function history_majikan(Request $request){
        $boking = Boking::all();
        $data['boking'] = $boking;
        return view('history_majikan', $data);
    }
    public function action_boking(Request $request){
        $nama_majikan = $request->nama_majikan;
        $nama_pekerja = $request->nama_pekerja;
        $id_pekerja = $request->id_pekerja;
        $awal_kontrak = $request->awal_kontrak;
        $akhir_kontrak = $request->akhir_kontrak;
        $jenis_art = $request->jenis_art;
        $tawar_gaji = $request->tawar_gaji;

        boking::create([
            'nama_majikan' => $nama_majikan,
            'nama_pekerja' => $nama_pekerja,
            'jenis_art' => $jenis_art,
            'tawar_gaji' => $tawar_gaji,
            'foto_ktp' => "",
            'id_pekerja'=> $id_pekerja,
            'acc' => 0,
            'awal_kontrak'=> $awal_kontrak,
            'akhir_kontrak'=> $akhir_kontrak
            
        ]);

        return redirect("/data_boking");
    }
    
    public function update_boking(Request $request)
    {
        $id = $request->id;
        $nama_majikan = $request->nama_majikan;
        $nama_pekerja = $request->nama_pekerja;
        $jenis_art = $request->jenis_art;
        $tawar_gaji = $request->tawar_gaji;

        $boking = boking::find($id);
        $boking->nama_majikan = $nama_majikan;
        $boking->nama_pekerja = $nama_pekerja;
        $boking->jenis_art = $jenis_art;
        $boking->tawar_gaji = $tawar_gaji;
        $boking->save();
        return redirect('/data_boking');
    }

    public function hapus_boking($id){
        $boking = boking::find($id);
        $boking->delete();
        return redirect("/data_boking");
    }
    public function hapus_bokingp($id){
        $boking = boking::find($id);
        $boking->delete();
        return redirect("/orderan_anda");
    }

    //                 ADMIN                  //

    
    public function verifikasi()
    {
        $verifikasi = Pekerja::all();
        $data['verifikasi'] = $verifikasi;
        return view('verifikasi', $data);
    }
    public function tambah()
    {
        return view('tambah');
    }
    public function action_tambah(Request $request){
        $pekerjaan = $request->pekerjaan;

        $insert = Pekerjaan::create([
            'pekerjaan' => $pekerjaan
        ]);

        return redirect("/admin");
    }
    // public function update(Request $request)
    // {
    //     $id = $request->id;
    //     $pekerja = $request->pekerja;

    //     $pekerja = Pekerja::find($id);
    //     $pekerja->pekerja = $pekerja;
    //     $pekerja->save();
    //     return redirect('/verifikasi');
    // }

   
    public function update(Request $request, $id)
    {
       
        // Validate the incoming request data
        

        // Find the record in the database using the provided ID
        $pekerja = Pekerja::find($id);

        // Check if the record exists
        if (!$pekerja) {
            return redirect('verifikasi')->with('error', 'Pekerja not found');
        }

        // Update the data fields based on the request
        $pekerja->nama = $request->nama;
        $pekerja->nik = $request->nik;
        $pekerja->alamat = $request->alamat;
        $pekerja->desa = $request->desa;
        $pekerja->kecamatan = $request->kecamatan;
        $pekerja->ttl = $request->ttl;
        $pekerja->pekerjaan = $request->pekerjaan;
        $pekerja->kode_pos = $request->kode_pos;
        $pekerja->pengalaman = $request->pengalaman;
        $pekerja->deskripsi = $request->deskripsi;
        $pekerja->no_hp = $request->no_hp;
        $pekerja->no_wa = $request->no_wa;
        $pekerja->gaji = $request->gaji;

        // Handle file uploads (if provided)
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('pekerja/foto', 'public');
            $pekerja->foto = $fotoPath;
        }

        if ($request->hasFile('ktp')) {
            $ktpPath = $request->file('ktp')->store('pekerja/ktp', 'public');
            $pekerja->ktp = $ktpPath;
        }

        // Save the updated data to the database
        $pekerja->save();

        return redirect('/verifikasi')->with('success', 'Pekerja data updated successfully');
    }


    public function viewData($id){
        $pekerja = Pekerja::find($id);
        return view('editpekerja', [
            'method'=> "PUT",
            'action'=> "/edit/{id}",
            'pekerja'=> $pekerja
        ]);

    }


    public function updatePekerja(Request $request, $id){

        $pekerja = Pekerja::find($id); 
                   
            if($request->hasFile('ktp')){
                Storage::delete($pekerja->ktp);
                $file = $request->file('ktp');
                $extention = $file->getClientOriginalExtension();
                $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
                $file->storeAs('image/ktp/',$filename);
                $pekerja->ktp = $filename;
            }
            if($request->hasFile('foto')){
                Storage::delete($pekerja->ktp);
                $file = $request->file('foto');
                $extention = $file->getClientOriginalExtension();
                $filename = $request->name.'_'.now()->timestamp.'.'.$extention;
                $file->storeAs('image/foto/',$filename);
                $pekerja->foto = $filename;
            }
    
    
            $pekerja->nama = $request->nama;
            $pekerja->nik = $request->nik;
            $pekerja->alamat = $request->alamat;
            $pekerja->desa = $request->desa;
            $pekerja->kecamatan = $request->kecamatan;
            $pekerja->ttl = $request->ttl;
            $pekerja->pekerjaan = $request->pekerjaan;
            $pekerja->kode_pos = $request->kode_pos;
            $pekerja->pengalaman = $request->pengalaman;
            $pekerja->deskripsi = $request->deskripsi;
            $pekerja->no_hp = $request->no_hp;
            $pekerja->no_wa = $request->no_wa;
            $pekerja->gaji = $request->gaji;
            $pekerja->save();
    
            return redirect('/verifikasi')->with('success', 'Pekerja data updated successfully');
        }
    
    

    public function hapus($id){
        $pekerja = Pekerja::find($id);
        $pekerja->delete();
        return redirect("/verifikasi");
    }

    public function upprove($id){
        $upprove = DB::table('pekerjas')
                    ->where('id',$id)
                    ->update([
                        'status' => 1
                    ]);
        return redirect('/verifikasi');
    }


    public function acc($id){
        $acc = DB::table('bokings')
                    ->where('id',$id)
                    ->update([
                        'acc' => 1
                    ]);
        return redirect('/orderan_anda');
    }
    public function detail($id)
    {
        // $detail = Pekerja::findOrFail($id);
        $detail = DB::table('pekerjas')
                ->leftJoin('bokings', 'pekerjas.nama', '=', 'bokings.nama_pekerja')
                ->select('pekerjas.*','bokings.awal_kontrak','bokings.akhir_kontrak','bokings.acc')
                ->where('pekerjas.status','=', 1)
                ->where('pekerjas.id', '=', $id)
                ->get();
        // dd($detail);
        return view('detail', ['detail' => $detail]);
    }

    public function kontak()
    {
        return view('kontak');
    }
}