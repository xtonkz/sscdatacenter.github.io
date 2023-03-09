<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\mstnkImport;
use App\Models\mstnk;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;

class mstnkController extends Controller
{
    public function mstnk(){
        $mstnk = mstnk::get();
        return view ('/mstnk', compact('mstnk'),[
            "title" => "Mohon STNK"
        ]);
    }

    public function mstnkimport() 
    {
        // Excel::import(new mstnkImport,request()->file('file'));
        // toast('Upload Successfully','success');
        // return back();
        try {
            Excel::import(new mstnkImport,request()->file('file'));
            toast('Upload Success!','success');
            return back();
        } catch (NoTypeDetectedException $e) {
            toast("Upload Failed!! check your extension and format!!", "error");
            return back();
        }
    }

    public function index(){

        $mstnk_table = mstnk::select('*');
 
        return Datatables::of($mstnk_table)
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
