<?php

namespace App\Imports;

use App\Models\pdd;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class pddImport implements ToModel, withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new pdd([
            'business_unit' => $row['business_unit'],
            'branch' => $row['branch'],
            'chasis' => $row['chasis'],
            'salesmen' => $row['salesmen'],
            'kontak_sales' => $row['kontak_sales'],
            'zona' => $row['zona'],
            'batch' => $row['batch'],
            'nama_driver' => $row['nama_driver'],
            'kontak_driver' => $row['kontak_driver'],
            'plan_out' => $row['plan_out'],
            'pdd_cust_name' => $row['pdd_cust_name'],
            'pdd_address' => $row['pdd_address'],
            'pdd_lokasi_unit' => $row['pdd_lokasi_unit'],
            'pdd_stnk' => $row['pdd_stnk'],
            'pdd_warna' => $row['pdd_warna'],
            'pdd_model' => $row['pdd_model'],
            'pdd_acc' => $row['pdd_acc'],
            'pdd_tgl_acc' => $row['pdd_tgl_acc'],
            'pdd_asal_unit' => $row['pdd_asal_unit'],
            'pdd_cust_phone' => $row['pdd_cust_phone'],
            'pdd_plan_tiba' => $row['pdd_plan_tiba'],
            'pdd_tgl_dr' => $row['pdd_tgl_dr'],
            'pdd_plan_deliv' => $row['pdd_plan_deliv'],
            'pdd_stnk_deliv' => $row['pdd_stnk_deliv'],
            'pdd_bpkb_deliv' => $row['pdd_bpkb_deliv'],
            'pdd_destination' => $row['pdd_destination'],
            'pdd_engine' => $row['pdd_engine'],


        ]);
    }
}
