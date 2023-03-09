<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
// use Illuminate\Http\Request;


class SummaryExport implements FromQuery, WithHeadings
{
    
    use Exportable;
    protected $bulan,$tahun;

    public function __construct($bulan,$tahun) 
    {
        $this->bulan = $bulan;
        $this->tahun = $tahun;
        return $this;
    }


    public function query(){
      
        if($this->bulan > 0 && $this->tahun > 0){
            $summary = DB::table('data_do')
       
            ->whereMonth('data_do.do_date', $this->bulan)
            ->whereYear('data_do.do_date', $this->tahun)
            ->whereRaw('data_do.id in (SELECT max(data_do.id) FROM data_do group by data_do.chasis)')
            ->orderBy('data_do.id')
    
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
                //'data_do.id',
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
                // 'stnk_jadi.created_at',
            ]);
                // ->get();
                //dd($summary);
                return $summary;
        }else if ($this->bulan == 00 && $this->tahun == 00) {
            $summary = DB::table('data_do')
       
            ->whereRaw('data_do.id in (SELECT max(data_do.id) FROM data_do group by data_do.chasis)')
            ->orderBy('data_do.id')
    
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
                //'data_do.id',
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
                // 'stnk_jadi.created_at',
            ]);
                // ->get();
                //dd($summary);
                return $summary;
        }
 
    }

    
        public function headings(): array {
            return 
                [ 
                'Bisnis Unit',
                'Branch',
                // 'DO No',
                'DO Date',
                'Chasis',
                'Model',
                'Color Descriptions',
                'Product Description',
                'Modem Date',
                'Faktur Turun',
                'Customer Name',
                'Customer Address',
                'Customer Address2',
                'Birojasa',
                'Wilayah',
                'Efektif Faktur',
                'Cek Fisik',
                'Terima Faktur',
                'Berkas Customer',
                'Tanggal Mohon',
                'Tanggal Notice',
                'Nopol',   
                'Tanggal STNK Jadi',
                'Remark',
                // 'Invoice No',
                'Tanggal Bayar'
                ];
        }
}