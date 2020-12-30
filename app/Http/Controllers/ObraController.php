<?php



namespace App\Http\Controllers;

use App\Http\Requests\SaveObraRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Obra;


class ObraController extends Controller
{
    
    
    public function index()
    {

        $obra = DB::table('obras')->get();
        
        return view ('index', compact('obra'));
    }


    public function store(SaveObraRequest $request){
   

        // return request()->only('title',  );

        // $fields = request()->validate([
        //     'title'=>'required',
        //     'slug'=>'required',
        //     'description'=>'required',

        // ]);
        Obra::create($request->toArray());
        return redirect()->route('obra.index');


    }

    public function create(){


        return view('obra.create',[
            'project'=>new Obra
        ]);
    }
    public function update(Obra $obra, SaveObraRequest $request){
        $obra->disponibles = $obra->disponibles-1 ;

        // return $obra;
        
        $obra->update($request->toArray());
        return redirect()->route('obra.index');

    }
}
