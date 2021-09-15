<?php 
$menu = "index"

?>
<title>หน้าแรก</title>
<!-- query -->
<?php  
include('condb.php');
$query_dormitory = "SELECT COUNT(p_id) as all_dormitory FROM tbl_dormitory ";
$result2 = mysqli_query($con, $query_dormitory) or die ("Error in query: $query_dormitory " . mysqli_error());
$row = mysqli_fetch_array($result2);
extract($row);

$query_type = "SELECT COUNT(type_id) as all_type FROM tbl_type ";
$result3 = mysqli_query($con, $query_type) or die ("Error in query: $query_type " . mysqli_error());
$row_type = mysqli_fetch_array($result3);
extract($row_type);

$query_member = "SELECT COUNT(member_id) as all_member FROM tbl_member ";
$result = mysqli_query($con, $query_member) or die ("Error in query: $query_member " . mysqli_error());
$row_member = mysqli_fetch_array($result);
extract($row_member);

$query_view = "SELECT SUM(p_view) as all_view FROM tbl_dormitory ";
$result1 = mysqli_query($con, $query_view) or die ("Error in query: $query_view " . mysqli_error());
$row_view = mysqli_fetch_array($result1);
extract($row_view);

$query_comment = "SELECT COUNT(c_id) as all_comment FROM tbl_comment ";
$result4 = mysqli_query($con, $query_comment) or die ("Error in query:  $query_comment " . mysqli_error());
$row_comment = mysqli_fetch_array($result4);
extract($row_comment);


$query_pro = "SELECT COUNT(pro_id) as all_pro FROM tbl_pro_dormitory ";
$result5 = mysqli_query($con, $query_pro) or die ("Error in query:  $query_pro " . mysqli_error());
$row_promotion = mysqli_fetch_array($result5);
extract($row_promotion);







//  echo '$query_dormitory';
//  exit(); 
?>




<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">


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

</body>

</html>