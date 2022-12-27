<?php

namespace App\Http\Controllers\Admin\Rekomendasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rekomendasi;

class RekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekomendasi = Rekomendasi::all();

        if($rekomendasi){
            // membuat deskripsi/keterangan
        $data = [
            "message" => "Get All Resource",
            "data" => $rekomendasi
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
            'id_kost' => $request->id_kost,
        ];

        $rekomendasi = Rekomendasi::create($input);
            $data = [
                "message"=>"Rekomendasi is Created!",
                "data" => $rekomendasi,
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
        $rekomendasi = Rekomendasi::find($id);

        if($rekomendasi){
            // membuat deskripsi/keterangan
        $data = [
            "message" => "Get Detail Resource",
            "data" => $rekomendasi
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
        $rekomendasi = Rekomendasi::find($id);

        if($rekomendasi){
            $input = [
                'id_kost' => $request->id_kost ?? $rekomendasi->id_kost,
                'created_at' => $request->created_at ?? $rekomendasi->created_at,
                'updated_at' => $request->updated_at ?? $rekomendasi->updated_at,
            ];
            $rekomendasi->update($input);

            $data = [
                'message' => 'Resource is update successfully',
                'data' => $rekomendasi
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
        $rekomendasi = Rekomendasi::find($id);

       if($rekomendasi){
        $rekomendasi->delete();

        $data = [
            "message" => "Resource is delete successfully",
        ];
       }else{
        $data = [
            'message' => 'Resource not found',
        ];
        
        return response()->json($data, 404);
    }
        return response()->json($data, 200);
    }
    
}