<?php

namespace App\Imports;

use App\Models\mstnk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class mstnkImport implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new mstnk([
            'cust_name' => $row['cust_name'],
            'business_unit' => $row['business_unit'],
            'branch' => $row['branch'],
            'birojasa' => $row['birojasa'],
            'chasis' => $row['chasis'],
            'wilayah' => $row['wilayah'],
            'efektif_faktur' => $row['efektif_faktur'],
            'cek_fisik' => $row['cek_fisik'],
            'terima_faktur' => $row['terima_faktur'],
            'berkas_cust' => $row['berkas_cust'],
            'tgl_mohon' => $row['tgl_mohon'],
            'est_stnkjadi' => $row['est_stnkjadi'],
            'tgl_notice' => $row['tgl_notice'],
            'nopol' => $row['nopol'],
            'pilnop' => $row['pilnop'],
            'keterangan' => $row['keterangan'],
        ]);
    }
}
