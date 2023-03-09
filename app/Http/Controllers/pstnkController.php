<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\pstnkImport;
use App\Models\pstnk;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;


class pstnkController extends Controller
{
    
    
    public function pstnk(){
        $pstnk = pstnk::get();
        return view('/pstnk',compact('pstnk'),[
        "title" => "Pending STNK"
    ]);
    }

    public function pstnkimport() 
    {   
        try {
            Excel::import(new pstnkImport,request()->file('file'));
            toast('Upload Success!','success');
            return back();
        } catch (NoTypeDetectedException $e) {
            toast("Upload Failed!! check your extension and format!!", "error");
            return back();
        }
        // Excel::import(new pstnkImport,request()->file('file'));
        // toast('Upload Successfully','success');
        // return back();
    }

    public function index(){

        $pstnk_table = pstnk::select('*');
 
        return Datatables::of($pstnk_table)
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

        public function cleardata() {
             pstnk::query()->truncate();
             toast('Clear data Successfully','success');
             return back();
        }
}
