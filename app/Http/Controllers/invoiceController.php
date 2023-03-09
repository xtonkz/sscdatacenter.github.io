<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\invoiceImport;
use App\Models\invoice;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;

class invoiceController extends Controller
{
    public function invoice(){
        $invoice = invoice::get();

        return view('invoice', compact('invoice'),[
            "title" => "Data Invoice"
        ]);
    }

    public function invoiceimport() 
    {
        // Excel::import(new invoiceImport,request()->file('file'));
        // return back()->with('success','Upload Successfully');
        try {
            Excel::import(new invoiceImport,request()->file('file'));
            toast('Upload Success!','success');
            return back();
        } catch (NoTypeDetectedException $e) {
            toast("Upload Failed!! check your extension and format!!", "error");
            return back();
        }
    }

    public function index(){

        $inv_table = invoice::select('*');
 
        return Datatables::of($inv_table)
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
