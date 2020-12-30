<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use App\Http\Requests\SaveVentaRequest;
use App\Http\Controllers\ObraController;
use App\Obra;
class VentaController extends Controller
{
    //



    public function create(Obra $obra){


        return view('obra.comprarVoleto',['obra'=>$obra]);
    }

    public function store(Obra $obras, SaveVentaRequest $request){
   
        // return request()->only('title',  );

        // $fields = request()->validate([
        //     'title'=>'required',
        //     'slug'=>'required',
        //     'description'=>'required',

        // ]);
        Venta::create($request->toArray());


        // $obras->disponibles = $obras->disponibles-1 ;
        return redirect()->route('obra.update',$obras);


    }
    
}
