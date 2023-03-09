<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\ajustnk;

class ajuController extends Controller
{
    public function formAju(){
        $chas = DB::table('data_do')->get();
        return view('formaju', compact('chas'),[
            "title" => "Aju STNK"
        ]);
    }

    public function ajustnk(){
        return view('ajustnk',[
            "title" => "Aju STNK"
        ]);
    }

    public function store(Request $request){
        $validasi = Validator::make($request->all(), [
            
            'aju_cust_type' => 'required',
            'aju_fullname' => 'required',
            'aju_nik' => 'nullable',
            'aju_corp_name' => 'nullable',
            'aju_phone' => 'required',
            'aju_address' => 'required',
            'aju_email' => 'nullable',
            'aju_chasis' => 'required',
            'aju_type' => 'required',
            'aju_engine' => 'required',
            'aju_production' => 'required',
            'aju_gage' => 'nullable',
            'aju_sj' => 'nullable',
            'aju_spood' => 'nullable',
            'aju_upload_ktp' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'aju_npwp_person' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'aju_kk' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'aju_nib' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'aju_izin_lokasi' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'aju_izin_usaha' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'aju_npwp_corp' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ], [
           
            'aju_cust_type.required' => 'Need to be filled in',
            'aju_fullname.required' => 'Need to be filled in',
            'aju_phone.required' => 'Need to be filled in',
            'aju_address.required' => 'Need to be filled in',
            'aju_chasis.required' => 'Need to be filled in',
            'aju_type.required' => 'Need to be filled in',
            'aju_engine.required' => 'Need to be filled in',
            'aju_production.required' => 'Need to be filled in',

            
        ]);

        if ($validasi->fails()) {
                
            return response()->json(['errors' => $validasi->errors()]);
            
        } else {
            $data = [
                //  'cust_id' => $request->cust_id,
                'aju_cust_type' => $request->aju_cust_type,
                'aju_fullname' => $request->aju_fullname,
                'aju_nik' => $request->aju_nik,
                'aju_corp_name' => $request->aju_corp_name,
                'aju_phone' => $request->aju_phone,
                'aju_address' => $request->aju_address,
                'aju_email' => $request->aju_email,
                'aju_chasis' => $request->aju_chasis,
                'aju_type' => $request->aju_type,
                'aju_engine' => $request ->aju_engine,
                'aju_product_type' => $request ->aju_product_type,
                'aju_gage' => $request -> aju_gage,
                'aju_sj' => $request->aju_sj,
                // 'aju_spood' => $request ->aju_spood,
                // 'aju_upload_ktp' => $request ->aju_upload_ktp,
                // 'aju_npwp_person' => $request ->aju_npwp_person,
                // 'aju_kk' => $request ->aju_kk,
                // 'aju_nib' => $request ->aju_,
                // 'aju_izin_lokasi' => $request ->aju_izin_lokasi,
                // 'aju_izin_usaha' => $request ->aju_izin_usaha,
                // 'aju_npwp_corp' => $request -> aju_npwp_corp,        
            ];
            ajustnk::create($data);
            return response()->json(['success' => "Customer created successfully"]);
            
        }
    }

    public function vi(Request $request){
        $chasis = $request->chasis;

        $t = DB::table('data_do')->select('product_desc')
            ->where('chasis','=' ,$chasis)->get();
        $c = DB::table('data_do')->select('color_desc')
            ->where('chasis','=' ,$chasis)->get();
        $e = DB::table('data_do')->select('engine_no')
            ->where('chasis','=' ,$chasis)->get();
        
            $arr[] = array('product_desc' => $t, 'color_desc' => $c, 'engine_no' => $e);
        //    return array('product_desc' => $t, 'color_desc' => $c, 'engine_no' => $e);
           return json_encode($arr);

    }
}
