<?php

namespace App\Http\Controllers\Admin\Fasilitas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// import model
use App\Models\Fasilitas;
use Auth;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitas = Fasilitas::all();

        if($fasilitas){
            // membuat deskripsi/keterangan
            $data = [
                "message" => "Get All Resource",
                "data" => $fasilitas
            ];

            if(Auth::user()->role_id === 2 || Auth::user()->role_id === 3){
                return response()->json($data, 200);
            }elseif(Auth::user()->role_id === 1){
                $data = [
                    "message" => "Permission Denied!"
                ];
        
                return response()->json($data, 403);
            }
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
        if(Auth::user()->role_id === 2 || Auth::user()->role_id === 3){
            $input = [
                'fasilitas' => $request->fasilitas,
            ];
    
            $fasilitas = Fasilitas::create($input);
            $data = [
                "message"=>"Fasilitas is Created!",
                "data" => $fasilitas,
            ];
            return response()->json($data, 201);
        }elseif(Auth::user()->role_id === 1){
            $data = [
                "message" => "Permission Denied!"
            ];
    
            return response()->json($data, 403);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = Fasilitas::find($id);

        if($fasilitas) {
            $data = [
                "message" => "Get Detail Resource",
                "data" => $fasilitas
            ];
            return response()->json($data, 200);
        }else{
            $data = [
                "message" => "Data Not Found"
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
        // dd($request->all());
        $fasilitas = Fasilitas::find($id);

        if($fasilitas){
            $input = [
                'fasilitas' => $request->fasilitas ?? $fasilitas->fasilitas,
                'created_at' => $request->created_at ?? $fasilitas->created_at,
                'updated_at' => $request->updated_at ?? $fasilitas->updated_at,
            ];
            $fasilitas->update($input);

            $data = [
                'message' => 'Resource is update successfully',
                'data' => $fasilitas
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
        $fasilitas = Fasilitas::find($id);

       if($fasilitas){
        $fasilitas->delete();

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

    function search($fasilitas)
    {
        $result = Fasilitas::where('fasilitas', 'LIKE', '%'. $fasilitas. '%')->get();
        if(count($result)){
         return Response()->json($result);
        }
        else
        {
        return response()->json(['Result' => 'No Data not found'], 404);
      }
    }
}