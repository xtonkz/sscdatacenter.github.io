@extends('main.main')

@section('content')

{{-- @if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show mt-1" role="alert" id="alert_upload">  
    <strong>{{ $message }}</strong>
    <button type="button" class="btn btn-close sm" onClick="closeFunction()" data-bs-dismiss="alert" aria-label="Close">
        <strong>X</i></strong>
    </button>  
</div>
@endif --}}

<div class="row">
    <div class="col-lg">
        <div class="content-wrapper">
            <form action="{{ route('afi.Afiimport') }}" method="post" enctype="multipart/form-data">
                @csrf
            <input type="file" name="file" class="button button-success sm" id="upload_afi" name="upload_afi" value="Upload">
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
                <table class="table table-bordered" id="afi_table" name="afi_table" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            {{-- <th valign="middle" hidden="true">id</th> --}}
                            <th valign="middle">Customer Name</th>
                            <th valign="middle">Customer Address</th>
                            <th valign="middle">Cust Address 2</th>
                            <th valign="middle">Chasis</th>
                            <th valign="middle">Branch</th>
                            <th valign="middle">Jenis Chasis</th>
                            <th valign="middle">Tanggal Afi</th>
                            <th valign="middle"> Tgl Faktur Turun</th>
                        </tr>
                    </thead>
                        <tbody>
                            
                        </tbody>
                    </table>                  
            </div><!--table-->

        </div><!-- card body-->
        </div><!-- card-->
        </div><!-- col -->
    </div> <!-- row -->
   

        
@endsection