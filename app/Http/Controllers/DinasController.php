<?php

namespace App\Http\Controllers;

use App\Models\Dinas;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\Facades\Toast;

class DinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dinas.index', [
            'dinas' => SpladeTable::for(Dinas::class)
                ->column('kode_skpd')
                ->column('nama_dinas')
                ->column('created_at')
                ->column('actions')
                ->paginate(46)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dinas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dinas::create([
            'kode_skpd' => $request->kode_skpd,
            'nama_dinas' => $request->nama_dinas,
        ]);
        Toast::title('data dinas berhasil disimpan')->autoDismiss(3);
        return to_route('dinas.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}