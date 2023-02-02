<?php

namespace App\Http\Controllers\Admin\Kota;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kota;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kota = Kota::all();

        if($kota){
            // membuat deskripsi/keterangan
        $data = [
            "message" => "Get All Resource",
            "data" => $kota
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
            'nama_kota' => $request->nama_kota,
        ];

        $nama_kota = Kota::create($input);
            $data = [
                "message"=>"Kota is Created!",
                "data" => $nama_kota,
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
        $kota = Kota::find($id);

        if($kota){
            // membuat deskripsi/keterangan
        $data = [
            "message" => "Get All Resource",
            "data" => $kota
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
        $kota = Kota::find($id);

        if($kota){
            $input = [
                'nama_kota' => $request->nama_kota ?? $kota->nama_kota,
                'created_at' => $request->created_at ?? $kota->created_at,
                'updated_at' => $request->updated_at ?? $kota->updated_at,
            ];
            $kota->update($input);

            $data = [
                'message' => 'Resource is update successfully',
                'data' => $kota
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
        $kota = Kota::find($id);

       if($kota){
        $kota->delete();

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

    function search($kota)
    {
        $result = Kota::where('nama_kota', 'LIKE', '%'. $kota. '%')->get();
        if(count($result)){
         return Response()->json($result);
        }
        else
        {
        return response()->json(['Result' => 'No Data not found'], 404);
      }
    }
}