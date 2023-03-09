<script type="text/javascript">

    $(document).ready(function(){
        $('.loader').hide();
        $('.select-chasis').select2();
        /**---form initialize default personal--- **/
        $('#aju_corp_name').hide();
        $('#aju_nib').hide();
        $('.ajuNIB').hide();
        $('#aju_npwp_corp').hide();
        $('.ajuNPWPCorp').hide();
        $('#aju_izin_lokasi').hide();
        $('.ajuIzinLokasi').hide();
        $('#aju_izin_usaha').hide();
        $('.ajuIzinUsaha').hide();
        $('#previewImgNib').hide();
        $('#previewImgNPWPCorp').hide();
        $('#previewImgIzinUsaha').hide();
        $('#previewImgIzinLokasi').hide();
        /**----------optional------------ **/
        $('#aju_remark_gage').hide();
        $('label[for="aju_remark_gage"]').hide();
        $('#aju_remark_nopil').hide();
        $('label[for="aju_remark_nopil"]').hide();
        $('#aju_remark_sj').hide();
        $('label[for="aju_remark_sj"]').hide();
        $('#aju_remark_spood').hide();
        $('label[for="aju_remark_spood"]').hide();
        $('#aju_remark_keur').hide();
        $('label[for="aju_remark_keur"]').hide();
        $('#aju_remark_rekom').hide();
        $('label[for="aju_remark_rekom"]').hide();
        $('#aju_remark_stck').hide();
        $('label[for="aju_remark_stck"]').hide();
        $('#aju_remark_lainlain').hide();
        $('label[for="aju_remark_lainlain"]').hide();

     // GLOBAL SETUP 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
        //open form
        $('#ajuStnk').on('click', function () {
            window.location.href = ('formaju')  
            // $('.saveForm').html('save disni')
            // $('.saveForm').click(function () {
            //     saveForm();
            // })
        });


        //customer form
        $('#aju_cust_type').on('change', function () {
            var aju = $(this).val();

            if (aju === 'Corporate') {
                $('#aju_corp_name').show();
                $('#aju_nib').show();
                $('.ajuNIB').show();
                $('#aju_npwp_corp').show();
                $('.ajuNPWPCorp').show();
                $('#aju_izin_lokasi').show();
                $('.ajuIzinLokasi').show();
                $('#aju_izin_usaha').show();
                $('.ajuIzinUsaha').show();
                $('#previewImgNib').show();
                $('#previewImgNPWPCorp').show();
                $('#previewImgIzinUsaha').show();
                $('#previewImgIzinLokasi').show();
                $('#aju_nik').hide();
                $('#aju_ktp').hide();
                $('#previewImgKTP').hide();
                $('.ajuKK').hide();
                $('.ajuKTP').hide();
                $('#aju_npwp_personal').hide();
                $('.ajuNPWPPersonal').hide();
                $('#previewImgNPWPPersonal').hide();
                $('#aju_kk').hide();
                $('#previewImgKK').hide();
                
            }else if (aju === 'Personal') {
                $('#aju_corp_name').hide();
                $('#aju_nib').hide();
                $('.ajuNIB').hide();
                $('#aju_npwp_corp').hide();
                $('.ajuNPWPCorp').hide();
                $('#aju_izin_lokasi').hide();
                $('.ajuIzinLokasi').hide();
                $('#aju_izin_usaha').hide();
                $('.ajuIzinUsaha').hide();
                $('#previewImgNib').hide();
                $('#previewImgNPWPCorp').hide();
                $('#previewImgIzinUsaha').hide();
                $('#previewImgIzinLokasi').hide();
                $('#aju_nik').show();
                $('#aju_email').show();
                $('#aju_nik').show();
                $('#aju_email').show();
                $('#aju_ktp').show();
                $('#previewImgKTP').show();
                $('#aju_npwp_personal').show();
                $('#aju_kk').show();
                $('.ajuKK').show();
                $('#previewImgKK').show();
                $('#previewImgNPWPPersonal').show();
                $('.ajuKTP').show();
                $('.ajuNPWPPersonal').show();
            }
        })

        //vehicle doc
        $('#aju_chasis').change(function (e) {
            e.preventDefault();
            var chas = $(this).val();
            //alert(chas);  
            $.ajax({
                url :'/getvi',
                type: 'GET',
                data: {
                    chasis:chas
                },
                dataType: 'json',
                success: function(data){
                    console.log(data);
                    var tipe = [],
                        warna = [],
                        mesin = [];
                    for (var i = 0; i < data.length; i++){
			
                    tipe.push(data[i].product_desc);
                    warna.push(data[i].color_desc);
                    mesin.push(data[i].engine_no);
                    }
                    //console.log(tipe[0][0].product_desc);
                    document.getElementById('aju_type').value = tipe[0][0].product_desc;
                    document.getElementById('aju_color').value = warna[0][0].color_desc;
                    document.getElementById('aju_engine').value = mesin[0][0].engine_no;
                   
                }
            })
        });

       //optional 1
       $('#aju_gage').change(function(){
        if ($(this).is(':checked')){
            $('#aju_remark_gage').show();
            $('label[for="aju_remark_gage"]').show();
        }else{
            $('#aju_remark_gage').hide();
            $('label[for="aju_remark_gage"]').hide();
        }
        });
        //optional 2
       $('#aju_nopil').change(function(){
        if ($(this).is(':checked')){
            $('#aju_remark_nopil').show();
            $('label[for="aju_remark_nopil"]').show();
        }else{
            $('#aju_remark_nopil').hide();
            $('label[for="aju_remark_nopil"]').hide();
        }
        });
        //optional 3
        $('#aju_sj').change(function(){
        if ($(this).is(':checked')){
            $('#aju_remark_sj').show();
            $('label[for="aju_remark_sj"]').show();
        }else{
            $('#aju_remark_sj').hide();
            $('label[for="aju_remark_sj"]').hide();
        }
        });
        //optional 4
        $('#aju_spood').change(function(){
        if ($(this).is(':checked')){
            $('#aju_remark_spood').show();
            $('label[for="aju_remark_spood"]').show();
        }else{
            $('#aju_remark_spood').hide();
            $('label[for="aju_remark_spood"]').hide();
        }
        });
            

        //--------------------------preview image

        //--corporate
        $('#aju_nib').change(function(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("previewImgNib");
                preview.src = src;
                preview.style.display = "block";
            }
        });
        
        $('#aju_npwp_corp').change(function(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("previewImgNPWPCorp");
                preview.src = src;
                preview.style.display = "block";
            }
        });
        
        $('#aju_izin_usaha').change(function(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("previewImgIzinUsaha");
                preview.src = src;
                preview.style.display = "block";
            }
        });

        $('#aju_izin_lokasi').change(function(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("previewImgIzinLokasi");
                preview.src = src;
                preview.style.display = "block";
            }
        });

        //--personal
        $('#aju_ktp').change(function(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("previewImgKTP");
                preview.src = src;
                preview.style.display = "block";
            }
        });
        
        $('#aju_npwp_personal').change(function(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("previewImgNPWPPersonal");
                preview.src = src;
                preview.style.display = "block";
            }
        });

        $('#aju_kk').change(function(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("previewImgKK");
                preview.src = src;
                preview.style.display = "block";
            }
        });


        // function saveForm(){
            $('#saveForm').click(function(){
            $.ajax ({
                url : "{{ url('get-form') }}",
                type: "POST",
                data: {
                    aju_cust_type : $('#aju_cust_type').val(),
                    aju_fullname : $('#aju_fullname').val(),
                    aju_nik : $('#aju_nik').val(),
                    aju_corp_name : $('#aju_corp_name').val(),
                    aju_phone : $('#aju_phone').val(),
                    aju_address : $('#aju_address').val(),
                    aju_email : $('#aju_email').val(),
                    aju_chasis : $('#aju_chasis').val(),
                    aju_type : $('#aju_type').val(),
                    aju_engine : $('#aju_engine').val(),
                    aju_product_type : $('#aju_product_type').val(),
                    aju_gage : $('#aju_gage').val(),
                    aju_sj : $('#aju_sj').val(),
                    aju_spood : $('#aju_spood').val()
                },
                success: function(data){
                    console.log(data);


                }
            });//ajax function
       // }//function save
        });//click function

     });//doc.ready
    
    
    </script>