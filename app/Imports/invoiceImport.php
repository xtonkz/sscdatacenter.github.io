<?php

namespace App\Imports;

use App\Models\invoice;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class invoiceImport implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new invoice([
            'birojasa' => $row['birojasa'],
            'inv_no' => $row['inv_no'],
            'chasis' => $row['chasis'],
            'cust_name' => $row['cust_name'],
            'business_unit' => $row['business_unit'],
            'branch' => $row['branch'],
            'wilayah' => $row['wilayah'],
            'nopol' => $row['nopol'],
            'tgl_notice' => $row['tgl_notice'],
            'tgl_invoice' => $row['tgl_invoice'],
            'tgl_bayar' => $row['tgl_bayar']
        ]);
    }
}
