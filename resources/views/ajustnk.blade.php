@extends('main.main')

@section('content')

    <div class="row">
        <div class="col-lg">
            <div class="content-wrapper">
                <button class="btn btn-primary" id="ajuStnk">
                    <i class="mdi mdi-account-plus"></i> Create Pengajuan STNK </button>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg">
        <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="aju_stnk" name="aju_stnk" style="margin-top: 10px;">
                    <thead>
                        <tr>
                            <th valign="middle">Customer Name</th>
                            <th valign="middle">Address</th>
                            <th valign="middle">City</th>
                            <th valign="middle">Province</th>
                            <th valign="middle">Email</th>
                            <th valign="middle">Phone</th>
                            <th valign="middle">Dummy</th>
                            <th width="15%" valign="middle">Action</th>
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