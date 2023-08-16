<?php $this->load->view('tugasbesarci/header_admin');?>




<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Hot Topic Edit Page
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> ( 0 = untuk menyembunyikan pada hot topic dan 1 = untuk mengubah jadi hot topic )
                            </li>
                        </ol>
                    </div>
                </div>
<!-- isi -->    


<div class="container">
<div class="panel panel-default">
<div class="well well-sm">Daftar Topic </div>
<div class="panel-body">


<table class="table table-striped" id="example"> 
    <thead>
    <tr>
        
        <td><b>Judul</b></td>
        <td><b>Tanggal POST</b></td>
        <td><b>status</b></td>
        
        <td><b>edit</b></td>
        <td><b>delete</b></td>
        
    </tr>
</thead>
<tbody>
</tbody>
</table>
        </div>

        </table>
    </div>

<!-- -->

            </div>
     

        </div>


    </div>
    

</body>

</html>

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
        "data":"Tanggal_dibuat",
        },
        {
        "targets":2,
        "data":"status",
        },
        
        {
        "targets":3,
        "data":null,
        "searchable":false,
        "render":function(data,type,full,meta){
            return '<a href="<?=site_url()?>/tugasbesarci_admin/daftar_hot_topic_edit/'+data["id"]+'">Edit</a>'
            }
        },
        
        {
        "targets":4,
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






















