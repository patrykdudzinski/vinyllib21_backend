<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Library;
use Response;

class LibraryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
    }

    /*
     * desc: return json library (todo pagination and order)
     * 
     */
    public function index(Request $request)
    {
        return Response::json( 
            Library::getLibrary()
        );
    }

    /**
     * Adding new record to the vinyl library
     * @param: string artist
     * @param string name
     * @param int year
     * @param int record_label
     * @param int genre
     * @return int record_id
     */
    public function addToLibrary(Request $request)
    {            
        $data = json_decode($request->getContent());
        $record = Library::create([
            'artist'        => $data->artist,
            'name'          => $data->name,
            'year'          => $data->year,
            'record_label'  => $data->record_label,
            'genre'         => $data->genre
        ]);
 
        return $record->id;   
    }
}
