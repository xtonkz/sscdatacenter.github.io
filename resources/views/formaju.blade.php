@extends('main.main')


@section('content')

    <div class="row mt-2 h-100" style="display:flex">
        <div class="col-lg-6" style="box-sizing: border-box">
            <div class="card h-100 customer-information">
                <div class="card-header">
                    <h4>Customer Information File</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <select class="form-select form-select-sm ml-3" aria-label=".form-select-sm" id="aju_cust_type" name="aju_cust_type">
                                <option selected disabled>Customer Type..</option>
                                <option value="Corporate">Corporate</option>
                                <option value="Personal">Personal</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control float-right mr-3 mb-2" id="aju_branch" value="{{ auth()->user()->branch }}" disabled>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="aju_fullname" placeholder="Customer Name">
                        <label for="aju_fullname">Customer Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="aju_nik" placeholder="NIK">
                        <label for="aju_nik">NIK</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="aju_corp_name" placeholder="Corporate Name">
                        <label for="aju_corp_name">Corporate Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="aju_phone" placeholder="Phone">
                        <label for="aju_phone">Phone</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Address" id="aju_address" style="height: 100px"></textarea>
                        <label for="aju_address">Address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="aju_email" placeholder="Email">
                        <label for="aju_email">Email</label>
                    </div>
