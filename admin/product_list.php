<?php
error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');  
$query = "SELECT p.*,t.* FROM tbl_product as p 
INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
ORDER BY p.product_id DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);

$i=1;

	
?>

<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">ชื่อขนม</th>
            <th class="text-nowrap"scope="col">ประเภทขนม</th>
            <th class="text-nowrap"scope="col">รายละเอียด</th>
            <th scope="col">ราคา</th>
            <th scope="col">จำนวน</th>
            <th scope="col">หมายเหตุ</th>
            <th scope="col">ภาพ</th>
            <th scope="col">จัดการ</th>
        </tr>
    </thead>
    <?php while($row_p = mysqli_fetch_array($result)) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['product_name']; ?></td>
        <td><?php echo $row_p['type_name']; ?></td>
        <td style="font-size:14px"><?php echo $row_p['product_detail']; ?></td>
        <td><?php echo number_format($row_p['price_product']); ?></td>
        <td><?php echo $row_p['product_qty']; ?></td>
        <td><?php echo $row_p['note']; ?></td>
        <td><?php echo $row_p['img']; ?></td>
        <td>
            <div class="d-flex">
                <a href="product.php?act=edit&product_id=<?php echo $row_p['product_id']; ?>"
                    class="btn btn-warning btn-flat">แก้ไข</a><a
                    href="product.php?act=delete&product_id=<?php echo $row_p['product_id']; ?>"
                    class="btn btn-danger btn-flat">ลบ</a>
            </div>
        </td>
    </tr>


    <?php }  ?>


</table>