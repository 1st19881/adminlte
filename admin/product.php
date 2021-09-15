<?php 
$menu = "product"

?>
<title>สินค้า</title>

<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

    <div class="container">
        <div class="row">
            <?php 
  error_reporting( error_reporting() & ~E_NOTICE );
  $act = (isset($_GET['act']) ? $_GET['act'] : '');
    if($act=="add"){
      echo '';
    }else{?>
            <a href="product.php?act=add" class="btn btn-primary btn-flat">เพิ่มสินค้า</a>
            <?php } 
   ?>
            <div class="col-md-12" style="margin-top: 10px">
                <div class="row">
                    <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            if($act=='add'){
            include('product_add.php');
            }else if($act=='edit'){
            include("product_edit.php");
            }else{
            include('product_list.php');
            }
            ?>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->

<?php include('footer.php'); ?>

<script>
$(function() {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // http://fordev22.com/
    // });
});
</script>