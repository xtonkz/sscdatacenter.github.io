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
                <form action="{{ route('data_do.import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <input type="file" name="file" class="button button-success sm" id="upload_do" name="upload_do" value="Upload">
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
                <table class="table table-bordered" style="margin-top: 10px;" id="do_table" name="do_table">
                    <thead>
                        <tr>
                            
                            <th class="text-center">BU</th>
                            <th class="text-center">Branch</th>
                            <th class="text-center">DO No</th>
                            <th class="text-center">DO Date</th>
                            <th class="text-center">Chasis</th>
                            <th class="text-center">Model</th>
                            <th class="text-center">Tipe Kendaraan</th>
                            <th class="text-center">Product Desc</th>
                            <th class="text-center">Color Desc</th>
                            <th class="text-center">Engine No</th>
                            {{-- <th >Customer No</th> --}}
                            <th class="text-center">Customer Name</th>
                            {{-- <th class="text-center">Customer Class</th> --}}
                            <th class="text-center">STNK Name</th>
                            <th class="text-center">Customer Address</th>
                            <th class="text-center">Customer District</th>
                            <th class="text-center">Customer City</th>
                            <th class="text-center">Payment's Method</th>
                            {{-- <th >Leasing</th>
                            <th valign="middle">SPK No</th> --}}
                            {{-- <th valign="middle">SPK Date</th>
                            <th valign="middle">RRN</th> --}}
                        </tr>
                        {{-- @foreach($data_do as $do) --}}
                    </thead>
                        <tbody>
                        {{-- <tr>
                            <td>{{ $do-> branch }}</td>
                            <td>{{ $do-> inv_no}}</td>
                            <td>{{ $do-> inv_date }}</td>
                            <td>{{ $do-> product_desc }}</td>
                            <td>{{ $do-> color_desc }}</td>
                            <td>{{ $do-> chasis }}</td>
                            <td>{{ $do-> engine_no }}</td>
                            <td>{{ $do-> cust_no }}</td>
                            <td>{{ $do-> cust_name }}</td>
                            <td>{{ $do-> cust_class}}</td>
                            <td>{{ $do-> stnk_name}}</td>
                            <td>{{ $do-> cust_address }}</td>
                            <td>{{ $do-> cust_dist }}</td>
                            <td>{{ $do-> cust_city }}</td>
                            <td>{{ $do-> payment_method}}</td>
                            <td>{{ $do-> leasing }}</td>
                            <td>{{ $do-> spk_no}}</td>
                            <td>{{ $do-> spk_date}}</td>
                            <td>{{ $do-> rrn_no }}</td>
                        </tr> --}}
                        </tbody>
                        {{-- @endforeach --}}
                    </table>                  
            </div><!--table-->

        </div>
        </div>
        </div>
    </div>
    <!-- row -->

@endsection