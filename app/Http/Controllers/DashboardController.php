<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SummaryExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;


class DashboardController extends Controller
{
    public function querySummary(){
        $data = DB::table('data_do')->whereRaw('data_do.id in (SELECT max(data_do.id) FROM data_do group by data_do.chasis)')
           
        ->leftJoin('afi', function($join){
            $join->on('data_do.chasis', '=', 'afi.chasis');
        })

        ->leftJoin('mohon_stnk', function($join){
            $join->on('data_do.chasis', '=', 'mohon_stnk.chasis');
        })

        ->leftJoin('stnk_jadi', function($join){
            $join->on('data_do.chasis', '=', 'stnk_jadi.chasis')
            ->whereraw('stnk_jadi.id IN (select max(stnk_jadi.id) from stnk_jadi join data_do on data_do.chasis = stnk_jadi.chasis group by data_do.chasis)');
        })

        ->leftJoin('invoice', function($join){
            $join->on('data_do.chasis', '=', 'invoice.chasis');
        })
        
        ->select([
            'data_do.id',
            'data_do.business_unit',
            'data_do.branch',
            // 'data_do.do_no',   
            'data_do.do_date',
            'data_do.chasis',
            'data_do.model',
            'data_do.product_desc',
            'data_do.color_desc',
            'afi.modem_date', 
            'afi.faktur_turun',
            'afi.cust_name',
            'afi.cust_address',
            'afi.cust_address2',
            'mohon_stnk.birojasa',
            'mohon_stnk.wilayah',
            'mohon_stnk.efektif_faktur',
            'mohon_stnk.cek_fisik',
            'mohon_stnk.terima_faktur',
            'mohon_stnk.berkas_cust',
            'mohon_stnk.tgl_mohon',
            'mohon_stnk.tgl_notice',
            'mohon_stnk.nopol',
            'stnk_jadi.tgl_stnkjadi',
            'stnk_jadi.remark',
            //'invoice.inv_no',
            'invoice.tgl_bayar',
            'stnk_jadi.created_at',
        ])
        ->get();
        return $data;
    }
    
    public function dashboard(){
        $count_do = DB::table('data_do')->get();
        $do_blm_afi = DB::table('data_do')->select('chasis')
        ->whereRaw('chasis not in (select chasis from afi)')
        ->get();
        // $afi_blm_mhn = DB::table('afi')->select('chasis')
        // ->whereRaw('chasis not in (select chasis from mohon_stnk)')
        // ->get();
        $count_afi = DB::table('afi')->get();
        $count_mohon = DB::table('mohon_stnk')->get();
        $count_stnkjadi = DB::table('stnk_jadi')->get();
        return view('dashboard',compact('count_do','do_blm_afi','count_afi','count_stnkjadi','count_mohon'),[
            "title" => "Dashboard"
        ]);

    }

    
    public function index(){
        
        $data = $this->querySummary();
        //dd($data);
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($data){
                return view('partials.btndash')->with('data', $data);
            })
             ->make(true);
        
    }

        public function edit($id){
             $query = $this->querySummary();
             $data = $query->where('chasis', $id)->first();
             return response()->json(['result' => $data]);
             
        }


    // public function SummaryExport(){
                
    //         try{
    //         return Excel::download(new SummaryExport, 'summary.xlsx');
    //         toast('Download Success!', 'success');
    //         return back();
    //         }catch(NoTypeDetectedException $e){
    //         toast('Download Failure!', 'error');
    //         return back();
    //         }
    // }

    public function chart(){
        $tyt = DB::table('mohon_stnk')->select('business_unit')
        ->whereRaw('business_unit = "TYT"')
        ->get()->count();
        $dht = DB::table('mohon_stnk')->select('business_unit')
        ->whereRaw('business_unit = "DHT"')
        ->get()->count();
        $bmw = DB::table('mohon_stnk')->select('business_unit')
        ->whereRaw('business_unit = "BMW"')
        ->get()->count();
        $array = array($tyt, $dht, $bmw);
        return response()->json($array);
    }
    
}