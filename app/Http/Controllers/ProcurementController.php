<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class ProcurementController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $books = Book::all()->toArray();
        // $data = DB::table('Batch')->get();
        // dd($data);
        $data = DB::select("SELECT * FROM OPENQUERY([SAP],'SELECT MATNR, MAKTX FROM SAPHANADB.MAKT WHERE MATNR LIKE ''PKG%'' ORDER BY MATNR')");
        return $data;
        
    }
}
