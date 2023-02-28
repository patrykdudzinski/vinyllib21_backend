<?php

namespace App\Http\Controllers;

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
}
