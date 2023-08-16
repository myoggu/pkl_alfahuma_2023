w<?php $this->load->view('tugasbesarci/header_admin');?>




<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Daftar member
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>
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
        
        <td><b>username</b></td>

        <td><b>password</b></td>
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
            "lengthMenu":[[3,6,-1],[3,6,"All"]],
            "ajax":{
                url : "<?php echo site_url('tugasbesarci_admin/data_server_member')?>",
                type : "POST"
            },
        "columnDefs":
    [
        {
        "targets":0,
        "data":"username",
        },

        {
        "targets":1,
        "data":"password",
        },
        
        {
        "targets":2,
        "data":null,
        "searchable":false,
        "render":function(data,type,full,meta){
            return '<a href="<?=site_url()?>/tugasbesarci_admin/user_edit/'+data["id"]+'">Edit</a>'
            }
        },
        
        {
        "targets":3,
        "data":null,
        "searchable":false,
        "render":function(data,type,full,meta){
            return '<a href="<?=site_url()?>/tugasbesarci_admin/delete_user/'+data["id"]+'">Delete</a>'
            }
        },
    ]
    });
        
    });
</script>






















