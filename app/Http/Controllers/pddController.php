<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;
use App\Models\pdd;
use App\Imports\pddimport;

class pddController extends Controller
{
    public function showpage(){
        return view('pdd', [
            "title" => "Delivery Plan"
        ]);
    }

    public function pddimport() 
    {   
        try {
            Excel::import(new pddimport,request()->file('file'));
            toast('Upload Success!','success');
            return back();
        } catch (NoTypeDetectedException $e) {
            toast("Upload Failed!! check your extension and format!!", "error");
            return back();
        }
       
    }

    public function index(){

        $pdd_table = pdd::select('*');
 
        return Datatables::of($pdd_table)
             ->addIndexColumn()
             ->addColumn('status', function($row){
 
                 if($row->status == 1){
                     return "Active";
                 }else{
                     return "Inactive";
                 }
 
             })
             ->make();
            } 
}
