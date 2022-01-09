<?php
    include './src/views/template/header.php'
?>

<div style="color: red">
    <?php echo $error; ?>
</div>
<div class="container" style="width: 40%;" >
<h3 class="text-uppercase">Chỉnh Sửa Dự Án</h3>
<form action="" method="post" class="border border-secondary mt-5" >

    <div class="container-form m-5">

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputEmail1" class="form-label">Mã dữ án :</label>
            <input disabled style="width: 70%;" class="form-control"  type="text" name="" value="<?php echo isset($_POST['maduan']) ? $_POST['maduan'] : $object['maduan']?>"/>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputEmail1" class="form-label">Tên dự án :</label>
            <input style="width: 70%;" class="form-control"  type="text" name="txt_tenduan" value="<?php echo isset($_POST['txt_tenduan']) ? $_POST['txt_tenduan'] : $object['tenduan']?>"/>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Lĩnh vực:</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_namthuchien" value="<?php echo isset($_POST['txt_namthuchien']) ? $_POST['txt_namthuchien'] : $object['namthuchien']?>"/>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Nhiệm vụ:</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_linhvuc" value="<?php echo isset($_POST['txt_linhvuc']) ? $_POST['txt_linhvuc'] : $object['linhvuc']?>"/>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Cơ quan thực hiện:</label>        
            <input style="width: 70%;" class="form-control" type="text" name="txt_nhiemvu" value="<?php echo isset($_POST['txt_nhiemvu']) ? $_POST['txt_nhiemvu'] : $object['nhiemvu']?>"/>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Ngày đăng kí</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_coquan" value="<?php echo isset($_POST['txt_coquan']) ? $_POST['txt_coquan'] : $object['coquanthuchien']?>"/>
        </div>

        
        <div class="mb-3 d-flex justify-content-between mt-5">
        <a class="btn btn-success" style="margin-bottom: -20px;" aria-current="page" href="index.php?controller=object&action=index"> Quay Lại Trang Chủ</a>
        <input  style="margin-bottom: -20px;" type="submit" class="btn btn-success " name="submit" value="Cập nhật thông tin" />
        </div>
 
    </div>

</form>
</div>

<?php
    include './src/views/template/footer.php'
?>
