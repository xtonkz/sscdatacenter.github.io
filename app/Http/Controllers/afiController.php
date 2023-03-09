<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Imports\AfiImport;
use App\Models\afi;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;

class afiController extends Controller
{
    public function afi(){

        $afi = afi::get();

        return view('afi', compact('afi'),[
            "title" => "Data AFI"
        ]);
    }

    public function Afiimport() 
    {

        try {
            Excel::import(new Afiimport,request()->file('file'));
            toast('Upload Success!','success');
            return back();
        } catch (NoTypeDetectedException $e) {
            toast("Upload Failed!! check your extension and format!!", "error");
            return back();
        }
    }

    public function index(){

        $afi_table = afi::select('*');
 
        return Datatables::of($afi_table)
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
