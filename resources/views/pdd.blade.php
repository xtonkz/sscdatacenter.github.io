@extends('main.main')

@section('content')

    <div class="row">
        <div class="col-lg">
            <div class="content-wrapper">
                <form action="{{ route('pdd-import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <input type="file" name="file" class="button button-success sm" id="pdd" name="pdd" value="Upload">
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
                <table class="table table-bordered" id="pdd_table" name="pdd_table" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th valign="middle">BU</th>
                            <th valign="middle">Branch</th>
                            <th valign="middle">Chasis</th>
                            <th valign="middle">Salesmen</th>
                            <th valign="middle">Kontak Sales</th>
                            <th valign="middle">Zona</th>
                            <th valign="middle">Batch</th>
                            <th valign="middle">Nama Driver</th>
                            <th valign="middle">Kontak Driver</th>
                            <th valign="middle">Plan Out</th>
                            <th valign="middle">Cust Name</th>
                            <th valign="middle">Address Cust</th>
                            <th valign="middle">Location Unit</th>
                            <th valign="middle">STNK</th>
                            <th valign="middle">Warna</th>
                            <th valign="middle">Model</th>
                            <th valign="middle">ACC</th>
                            <th valign="middle">Tgl Install ACC</th>
                            <th valign="middle">Asal Unit</th>
                            <th valign="middle">No telp Cust</th>
                            <th valign="middle">Plan Tiba Cust</th>
                            <th valign="middle">Tgl DR</th>
                            <th valign="middle">Plan Deliv</th>
                            <th valign="middle">Destinasi</th>
                            <th valign="middle">Engine</th>


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