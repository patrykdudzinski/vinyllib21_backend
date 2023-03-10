<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genres;
use Response;

class GenresController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(){
        return Response::json( 
            Genres::orderBy('name', 'asc')->get()
        );
    }

    public function addNew(Request $request){

        $data = json_decode($request->getContent());
        $genre = Genres::create([
            'name' => $data->name
        ]);
 
        return $genre->id;   
    }

}
