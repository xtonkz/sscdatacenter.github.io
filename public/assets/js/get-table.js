$(document).ready(function(){
    var data_do = $("#data_do").attr('url');
    var data_afi = $("#data_afi").attr('url');
    var data_pstnk = $("#data_pstnk").attr('url');
    var data_mstnk = $("#data_mstnk").attr('url');
    var data_stnkjadi = $("#data_stnkjadi").attr('url');
    var data_invoice = $("#data_invoice").attr('url');
    var data_hs = $("#data_hs").attr('url');
    // var data_summary = $("#data_summary").attr('url');


    //summary_table
    $('#summary_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('dashboard-report') }}",
       // url: 
        //},
        columns: [
            { data: 'business_unit' },
            { data: 'branch' },
            { data: 'inv_no' },
            { data: 'inv_date' },
            { data: 'chasis' },
            { data: 'product_desc' },
            { data: 'modem_date' },
            { data: 'faktur_turun' },
            { data: 'cust_name' },
            { data: 'cust_address' },
            { data: 'cust_address2' },
            { data: 'birojasa' },
            { data: 'wilayah' },
            { data: 'efektif_faktur' },
            { data: 'cek_fisik' },
            { data: 'terima_faktur' },
            { data: 'berkas_cust' },
            { data: 'tgl_mohon' },
            { data: 'tgl_notice' },
            { data: 'nopol' },
            { data: 'tgl_stnkjadi' },
            { data: 'remark' },
            { data: 'inv_no' },
            { data: 'tgl_bayar' },
            { data: 'action', name:'action',orderable: false, searchable: false}
        ]
    });

    // do_table
    $('#do_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_do
        },
        columns: [
            { data: 'business_unit' },
            { data: 'branch' },
            { data: 'inv_no' },
            { data: 'inv_date' },
            // { data: 'model' },
            { data: 'product_desc' },
            { data: 'color_desc' },
            { data: 'chasis' },
            { data: 'engine_no' },
            //{ data: 'cust_no' },
            { data: 'cust_name' },
            // { data: 'cust_class' },
            // { data: 'stnk_name' },
            // { data: 'cust_address' },
            // { data: 'cust_dist' },
            // { data: 'cust_city' },
            // { data: 'payment_method' },
            // { data: 'leasing' },
            { data: 'spk_no' },
            // { data: 'spk_date' },
            // { data: 'rrn_no' }     
        ]
    });


    //afi_table
    $('#afi_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_afi
        },
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
    });


    //pstnk_table
    $('#pstnk_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_pstnk
        },
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
    });


    //mstnk_table
    $('#mstnk_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_mstnk
        },
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
    });    

    //stnkjadi
    $('#stnkjadi_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_stnkjadi
        },
        columns: [
            { data: 'cust_name'},
            { data: 'business_unit'},
            { data: 'branch'},
            { data: 'chasis'},
            { data: 'wilayah'},
            { data: 'tgl_mohon'},
            { data: 'tgl_notice'},
            { data: 'nopol'},
            { data: 'tgl_stnkjadi'},
            { data: 'keterangan'},
            { data: 'remark'}
        ]
    }); 

    //inv
    $('#inv_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_invoice
        },
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
    }); 

    //hs_table
    $('#hs_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_hs
        },
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

    
    
 });//doc.ready

