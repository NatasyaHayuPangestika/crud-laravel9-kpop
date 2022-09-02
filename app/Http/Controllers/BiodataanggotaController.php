<?php

namespace App\Http\Controllers;

use App\Models\Biodataanggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BiodataanggotaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get biodata anggota
        $biodataanggotas = Biodataanggota::latest()->paginate(10);

        //render view with biodata anggota
        return view('biodataanggotas.index', compact('biodataanggotas'));
    }
        
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('biodataanggotas.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nama_kpop'     => 'required|min:5',
            'jk_kpop'       => 'required|string',
            'dob_kpop'      => 'required',
            'asalgrup_kpop' => 'required|min:3'
        ]);

        //create biodata anggota
        Biodataanggota::create([
            'nama_kpop'     => $request->nama_kpop,
            'jk_kpop'       => $request->jk_kpop,
            'dob_kpop'      => $request->dob_kpop,
            'asalgrup_kpop' => $request->asalgrup_kpop
        ]);

        //redirect to index
        return redirect()->route('biodataanggotas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

        
    /**
     * edit
     *
     * @param  mixed $biodataanggota
     * @return void
     */
    public function edit(Biodataanggota $biodataanggota)
    {
        return view('biodataanggotas.edit', compact('biodataanggota'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $biodataanggota
     * @return void
     */

    public function update(Request $request, Biodataanggota $biodataanggota)
    {
        //validate form
        $this->validate($request, [
            'nama_kpop'     => 'required|min:5',
            'jk_kpop'       => 'required',
            'dob_kpop'      => 'required',
            'asalgrup_kpop' => 'required|min:3'
        ]);

            //update post with new image
            $biodataanggota->update([
            'nama_kpop'     => $request->nama_kpop,
            'jk_kpop'       => $request->jk_kpop,
            'dob_kpop'      => $request->dob_kpop,
            'asalgrup_kpop' => $request->asalgrup_kpop
            ]);

        //redirect to index
        return redirect()->route('biodataanggotas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

        
    /**
     * destroy
     *
     * @param  mixed $biodataanggota
     * @return void
     */
    public function destroy(Biodataanggota $biodataanggota)
    {

        //delete biodata anggota
        $biodataanggota->delete();

        //redirect to index
        return redirect()->route('biodataanggotas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
