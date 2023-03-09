<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hs;
use App\Imports\hsImport;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;


class hsController extends Controller
{   
    public function hs(){
    $hs = hs::get();
    return view('hs',compact('hs'),[
        "title" => "History Stock SSC"
    ]);
    }

    public function hsImport() 
    {
    
        try {
            Excel::import(new hsImport,request()->file('file'));
            toast('Upload Success!','success');
            return back();
        } catch (NoTypeDetectedException $e) {
            toast("Upload Failed!! check your extension and format!!", "error");
            return back();
        }

    }

    public function index(){

        $hs_table = hs::select('*');
 
        return Datatables::of($hs_table)
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