<br/>
                    <div class="row mt-8 mb-4">
                        <div class="divider align-middle"><h4>Vehicle Information</h4></div>
                    </div>

                    <div class=" col-md-6 mb-3">
                        <label for="aju_chasis" class="form-label">Chasis</label>
                        <select class="form-select form-select-sm select-chasis" aria-label=".form-select-sm" id="aju_chasis" name="aju_chasis">
                            <option selected disabled>Select Chasis</option>
                            @foreach($chas as $chasis)
                            <option value="{{ $chasis -> chasis }}">{{ $chasis -> chasis }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="aju_type" placeholder="Type" disabled>
                        <label for="aju_type">Type</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="aju_color" placeholder="Color" disabled>
                        <label for="aju_color">Color</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="aju_engine" placeholder="Engine" disabled>
                        <label for="aju_engine">Engine</label>
                    </div>

                    <div class="col-md-6 mb-4 ">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm" id="aju_product_type">
                            <option selected disabled>Production Type..</option>
                            <option value="Corporate">CBU</option>
                            <option value="Personal">CKD</option>
                        </select>
                    </div>
<br />
                    <div class="row mt-8 mb-4">
                        <div class="divider align-middle"><h4>Optional</h4></div>
                    </div>

                    <div class="col-md-12 mb-4 ">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" id="aju_gage"> Gage <i class="input-helper"></i></label><br />
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="aju_remark_gage" placeholder="Remark Gage">
                                <label for="aju_remark_gage">Remark Gage</label>
                            </div>

                            <input type="checkbox" class="form-check-input" id="aju_nopil"> Nopil <i class="input-helper"></i></label><br />
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="aju_remark_nopil" placeholder="Remark Nopil">
                                <label for="aju_remark_nopil">Remark Nopil</label>
                            </div>

                            <input type="checkbox" class="form-check-input" id="aju_sj"> Surat Jalan <i class="input-helper"></i></label><br />
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="aju_remark_sj" placeholder="Remark Surat Jalan">
                                <label for="aju_remark_sj">Remark Surat Jalan</label>
                            </div>

                            <input type="checkbox" class="form-check-input" id="aju_spood"> Spood <i class="input-helper"></i>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="aju_remark_spood" placeholder="Remark Spood">
                                <label for="aju_remark_spood">Remark Spood</label>
                            </div>

                            <input type="checkbox" class="form-check-input" id="aju_keur"> Keur <i class="input-helper"></i>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="aju_remark_keur" placeholder="Remark Keur">
                                <label for="aju_remark_keur">Remark Keur</label>
                            </div>

                            <input type="checkbox" class="form-check-input" id="aju_rekom"> Rekom <i class="input-helper"></i>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="aju_remark_rekom" placeholder="Remark Rekom">
                                <label for="aju_remark_rekom">Remark Rekom</label>
                            </div>

                            <input type="checkbox" class="form-check-input" id="aju_stck"> STCK <i class="input-helper"></i>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="aju_remark_stck" placeholder="Remark STCK">
                                <label for="aju_remark_stck">Remark STCK</label>
                            </div>

                            <input type="checkbox" class="form-check-input" id="aju_lainlain"> Lain-lain <i class="input-helper"></i>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="aju_remark_lainlain" placeholder="Remark Lain-lain">
                                <label for="aju_remark_lainlain">Remark Lain-lain</label>
                            </div>
                        </label>
                    </div>
                </div><!--card body -->
            </div><!--card -->
        </div>
        <div class="col-lg-6" style="box-sizing: border-box">
            <div class="card h-100 customer-information">
                <div class="card-header">
                    <h4>Attachment</h4>
                </div>
                <div class="card-body">
                    <!-- attachment corporate-->
                    <div class="input-group mb-3 ajuNIB">
                        <input type="file" class="form-control" id="aju_nib" name="aju_nib">
                        <label class="input-group-text ajuNIB" for="aju_nib">Upload NIB</label>
                    </div>
                    <div class="col-md-12 mb-2 ajuNIB">
                        <img id="previewImgNib" src="assets/images/image_not_available.png"
                            alt="preview image" style="max-height: 250px;">
                    </div>
                    
                    <div class="input-group mb-3 ajuNPWPCorp">
                        <input type="file" class="form-control" id="aju_npwp_corp" name="aju_npwp_corp">
                        <label class="input-group-text ajuNPWPCorp" for="aju_npwp_corp">Upload NPWP Corporate</label>
                    </div>
                    <div class="col-md-12 mb-2 ajuNPWPCorp">
                        <img id="previewImgNPWPCorp" src="assets/images/image_not_available.png"
                            alt="preview image" style="max-height: 250px;">
                    </div>

                    <div class="input-group mb-3 ajuIzinUsaha">
                        <input type="file" class="form-control" id="aju_izin_usaha" name="aju_izin_usaha">
                        <label class="input-group-text ajuIzinUsaha" for="aju_izin_usaha">Upload Izin Usaha</label>
                    </div>
                    <div class="col-md-12 mb-2 ajuIzinUsaha">
                        <img id="previewImgIzinUsaha" src="assets/images/image_not_available.png"
                            alt="preview image" style="max-height: 250px;">
                    </div>

                    <div class="input-group mb-3 ajuIzinLokasi">
                        <input type="file" class="form-control" id="aju_izin_lokasi" name="aju_izin_lokasi">
                        <label class="input-group-text ajuIzinLokasi" for="aju_izin_lokasi">Upload Izin Lokasi</label>
                    </div>
                    <div class="col-md-12 mb-2 ajuIzinLokasi">
                        <img id="previewImgIzinLokasi" src="assets/images/image_not_available.png"
                            alt="preview image" style="max-height: 250px;">
                    </div>
                    <!-- attachment personal-->
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="aju_ktp" name="aju_ktp">
                        <label class="input-group-text ajuKTP" for="aju_ktp">KTP</label>
                    </div>
                    <div class="col-md-12 mb-2">
                        <img id="previewImgKTP" src="assets/images/image_not_available.png"
                            alt="preview image" style="max-height: 250px;">
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="aju_npwp_personal" name="aju_npwp_personal">
                        <label class="input-group-text ajuNPWPPersonal" for="aju_npwp_personal">NPWP Personal</label>
                    </div>
                    <div class="col-md-12 mb-2">
                        <img id="previewImgNPWPPersonal" src="assets/images/image_not_available.png"
                            alt="preview image" style="max-height: 250px;">
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="aju_kk" name="aju_kk">
                        <label class="input-group-text ajuKK" for="aju_kk">KK</label>
                    </div>
                    <div class="col-md-12 mb-2">
                        <img id="previewImgKK" src="assets/images/image_not_available.png"
                            alt="preview image" style="max-height: 250px;">
                    </div>
<br />
<br />
                    <button type="button" class="btn btn-primary btn-lg btn-block" id="saveForm">
                        <i class="mdi mdi-file-check"></i> Submit </button>

                </div>
            </div>
        </div>
    </div><!--row-->

@endsection