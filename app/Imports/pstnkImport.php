<?php

namespace App\Imports;

use App\Models\pstnk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class pstnkImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new pstnk([
            'cust_name' => $row['cust_name'],
            'business_unit' => $row['business_unit'],
            'branch' => $row['branch'],
            'chasis' => $row['chasis'],
            'wilayah' => $row['wilayah'],
            'faktur_date' => $row['faktur_date'],
            'cek_fisik' => $row['cek_fisik'],
            'terima_faktur' => $row['terima_faktur'],
            'terima_berkasafi' => $row['terima_berkasafi'],
            'lt_faktur' => $row['lt_faktur'],
            'pilnop' => $row['pilnop'],
            'keterangan' => $row['keterangan'],
        ]);
    }
}
