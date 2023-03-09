<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\data_doImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\data_do; 
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;


class data_doController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function do()
    {
        $data_do = data_do::get();    
        return view('data_do', compact('data_do'), [
            'title' => 'Data DO'
        ]
        );
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
            
        try {
            Excel::import(new data_doImport,request()->file('file'));
            toast('Upload Success!','success');
            return back();
        } catch (NoTypeDetectedException $e) {
            toast("Upload Failed!! check your extension or format!!", "error");
            return back();
        }
    } 
        

    public function index(){
        $do_table = data_do::select('*');
 
        return Datatables::of($do_table)
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