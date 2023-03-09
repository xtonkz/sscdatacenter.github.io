@extends('main.main')

@section('content')


{{-- <div class="row">
    <div class="col-lg">
        <div class="content-wrapper">
            <form action="" method="" enctype="multipart/form-data">
                @csrf
            <input type="file" name="file" class="button button-success sm" id="upload_hs" name="upload_hs" value="Upload">
            <button class="btn btn-primary"><i class="mdi mdi-upload"></i>Upload Data</button>
            </form>
        </div>
    </div>
</div> --}}

    <div class="row mt-2">
        <div class="col-lg">
        <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="delvstnk_table" name="delvstnk_table" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th class="text-center" hidden>pdd_id</th>
                            <th class="text-center">Business Unit</th>
                            <th class="text-center">Cabang</th>
                            <th class="text-center">Chasis</th>
                            <th class="text-center">Model</th>
                            <th class="text-center">Warna</th>
                            <th class="text-center">No Mesin</th>                            
                            <th class="text-center">Customer Name</th>
                            <th class="text-center">Phone Customer</th>
                            <th class="text-center">Plan Kirim</th>
                            <th class="text-center">Wilayah</th>
                            <th class="text-center">Tgl Aju</th>
                            <th class="text-center">Tgl Estimasi</th>
                            <th class="text-center">Tgl Jadi STNK</th>
                            <th class="text-center">Tgl Jadi BPKB</th>
                            <th class="text-center">Delivery STNK</th>
                            <th class="text-center">Delivery BPKB</th>
                            <th class="text-center">TOP</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                            
                        </tr>
                    </thead>
                        <tbody>
                            
                        </tbody>
                    </table>                  
            </div><!--table-->

        </div>
        </div>
        </div>
    </div>
    <!-- row -->

        

    
@endsection