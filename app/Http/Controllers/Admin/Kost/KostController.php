<?php

namespace App\Http\Controllers\Admin\Kost;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kost;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kost = Kost::all();

        if($kost){
            // membuat deskripsi/keterangan
        $data = [
            "message" => "Get All Resource",
            "data" => $kost
        ];
        return response()->json($data, 200);
        }else{
            $data = [
                "message" => "Resource Not Found"
            ];
            return response()->json($data, 404);
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
        $input = [
            'nama_kost' => $request->nama_kost,
            'luas_kamar' => $request->luas_kamar,
            'harga_kamar' => $request->harga_kamar,
            'alamat_kost' => $request->alamat_kost,
            'keterangan' => $request->keterangan,
            'foto_kamar' => $request->foto_kamar,
            'id_kota' => $request->id_kota,
            // 'id_user' => $request->id_user,
            'id_fasilitas' => $request->id_fasilitas,
        ];

        $kost = Kost::create($input);
            $data = [
                "message"=>"Kost is Created!",
                "data" => $kost,
            ];
            return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kost = Kost::find($id);

        if($kost){
            // membuat deskripsi/keterangan
        $data = [
            "message" => "Get Detail Resource",
            "data" => $kost
        ];
        return response()->json($data, 200);
        }else{
            $data = [
                "message" => "Resource Not Found"
            ];
            return response()->json($data, 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $kost = Kost::find($id);

        if($kost){
            $input = [
                'foto_kamar' => $request->foto_kamar ?? $kost->foto_kamar,
                'nama_kost' => $request->nama_kost ?? $kost->nama_kost,
                'luas_kamar' => $request->luas_kamar ?? $kost->luas_kamar,
                'harga_kamar' => $request->harga_kamar ?? $kost->harga_kamar,
                'alamat_kost' => $request->alamat_kost ?? $kost->alamat_kost,
                'keterangan' => $request->keterangan ?? $kost->keterangan,
                'id_fasilitas' => $request->id_fasilitas ?? $kost->id_fasilitas,
                'kota_id' => $request->kota_id ?? $kost->kota_id,
                'created_at' => $request->created_at ?? $kost->created_at,
                'updated_at' => $request->updated_at ?? $kost->updated_at,
            ];
            $kost->update($input);

            $data = [
                'message' => 'Resource is update successfully',
                'data' => $kost
            ];

            return response($data, 200);
        }else{
            $data = [
                'message' => 'Resource not found',
            ];
            return response()->json($data, 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}