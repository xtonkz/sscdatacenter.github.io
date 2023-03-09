<?php

namespace App\Imports;

use App\Models\Afi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AfiImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Afi([
            'cust_name' => $row['cust_name'],
            'cust_address' => $row['cust_address'],
            'cust_address2' => $row['cust_address2'],
            'chasis' => $row['chasis'],
            'branch' => $row['branch'],
            'jenis_chasis' => $row['jenis_chasis'],
            'modem_date' => $row['modem_date'],
            'faktur_turun' => $row['faktur_turun']
            
        ]);
    }
}
