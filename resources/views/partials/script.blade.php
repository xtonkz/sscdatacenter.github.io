<script type="text/javascript">

$(document).ready(function(){
    $('.loader').hide();
 // GLOBAL SETUP 
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    //load-table
    $('#load_period').on('click', function () {
        var periodMonth = $('#periodMonth').val(),
            periodYear = $('#periodYear').val();
        $('.loader').show();
        if(periodMonth != null && periodYear != null){
            $.ajax({
                url:"/getPeriod",
                type:'GET',
                data:{
                    mon : periodMonth,
                    thn : periodYear,
                    },
                success:function (data) {
                    $('.loader').hide();
                    $('#bulan').attr('value', periodMonth);
                    $('#tahun').attr('value', periodYear);
                    // console.log(data);
                    if($.isEmptyObject(data)){
                        Swal.fire({
                            toast: true,
                            position: 'top',
                            animation: true,
                            // width: '40em',
                            title: 'Data not found!',
                            icon : 'warning',
                            showCloseButton: true,
                            timer: 2000,
                            timerProgressBar: true,
                        });
                        setTimeout(function(){
                        window.location.reload();
                        }, 2000);
                    }else{                    
                    $('#summary_table').DataTable({
                        processing: true,
                        serverSide: true,
                        destroy:true,
                        search: {
                            return: true
                        },
                        ajax:  {
                            url:"{{ url('get-query') }}",
                            type:"get",
                            data:{
                                mon : periodMonth,
                                thn : periodYear,}
                        },
                        columns: [
                            { data: 'business_unit', name: 'data_do.business_unit',orderable:false},
                            { data: 'branch', name: 'data_do.branch',orderable:false},
                            // { data: 'do_no' , name: 'data_do.do_no'},
                            { data: 'do_date' , name: 'data_do.do_date'},
                            { data: 'chasis' , name: 'data_do.chasis',orderable:false},
                            { data: 'model' , name: 'data_do.model',orderable:false},
                            { data: 'product_desc', name: 'data_do.product_desc',orderable:false },
                            { data: 'color_desc', name: 'data_do.color_desc',orderable:false },
                            // { data: 'modem_date', name: 'afi.modem_date'},
                            // { data: 'faktur_turun', name: 'afi.faktur_turun' },
                            { data: 'cust_name', name: 'afi.cust_name',orderable:false },
                            // { data: 'cust_address', name: 'afi.cust_address' },
                            // { data: 'cust_address2', name: 'afi.cust_address2' },
                            { data: 'birojasa', name: 'mohon_stnk.birojasa',orderable:false },
                            { data: 'wilayah', name: 'mohon_stnk.wilayah',orderable:false },
                            // { data: 'efektif_faktur', name: 'mohon_stnk.efektif_faktur' },
                            // { data: 'cek_fisik', name: 'mohon_stnk.cek_fisik' },
                            // { data: 'terima_faktur', name: 'mohon_stnk.terima_faktur' },
                            // { data: 'berkas_cust', name: 'mohon_stnk.berkas_cust' },
                            { data: 'tgl_mohon' , name: 'mohon_stnk.tgl_mohon',orderable:false},
                            { data: 'tgl_notice', name: 'mohon_stnk.tgl_notice',orderable:false },
                            { data: 'nopol' , name: 'mohon_stnk.nopol',orderable:false},
                            { data: 'tgl_stnkjadi', name: 'stnk_jadi.tgl_stnkjadi',orderable:false },
                            // { data: 'remark', name: 'stnk_jadi.remark' },
                            // { data: 'inv_no', name: 'invoice.inv_no' },
                            { data: 'tgl_bayar', name: 'invoice.tgl_bayar',orderable:false },
                            { data: 'action', name:'action',orderable:false}
                            ]
                    });//summartytable
                }//else
                }//success

            })//ajax
        }else{
            Swal.fire({
                            toast: true,
                            position: 'top',
                            animation: true,
                            title: 'Please select month and year!!',
                            icon : 'warning',
                            showCloseButton: true,
                            timer: 2000,
                            timerProgressBar: true,
                        });
                        setTimeout(function(){
                        window.location.reload();
                        }, 2000);
        }
    });//onclick-load-table


    //download-table
    $('#download_summary').on('click', function () {
        var periodMonth = $('#periodMonth').val(),
            periodYear = $('#periodYear').val(),
            bulan = $('#bulan').val(),
            tahun = $('#tahun').val();
        var url = "/summary/export";
        $('.loader').show();
        if(periodMonth != null && periodYear != null){
         $.ajax({
            url:url,
            type:'get',
            xhrFields:{
                responseType: 'blob'
                },
            data:{
                mon : bulan,
                thn : tahun
            },
            success:function (data) {
                $('.loader').hide();

                var blob = new Blob([data], {
                type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
                });
                var downloadUrl = URL.createObjectURL(blob);
                var a = document.createElement("a");
                a.href = downloadUrl;
                a.download = "summary.xlsx";
                document.body.appendChild(a);
                a.click();
                Swal.fire({
                        toast: true,
                        position: 'top',
                        animation: true,
                        title: 'Download complete',
                        icon : 'success',
                        showCloseButton: true,
                        timer: 2000,
                        timerProgressBar: true,
                    });
                 }
            })//ajax
        }else{
            Swal.fire({
                            toast: true,
                            position: 'top',
                            animation: true,
                            title: 'Please select month and year!!',
                            icon : 'warning',
                            showCloseButton: true,
                            timer: 2000,
                            timerProgressBar: true,
                        });
                        setTimeout(function(){
                        window.location.reload();
                        }, 2000);
        }
    });//onclick-download-table


    
    //-------------------------------------------------------------------------------------//
    //get-summary_table
    // $('#summary_table').DataTable({
    //     processing: true,
    //     serverSide: true,
    //     search: {
    //         return: true
    //     },
    //     ajax: "{{ url('dashboard-report') }}",
    //     //ajax: "{{ url('get-query') }}",
        
    //     columns: [
    //         { data: 'business_unit', name: 'data_do.business_unit',orderable:false},
    //         { data: 'branch', name: 'data_do.branch',orderable:false},
    //         // { data: 'do_no' , name: 'data_do.do_no'},
    //         { data: 'do_date' , name: 'data_do.do_date'},
    //         { data: 'chasis' , name: 'data_do.chasis',orderable:false},
    //         { data: 'model' , name: 'data_do.model',orderable:false},
    //         { data: 'product_desc', name: 'data_do.product_desc',orderable:false },
    //         { data: 'color_desc', name: 'data_do.color_desc',orderable:false },
    //         // { data: 'modem_date', name: 'afi.modem_date'},
    //         // { data: 'faktur_turun', name: 'afi.faktur_turun' },
    //         { data: 'cust_name', name: 'afi.cust_name',orderable:false },
    //         // { data: 'cust_address', name: 'afi.cust_address' },
    //         // { data: 'cust_address2', name: 'afi.cust_address2' },
    //         { data: 'birojasa', name: 'mohon_stnk.birojasa',orderable:false },
    //         { data: 'wilayah', name: 'mohon_stnk.wilayah',orderable:false },
    //         // { data: 'efektif_faktur', name: 'mohon_stnk.efektif_faktur' },
    //         // { data: 'cek_fisik', name: 'mohon_stnk.cek_fisik' },
    //         // { data: 'terima_faktur', name: 'mohon_stnk.terima_faktur' },
    //         // { data: 'berkas_cust', name: 'mohon_stnk.berkas_cust' },
    //         { data: 'tgl_mohon' , name: 'mohon_stnk.tgl_mohon',orderable:false},
    //         { data: 'tgl_notice', name: 'mohon_stnk.tgl_notice',orderable:false },
    //         { data: 'nopol' , name: 'mohon_stnk.nopol',orderable:false},
    //         { data: 'tgl_stnkjadi', name: 'stnk_jadi.tgl_stnkjadi',orderable:false },
    //         // { data: 'remark', name: 'stnk_jadi.remark' },
    //         // { data: 'inv_no', name: 'invoice.inv_no' },
    //         { data: 'tgl_bayar', name: 'invoice.tgl_bayar',orderable:false },
    //         { data: 'action', name:'action',orderable:false}
    //     ]
    // });
    //-------------------------------------------------------------------------------------//

    //show summary-table
    $('body').on('click', '.showData', function () {
       var id = $(this).data('id');
       $('.loader').show();
       $.ajax({
           url : 'dashboard-report/' + id + '/edit',
           type :'GET',
           success : function(response) {
            
            console.log(response);
            $('.loader').hide();
                $("#business_unit").val(response.result.business_unit);
                $("#branch").val(response.result.branch);
                $('#do_no').val(response.result.do_no);
                $("#do_date").val(response.result.do_date);
                $("#chasis").val(response.result.chasis);
                $("#model").val(response.result.model);
                $("#product_desc").val(response.result.product_desc);
                $("#color_desc").val(response.result.color_desc);
                $('#modem_date').val(response.result.modem_date);
                $('#faktur_turun').val(response.result.faktur_turun);
                $('#cust_name').val(response.result.cust_name);
                $('#cust_address').val(response.result.cust_address);
                $('#cust_address2').val(response.result.cust_address2);
                $('#birojasa').val(response.result.birojasa);
                $('#wilayah').val(response.result.wilayah);
                $('#efektif_faktur').val(response.result.efektif_faktur);
                $('#cek_fisik').val(response.result.cek_fisik);
                $('#terima_faktur').val(response.result.terima_faktur);
                $('#berkas_cust').val(response.result.berkas_cust);
                $('#tgl_mohon').val(response.result.tgl_mohon);
                $('#tgl_notice').val(response.result.tgl_notice);
                $('#nopol').val(response.result.nopol);
                $('#tgl_stnkjadi').val(response.result.tgl_stnkjadi);
                $('#remark').val(response.result.remark);
                $('#tgl_bayar').val(response.result.tgl_bayar);
                $('#showModal').modal('show');    
            }
        });
         
    });//summary


    // do_table
    $('#do_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('get-do') }}",
            
        columns: [
            { data: 'business_unit' },
            { data: 'branch' },
            { data: 'do_no' },
            { data: 'do_date' },
            { data: 'chasis' },
            { data: 'model' },
            { data: 'tipe_kendaraan' },
            { data: 'product_desc' },
            { data: 'color_desc' },
            { data: 'engine_no' },
            //{ data: 'cust_no' },
            { data: 'cust_name' },
            // { data: 'cust_class' },
            { data: 'stnk_name' },
            { data: 'cust_address' },
            { data: 'cust_dist' },
            { data: 'cust_city' },
            { data: 'payment_method' },
            // { data: 'leasing' },
            // { data: 'spk_no',},
            // { data: 'spk_date' },
            // { data: 'rrn_no' }     
        ]
    });//do


    //afi_table
    $('#afi_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('get-afi') }}",
        
        columns: [
            { data: 'cust_name' },
            { data: 'cust_address' },
            { data: 'cust_address2' },
            { data: 'chasis' },
            { data: 'branch' },
            { data: 'jenis_chasis' },
            { data: 'modem_date' },
            { data: 'faktur_turun' }
               
        ]
    });//afi


    //pstnk_table
    $('#pstnk_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('get-pending') }}",
        
        columns: [
            { data: 'cust_name' },
            { data: 'business_unit' },
            { data: 'branch' },
            { data: 'chasis' },
            { data: 'wilayah' },
            { data: 'faktur_date' },
            { data: 'cek_fisik' },
            { data: 'terima_faktur' },
            { data: 'terima_berkasafi' },
            { data: 'pilnop' },
            { data: 'keterangan' }

        ]
    });//pstnk


    //mstnk_table
    $('#mstnk_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('get-mohon') }}",
        
        columns: [
            { data: 'cust_name'},
            { data: 'business_unit'},
            { data: 'branch'},
            { data: 'birojasa'},
            { data: 'chasis'},
            { data: 'wilayah'},
            { data: 'efektif_faktur'},
            { data: 'cek_fisik'},
            { data: 'terima_faktur'},
            { data: 'berkas_cust'},
            { data: 'tgl_mohon'},
            { data: 'est_stnkjadi'},
            { data: 'tgl_notice'},
            { data: 'nopol'},
            { data: 'pilnop'},
            { data: 'keterangan'}
        ]
    });//mstnk


    //stnkjadi
    $('#stnkjadi_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('get-jadi') }}",
        
        columns: [
            { data: 'business_unit'},
            { data: 'branch'},
            { data: 'chasis'},
            { data: 'model'},
            { data: 'wilayah'},
            { data: 'birojasa'},
            { data: 'tgl_aju'},
            { data: 'tgl_estimasi_stnk_jadi'},
            { data: 'tgl_stnkjadi'},
            { data: 'tgl_bpkbjadi'},
            { data: 'nopol'},
            { data: 'payment_method'},
            { data: 'status_stnk'}
        ]
    });//stnkjadi


    //inv
    $('#inv_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('get-invoice') }}",
        
        columns: [
            { data: 'birojasa'},
            { data: 'inv_no'},
            { data: 'chasis'},
            { data: 'cust_name'},
            { data: 'business_unit'},
            { data: 'branch'},
            { data: 'wilayah'},
            { data: 'nopol'},
            { data: 'tgl_notice'},
            { data: 'tgl_invoice'},
            { data: 'tgl_bayar'}
        ]
    });//inv


    //hs_table
    $('#hs_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('get-hs') }}",
        
        columns: [
            { data: 'plant' },
            { data: 'bpkb_name' },
            { data: 'chasis' },
            { data: 'cust_name' },
            { data: 'stnk_jadi' },
            { data: 'bpkb_no' },
            { data: 'leasing' },
            { data: 'engine_no' },
            { data: 'type_unit' },
            { data: 'nopol' },
            { data: 'bpkb_input' },
            { data: 'aging_bpkb_blmgr' },
            { data: 'business_unit' },
            { data: 'sistem' },
            { data: 'tgl_keluar_bpkb' },
            { data: 'pengambil_bpkb' },
            { data: 'top' },
            { data: 'tahun_input_bpkb' },
            { data: 'penerima' },
            { data: 'bpkb_revisi' },
            { data: 'selesai_revisi' },
            { data: 'keterangan' },
            { data: 'wilayah' },
            { data: 'status' }  
            
        ]
    });


    ///pdd
    $('#pdd_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('get-pdd') }}",
        
        columns: [
            { data: 'business_unit' },
            { data: 'branch' },
            { data: 'chasis' },
            { data: 'salesmen' },
            { data: 'kontak_sales' },
            { data: 'zona' },
            { data: 'batch' },
            { data: 'nama_driver' },
            { data: 'kontak_driver' },
            { data: 'plan_out' },
            { data: 'pdd_cust_name' },
            { data: 'pdd_address' },
            { data: 'pdd_lokasi_unit' },
            { data: 'pdd_stnk' },
            { data: 'pdd_warna' },
            { data: 'pdd_model' },
            { data: 'pdd_acc' },
            { data: 'pdd_tgl_acc' },
            { data: 'pdd_asal_unit' },
            { data: 'pdd_cust_phone' },
            { data: 'pdd_plan_tiba' },
            { data: 'pdd_tgl_dr' },
            { data: 'pdd_plan_deliv' },
            { data: 'pdd_destination' },
            { data: 'pdd_engine' }, 
            
        ]
    });

    //delvstnktable
    $('#delvstnk_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('getdelvstnk') }}",
        
        columns: [
            { data: 'pdd_id', name: 'pdd.pdd_id', visible:false},
            { data: 'business_unit', name: 'pdd.business_unit'},
            { data: 'branch', name: 'pdd.branch'},
            { data: 'chasis', name: 'pdd.chasis'},
            { data: 'pdd_model', name: 'pdd.pdd_model'},
            { data: 'pdd_warna', name: 'pdd.pdd_warna'},
            { data: 'pdd_engine', name: 'pdd.pdd_engine'},
            { data: 'pdd_cust_name', name: 'pdd.pdd_cust_name'},
            { data: 'pdd_cust_phone', name: 'pdd.pdd_cust_phone'},
            { data: 'pdd_plan_deliv',name: 'pdd.pdd_plan_deliv' },
            { data: 'wilayah',name: 'stnk_jadi.wilayah' },
            { data: 'tgl_aju', name : 'stnk_jadi.tgl_aju' },  
            { data: 'tgl_estimasi_stnk_jadi', name : 'stnk_jadi.tgl_estimasi_stnk_jadi' },  
            { data: 'tgl_stnkjadi', name : 'stnk_jadi.tgl_stnkjadi' },  
            { data: 'tgl_bpkbjadi', name : 'stnk_jadi.tgl_bpkbjadi' },  
            { data: 'pdd_stnk_deliv', name : 'pdd.pdd_stnk_deliv' },  
            { data: 'pdd_bpkb_deliv', name : 'pdd.pdd_bpkb_deliv' },
            { data: 'payment_method', name : 'stnk_jadi.payment_method' },  
            { data: 'status_stnk', name : 'stnk_jadi.status_stnk' },  
            { data: 'action' },  
            
        ]
    });


    //-------------------------------------attempt-edit-plan
    $('body').on('click', '.editPlan', function () {
           var pdd_id = $(this).data('pdd_id');
           
           $.ajax({
               url : 'getdelvstnk/' + pdd_id + '/edit',
               type :'GET',
               success : function(response) {
                //var radio1 =  response.result.expense_on_project;
                console.log(response);
                    $("#pdd_id").val(response.result.pdd_id);
                    $('#pdd_business_unit').val(response.result.business_unit);
                    $('#pdd_branch').val(response.result.branch);
                    $('#pdd_chasis').val(response.result.chasis);
                    //$("input[name=expense_on_project][value=" + radio1 + "]").prop('checked', true).click();
                    $('#pdd_model').val(response.result.pdd_model);
                    $('#pdd_warna').val(response.result.pdd_warna);
                    $('#pdd_engine').val(response.result.pdd_engine);
                    $('#pdd_cust_name').val(response.result.pdd_cust_name);
                    $('#pdd_cust_phone').val(response.result.pdd_cust_phone);
                    $('#pdd_plan_deliver').val(response.result.pdd_plan_deliv);
                    $('#stnk_wilayah').val(response.result.wilayah);
                    $('#stnk_tgl_aju').val(response.result.tgl_aju);
                    $('#tgl_estimasi_stnk_jadi').val(response.result.tgl_estimasi_stnk_jadi);
                    $('#delv_tgl_stnkjadi').val(response.result.tgl_stnkjadi);
                    $('#delv_tgl_bpkbjadi').val(response.result.tgl_bpkbjadi);
                    $('#payment_method').val(response.result.payment_method);
                    $('#status_stnk').val(response.result.status_stnk);
                    $('#plan_delv_stnk').css('border','solid');
                    $('#plan_delv_bpkb').css('border','solid');
                    $('#delvStnkModal').modal('show'); 
                    $('.savePlan').click(function() {
                        savePlan(pdd_id);
                    }); 
               }
               
            });
             
        });//attempt edit plan



        function savePlan(pdd_id) {
            
                var var_url = 'getdelvstnk/' + pdd_id,
                    var_type = 'PATCH';
            
            $.ajax({
                url: var_url,
                type: var_type,
                data: {
                    pdd_id :  $("#pdd_id").val(),
                    // pdd_business_unit:  $('#pdd_business_unit').val(),
                    // pdd_branch:  $('#pdd_branch').val(),
                    // pdd_chasis:  $('#pdd_chasis').val(),
                    // pdd_model:  $('#pdd_model').val(),
                    // pdd_warna: $('#pdd_warna').val(),
                    // pdd_engine: $('#pdd_engine').val(),
                    // pdd_cust_name: $('#pdd_cust_name').val(),
                    // pdd_cust_phone: $('#pdd_cust_phone').val(),
                    // pdd_plan_deliver: $('#pdd_plan_deliver').val(),
                    // stnk_wilayah: $('#stnk_wilayah').val(),
                    // stnk_tgl_aju: $('#stnk_tgl_aju').val(),
                    // tgl_estimasi_stnk_jadi: $('#tgl_estimasi_stnk_jadi').val(),
                    // delv_tgl_stnkjadi: $('#delv_tgl_stnkjadi').val(),
                    // delv_tgl_bpkbjadi: $('#delv_tgl_bpkbjadi').val(),
                    plan_delv_stnk: $('#plan_delv_stnk').val(),
                    plan_delv_bpkb: $('#plan_delv_bpkb').val(),
                    // payment_method: $('#payment_method').val(),
                    // status_stnk :$('#status_stnk').val()
                    
                },
                success: function(response)  {
                    console.log(response);
                    if (response.success) {
    
                        Swal.fire({
                            toast: true,
                            position: 'top',
                            animation: true,
                            title: response.success,
                            icon : 'success',
                            showCloseButton: true,
                            timer: 2000,
                            timerProgressBar: true,
                        });
                        $('#delvStnkModal').modal('hide'); 
                        setTimeout(function(){
                        window.location.reload();
                        }, 2000);
                        } 
                    else {
                        swal("Error!", response.success, "error");
                        setTimeout(function(){
                        window.location.reload();
                        }, 2000);
                        }
                }
    
            });
        }//save-edit-plan
    
 });//doc.ready


</script>