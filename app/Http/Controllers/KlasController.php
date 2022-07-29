<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Klas;
use App\API\API;
use Illuminate\Http\Request;
use Exception;

class KlasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Klas::all();

        if($data) {
            return API::createApi(200, 'Success', $data);
        }else {
            return API::createApi(400, 'failed');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required',
                'umur' => 'required',
                'no' => 'required',
                'email' => 'required',
                'nama_kelas' => 'required',
                'jurusan' => 'required',
            ]);

            $klas = Klas::create([
                'name' => $request->name,
                'umur' => $request->umur,
                'no' => $request->no,
                'email' => $request->email,
                'nama_kelas' => $request->nama_kelas,
                'jurusan' => $request->jurusan 
            ]);

            $data = Klas::where('id', '=',$klas->id)->get();

            if($data) {
                return API::createApi(200, 'Success', $data);
            }else {
                return API::createApi(400, 'failed');
            }

        }catch(Exception $error) {
            return API::createApi(400, 'Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Klas  $klas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Klas::where('id', '=',$id)->get();

            if($data) {
                return API::createApi(200, 'Success', $data);
            }else {
                return API::createApi(400, 'failed');
            }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Klas  $klas
     * @return \Illuminate\Http\Response
     */
    public function edit(Klas $klas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Klas  $klas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $request->validate([
                'name' => 'required',
                'umur' => 'required',
                'no' => 'required',
                'email' => 'required',
                'nama_kelas' => 'required',
                'jurusan' => 'required',
            ]);

            $klas = Klas::findOrFail($id);

            $klas->update([
                'name' => $request->name,
                'umur' => $request->umur,
                'no' => $request->no,
                'email' => $request->email,
                'nama_kelas' => $request->nama_kelas,
                'jurusan' => $request->jurusan 
            ]);

            $data = Klas::where('id', '=',$klas->id)->get();

            if($data) {
                return API::createApi(200, 'Success', $data);
            }else {
                return API::createApi(400, 'failed');
            }

        }catch(Exception $error) {
            return API::createApi(400, 'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Klas  $klas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $klas = Klas::findOrFail($id);

        $data = $klas->delete();
        if($data) {
            return API::createApi(200, 'Success', $data);
        }else {
            return API::createApi(400, 'failed');
        }
    }
}
