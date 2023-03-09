@extends('main.main')

@section('content')

{{-- @if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show mt-1" role="alert" id="alert_upload">  
    <strong>{{ $message }}</strong>
    <button type="button" class="btn btn-close sm" onClick="closeFunction()" data-bs-dismiss="alert" aria-label="Close">
        <strong>X</strong>
    </button>  
</div>
@endif --}}

<div class="row">
    <div class="col-lg">
        <div class="content-wrapper">
            <form action="{{ route('stnkjadi.stnkjadiImport') }}" method="post" enctype="multipart/form-data">
                @csrf
            <input type="file" name="file" class="button button-success sm" id="upload_stnkjadi" name="upload_stnkjadi" value="Upload">
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
                <table class="table table-bordered" id="stnkjadi_table" name="stnkjadi_table" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th valign="middle">BU</th>
                            <th valign="middle">Branch</th>
                            <th valign="middle">Chasis</th>
                            <th valign="middle">Model</th>
                            <th valign="middle">Wilayah</th>
                            <th valign="middle">birojasa</th>
                            <th valign="middle">Tgl Aju</th>
                            <th valign="middle">Tgl Estimasi Jadi</th>
                            <th valign="middle">Tanggal Jadi STNK</th>
                            <th valign="middle">Tanggal Jadi BPKB</th>
                            <th valign="middle">Nopol</th>
                            <th valign="middle">TOP</th>
                            <th valign="middle">Status STNK</th>
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