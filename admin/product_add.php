<?php
include('condb.php'); 

$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
$result = mysqli_query($conn, $query);

?>

<div class="col-md-12">
    <form name="register" action="member_form_add_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> เพิ่มสินค้า </h4>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> ชื่อสินค้า :</div>
            <div class="col-sm-12" align="left">
                <input name="product_name" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align=""> ประเภทขนม :</div>
            <div class="col-sm-12" align="left">
                <select name="type_id" class="form-control" required>
                    <option value="type_id">ประเภทขนม</option>
                    <?php foreach($result as $results){?>
                    <option value="<?php echo $results["type_id"];?>">
                        <?php echo $results["type_name"]; ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> ราคา :</div>
            <div class="col-sm-12" align="left">
                <input name="price_product" type="text" required class="form-control" id="m_name" placeholder="" />
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-3" align=""> จำนวน : </div>
            <div class="col-sm-12" align="left">
                <input name="product_qty" type="text" class="form-control" id="m_email" required placeholder="" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> หมายเหตุ : </div>
            <div class="col-sm-12" align="left">
                <textarea name="note" class="form-control" id="m_address" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> รายละเอียดขนม : </div>
            <div class="col-sm-12" align="left">
                <textarea name="product_detail" class="form-control" id="m_address" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                รูปภาพ :
                <input type="file" name="img" id="card_img" class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="product.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>