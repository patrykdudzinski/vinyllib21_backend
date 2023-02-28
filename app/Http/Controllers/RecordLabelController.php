<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecordLabels;
use Response;

class RecordLabelController extends Controller
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
            RecordLabels::orderBy('name', 'asc')->get()
        );
    }

}
