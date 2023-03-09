@extends('main.main')

@section('content')


<div class="row">
    <div class="col-lg">
        <div class="content-wrapper">
            <form action="{{ route('mstnk.mstnkimport') }}" method="post" enctype="multipart/form-data">
            @csrf          
            <input type="file" name="file" class="button button-success sm" id="upload_mstnk" name="upload_mstnk" value="Upload">
            <button class="btn btn-primary sm"><i class="mdi mdi-upload"></i>Upload Data</button>
            </form>
        </div>
    </div>
</div>

    <div class="row mt-2">
        <div class="col-lg">
        <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="mstnk_table" name="mstnk_table" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th valign="middle">Customer Name</th>
                            <th valign="middle">BU</th>
                            <th valign="middle">Branch</th>
                            <th valign="middle">Birojasa</th>
                            <th valign="middle">Chasis</th>
                            <th valign="middle">Wilayah</th>
                            <th valign="middle">Tgl Efektif Faktur</th>
                            <th valign="middle">Tgl Terima Cek Fisik</th>
                            <th valign="middle">Tgl Terima Faktur</th>
                            <th valign="middle">Tgl Terima Berkas Cust</th>
                            <th valign="middle">Tgl Mohon</th>
                            <th valign="middle">Tgl Estimasi STNK Jadi</th>
                            <th valign="middle">Tgl Notice</th>
                            <th valign="middle">Nopol</th>
                            <th valign="middle">PILNOP</th>
                            <th valign="middle">Keterangan</th>
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