@extends('main.main')

@section('content')

    <div class="row">
        <div class="col-lg">
            <div class="content-wrapper">
                <form action="{{ route('invoice.invoiceImport') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <input type="file" name="file" class="button button-success sm" id="invoice" name="invoice" value="Upload">
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
                <table class="table table-bordered" id="inv_table" name="inv_table" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th valign="middle">Birojasa</th>
                            <th valign="middle">No Invoice</th>
                            <th valign="middle">Chasis</th>
                            <th valign="middle">Customer Name</th>
                            <th valign="middle">BU</th>
                            <th valign="middle">Branch</th>
                            <th valign="middle">Wilayah</th>
                            <th valign="middle">Nopol</th>
                            <th valign="middle">Tanggal Notice</th>
                            <th valign="middle">Tanggal Invoice</th>
                            <th valign="middle">Tanggal Payment</th>
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