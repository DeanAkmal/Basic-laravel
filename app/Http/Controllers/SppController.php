<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\spps;
class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spp = DB::table("spps")->get();
        return view("spp.index", compact("spp"));
    }
    
    public function create ()
    {
        return view("spp.create");
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|min:4',
            'nominal' => 'required', // Corrected typo
        ]);
    
        // Create a new instance of the Spps model
        $spp = new Spps;
        $spp->tahun = $request->tahun;
        $spp->nominal = $request->nominal; // Make sure to set the 'nominal' attribute
        $spp->save();
    
        // Redirect to the index page with a success message
        return redirect()->route('spp.index')->with(['success' => 'Data Telah ditambahkan']);
    }
    
    public function edit(string $id_spp)
    {
        //Mengambil data dari database
        $spp = DB::table('spps')->where('id_spp', $id_spp)->first();
        // menampilkan view edit data
        return view('spp.edit', compact('spp'));
    }

    
    public function show(string $id_spp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_spp)
    {
        $request->validate([
            'tahun'  => 'required|min:4',
            'nominal'=> 'required',
        ]);

        // Query Untuk menyimpan data
        $query = DB::table('spps')
        ->where('id_spp', $id_spp)
        ->update([
            'tahun'  => $request['tahun'],
            'nominal'=> $request['nominal'],
        ]);
        // Jika data disimpan maka di redirect ke halaman index
        return redirect()->route('spp.index')->with(['success' => 'Data Berhasil diupdate']);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_spp)
    {
        $query = DB::table('spps')->where('id_spp',$id_spp)->delete();
        return redirect()->route('spp.index')->with(['success'=> 'Data Telah dihpaus']);
    }
}
