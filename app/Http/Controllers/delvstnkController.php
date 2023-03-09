<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
use App\Models\pdd;

class delvstnkController extends Controller
{
    //
    public function showpage(){
        return view('delvstnk',[
            "title" => "Delivery STNK"
        ]);
    }

    public function queryDelv(){
        $data = DB::table('pdd')

        ->Join('stnk_jadi', function($join){
            $join->on('pdd.chasis', '=', 'stnk_jadi.chasis')
            ->where('stnk_jadi.wilayah', '=', 'JAKARTA SELATAN')
            ->Where('stnk_jadi.payment_method', '=', 'CASH');
        })
        
        ->select([
            'pdd.pdd_id',
            'pdd.business_unit',
            'pdd.branch',
            'pdd.chasis',
            'pdd.pdd_model',
            'pdd.pdd_warna',
            'pdd.pdd_engine',
            'pdd.pdd_cust_name',
            'pdd.pdd_cust_phone',
            'pdd.pdd_plan_deliv',
            'stnk_jadi.wilayah',
            'stnk_jadi.tgl_aju',
            'stnk_jadi.tgl_estimasi_stnk_jadi',
            'stnk_jadi.tgl_stnkjadi',
            'stnk_jadi.tgl_bpkbjadi',
            'pdd.pdd_stnk_deliv',
            'pdd.pdd_bpkb_deliv',
            'stnk_jadi.payment_method',
            'stnk_jadi.status_stnk',
            
        ])
        ->get();
        return $data;
    }

    public function index(){
            
        $data = $this-> queryDelv();
        return Datatables::of($data)
        ->addIndexColumn()
        ->addColumn('action', function($data){
            return view('partials.btnplandelv')->with('data', $data);
        })
         ->make(true);
    }

    
        public function edit($pdd_id){
            $query = $this->queryDelv();
            $data = $query->where('chasis', $pdd_id)->first();
            return response()->json(['result' => $data]);
            
       }

       public function update(Request $request, $pdd_id)
        {
                $pdd = $request->pdd_id;
                $plan_stnk = $request->plan_delv_stnk;
                $plan_bpkb = $request->plan_delv_bpkb;
                DB::statement("update pdd a join stnk_jadi b on a.chasis = b.chasis set a.pdd_stnk_deliv = '$plan_stnk' , a.pdd_bpkb_deliv = '$plan_bpkb' where pdd_id = '$pdd'");
           //dd($pdd);
                return response()->json(['success' => "Updated successfully!"]); 
        }
    }
    

