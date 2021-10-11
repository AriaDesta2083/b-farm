<?php

namespace App\Http\Controllers;

use App\Models\Pendapatan;
use Illuminate\Http\Request;

class PendapatanController extends Controller
{
    private $params;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->params['pendapatan'] = Pendapatan::orderBy('tanggal', 'DESC')->get();

        return view('pendapatan.index', $this->params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendapatan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'pendapatan' => 'required',
        ], [
            'required' => ':attribute harus diisi.',
        ], [
            'tanggal' => 'Tanggal',
            'pendapatan' => 'Pendapatan'
        ]);

        $newPendapatan = new Pendapatan;
        $newPendapatan->tanggal = $request->tanggal;
        $newPendapatan->pendapatan = $request->pendapatan;
        $newPendapatan->keuntungan = $request->pendapatan;

        $newPendapatan->save();

        return redirect('kelola-keuangan/pendapatan')->withStatus('Berhasil menambah data.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->params['pendapatan'] = Pendapatan::find($id);

        return view('pendapatan.edit', $this->params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'pendapatan' => 'required',
        ], [
            'required' => ':attribute harus diisi.',
        ], [
            'tanggal' => 'Tanggal',
            'pendapatan' => 'Pendapatan'
        ]);

        $newPendapatan = Pendapatan::find($id);
        $newPendapatan->tanggal = $request->tanggal;
        $newPendapatan->pendapatan = $request->pendapatan;
        $newPendapatan->keuntungan = $request->pendapatan;

        $newPendapatan->save();

        return redirect('kelola-keuangan/pendapatan')->withStatus('Berhasil memperbarui data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pendapatan::findOrFail($id)->delete();

        return redirect('kelola-keuangan/pendapatan')->withStatus('Data berhasil dihapus.');
    }
}
