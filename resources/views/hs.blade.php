@extends('main.main')

@section('content')


<div class="row">
    <div class="col-lg">
        <div class="content-wrapper">
            <form action="{{ route('hs.hsImport') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <input type="file" name="file" class="button button-success sm" id="upload_hs" name="upload_hs" value="Upload">
            <button class="btn btn-primary"><i class="mdi mdi-upload"></i>Upload Data</button>
            </form>
        </div>
    </div>
</div>

    <div class="row mt-2">
        <div class="col-lg">
        <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="hs_table" name="hs_table" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th valign="middle">Plant</th>
                            <th valign="middle">BPKB Name</th>
                            <th valign="middle">Chasis</th>
                            <th valign="middle">Customer Name</th>
                            <th valign="middle">STNK Jadi</th>
                            <th valign="middle">BPKB No</th>
                            <th valign="middle">Leasing</th>
                            <th valign="middle">Engine No</th>
                            <th valign="middle">Type Unit</th>
                            <th valign="middle">Nopol</th>
                            <th valign="middle">BPKB Input</th>
                            <th valign="middle">Aging BPKB -GR</th>
                            <th valign="middle">Business Unit</th>
                            <th valign="middle">Sistem</th>
                            <th valign="middle">Tgl Keluar BPKB</th>
                            <th valign="middle">Pengambil BPKB</th>
                            <th valign="middle">TOP</th>
                            <th valign="middle">Tahun Input BPKB</th>
                            <th valign="middle">Penerima</th>
                            <th valign="middle">BPKB Revisi</th>
                            <th valign="middle">Selesai Revisi</th>
                            <th valign="middle">Keterangan</th>
                            <th valign="middle">Wilayah</th>
                            <th valign="middle">Status</th>

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