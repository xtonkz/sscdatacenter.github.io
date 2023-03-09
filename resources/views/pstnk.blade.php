@extends('main.main')

@section('content')


<div class="row">
    <div class="col-lg">
        <div class="content-wrapper">
            <div class="row justify-content-evenly">
            <div class="col-sm-8">
            <form action="{{ route('pstnk.pstnkimport') }}" method="post" enctype="multipart/form-data">
                @csrf
            <input type="file" name="file" class="button button-success sm" id="upload_pstnk" name="upload_pstnk" value="Upload">
            <button class="btn btn-primary sm float-right"><i class="mdi mdi-upload"></i>Upload Data</button>
            </form>
            </div>
            <div class="col-sm-4">
            <form action="{{ route('pstnk.cleardata') }}" method="POST">
                @csrf
            <button class="btn btn-danger sm"><i class="mdi mdi-delete"></i>Clear Data</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>

    <div class="row mt-2">
        <div class="col-lg">
        <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="pstnk_table" name="pstnk_table" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th valign="middle">Customer Name</th>
                            <th valign="middle">BU</th>
                            <th valign="middle">Branch</th>
                            <th valign="middle">Chasis</th>
                            <th valign="middle">Wilayah</th>
                            <th valign="middle">Tanggal Invoice</th>
                            <th valign="middle">Tgl Terima Cek FisiK</th>
                            <th valign="middle">Tgl Terima Berkas Afi</th>
                            <th valign="middle">Leadtime Faktur</th>
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