<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\stnkjadiImport;
use App\Models\stnkjadi;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;

class stnkjadiController extends Controller
{
    public function stnkjadi(){
        $stnkjadi = stnkjadi::get();
        return view('/stnkjadi',compact('stnkjadi'),[
            "title" => "STNK Jadi"
        ]);
    }

    public function stnkjadiImport(){
        // Excel::import(new stnkjadiImport,request()->file('file'));
        // toast('Upload Successfully','success');
        // return back();
        try {
            Excel::import(new stnkjadiImport,request()->file('file'));
            toast('Upload Success!','success');
            return back();
        } catch (NoTypeDetectedException $e) {
            toast("Upload Failed!! check your extension and format!!", "error");
            return back();
        }
    }

    public function index(){

        $stnkjadi_table = stnkjadi::select('*');
 
        return Datatables::of($stnkjadi_table)
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
