<?php $this->load->view('tugasbesarci/header_admin');?>



<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Recent Update News
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
    <table class="table table-striped" id="example"> 
    <thead>
    <tr>
        
        <td><b>Judul</b></td>
        <td><b>Isi</b></td>
        <td><b>Tanggal pembuatan</b></td>
        <td><b>Foto</b></td>
        <td><b>edit</b></td>
        <td><b>delete</b></td>
        
    </tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>


            </div>
     

        </div>


    </div>
    

</body>





<?php $this->load->view('tugasbesarci/footer_admin');?> 

    <script src="<?=base_url()?>assets/datatables.min.js" rel="stylesheet"></script>
    <script type="text/javascript">

    $(document).ready(function() {
        $('#example').DataTable({ 
            "processing":true,
            "serverside":true,
            "lengthMenu":[[5,10,-1],[5,10,"All"]],
            "ajax":{
                url : "<?php echo site_url('tugasbesarci_admin/data_server')?>",
                type : "POST"
            },
        "columnDefs":
    [
        {
        "targets":0,
        "data":"Judul",
        },

            {
        "targets":1,
        "data":"Isi",
        },
        {
        "targets":2,
        "data":"Tanggal_dibuat",
        },
               {
        "targets":3,
        "data":"foto",
        "render":function(data,type,full,meta){
            return '<img src="<?=base_url()?>assets/uploads/'+data+'">';
            }
        },
        {
        "targets":4,
        "data":null,
        "searchable":false,
        "render":function(data,type,full,meta){
            //return '<a href="<?=site_url()?>/tugasbesarci_admin/daftar_hot_topic_edit/'+data["id"]+'">Edit</a>'
            return '<a href="<?=site_url()?>/tugasbesarci_admin/Update/'+data["id"]+'">Edit</a>'
            }
        },
        
        {
        "targets":5,
        "data":null,
        "searchable":false,
        "render":function(data,type,full,meta){
            return '<a href="<?=site_url()?>/tugasbesarci_admin/delete/'+data["id"]+'">Delete</a>'
            }
        },
    ]
    });
        
    });
</script>

















