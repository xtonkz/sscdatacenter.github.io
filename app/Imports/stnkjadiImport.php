<?php

namespace App\Imports;

use App\Models\stnkjadi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class stnkjadiImport implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new stnkjadi([
            'business_unit' => $row['business_unit'],
            'branch' => $row['branch'],
            'chasis' => $row['chasis'],
            'model' => $row['model'],
            'wilayah' => $row['wilayah'],
            'birojasa' => $row['birojasa'],
            'tgl_aju' => $row['tgl_aju'],
            'tgl_estimasi_stnk_jadi' => $row['tgl_estimasi_stnk_jadi'],
            'tgl_stnkjadi' => $row['tgl_stnkjadi'],
            'tgl_bpkbjadi' => $row['tgl_bpkbjadi'],
            'nopol' => $row['nopol'],
            'plan_delv_stnk' => $row['plan_delv_stnk'],
            'plan_delv_bpkb' => $row['plan_delv_bpkb'],
            'payment_method' => $row['payment_method'],
            'status_stnk' => $row['status_stnk']
        ]);
    }
}
