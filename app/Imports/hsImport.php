<?php

namespace App\Imports;

use App\Models\hs;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class hsImport implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new hs([
            'plant' => $row['plant'],
            'bpkb_name' => $row['bpkb_name'],
            'chasis' => $row['chasis'],
            'cust_name' => $row['cust_name'],
            'stnk_jadi' => $row['stnk_jadi'],
            'bpkb_no' => $row['bpkb_no'],
            'leasing' => $row['leasing'],
            'engine_no' => $row['engine_no'],
            'type_unit' => $row['type_unit'],
            'nopol' => $row['nopol'],
            'bpkb_input' => $row['bpkb_input'],
            'aging_bpkb_blmgr' => $row['aging_bpkb_blmgr'],
            'business_unit' => $row['business_unit'],
            'sistem' => $row['sistem'],
            'tgl_keluar_bpkb' => $row['tgl_keluar_bpkb'],
            'pengambil_bpkb' => $row['pengambil_bpkb'],
            'top' => $row['top'],
            'tahun_input_bpkb' => $row['tahun_input_bpkb'],
            'penerima' => $row['penerima'],
            'bpkb_revisi' => $row['bpkb_revisi'],
            'selesai_revisi' => $row['selesai_revisi'],
            'keterangan' => $row['keterangan'],
            'wilayah' => $row['wilayah'],
            'status' => $row['status'],
        ]);
    }
}
