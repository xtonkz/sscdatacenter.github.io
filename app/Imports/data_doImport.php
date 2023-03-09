<?php

namespace App\Imports;

use App\Models\data_do;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;



class data_doImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new data_do([
            // 'id' => $row['id'],
            'business_unit' => $row['business_unit'],
            'branch' => $row['branch'],
            'do_no' => $row['do_no'],
            'do_date' => $row['do_date'],
            'chasis' => $row['chasis'],
            'model' => $row['model'],
            'tipe_kendaraan' => $row['tipe_kendaraan'],
            'product_desc' => $row['product_desc'],            
            'color_desc' => $row['color_desc'],
            'engine_no' => $row['engine_no'],
            'cust_name' => $row['cust_name'],
            'stnk_name' => $row['stnk_name'],
            'cust_address' => $row['cust_address'],
            'cust_dist' => $row['cust_dist'],
            'cust_city' => $row['cust_city'],
            'payment_method' => $row['payment_method'],
            // 'leasing' => $row['leasing'],
            // 'spk_no' => $row['spk_no']
            // 'spk_date' => $row['spk_date'],
            // 'rrn_no' => $row['rrn_no']

        ]);
    }
}
