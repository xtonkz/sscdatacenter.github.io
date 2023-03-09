<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Exports\SummaryExport;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;
use Maatwebsite\Excel\Exceptions\LaravelExcelException;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;

class queryController extends Controller
{

    public static function getPeriod(Request $request){
            $m = $request->mon;
            $t = $request->thn;
            $month = stripslashes($m);
            $tahun= stripslashes($t);
            
        if($month > 0 && $tahun > 0){    
        $data = DB::table('data_do')
            ->whereMonth('data_do.do_date', $month)
            ->whereYear('data_do.do_date', $tahun)
            ->whereRaw('data_do.id in (SELECT max(data_do.id) FROM data_do group by data_do.chasis)')
              
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

        }else if($month == 00 && $tahun == 00){
            $data = DB::table('data_do')
            
            ->whereRaw('data_do.id in (SELECT max(data_do.id) FROM data_do group by data_do.chasis)')
              
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
           
    }

        public function index(Request $request){
            
            $data = $this-> getPeriod($request);
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($data){
                return view('partials.btndash')->with('data', $data);
            })
             ->make(true);
        }


        public function SummaryExport(Request $request){
            $bulan = $request -> mon;
            $tahun = $request -> thn;
            ini_set('max_execution_time',1800);
            //$period = array($bulan,$tahun);
            return (new SummaryExport($bulan,$tahun))->download('summary.xlsx');
            toast('Download Success!', 'success');
            return back();
            
        }
}