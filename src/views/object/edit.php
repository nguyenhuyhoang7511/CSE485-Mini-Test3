<?php
    include './src/views/template/header.php'
?>

<div style="color: red">
    <?php echo $error; ?>
</div>
<div class="container" style="width: 40%;" >
<h3 class="text-uppercase">Chỉnh Sửa Thông Tin</h3>
<form action="" method="post" class="border border-secondary mt-5" >

    <div class="container-form m-5">

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputEmail1" class="form-label">ID :</label>
            <input disabled style="width: 70%;" class="form-control"  type="text" name="" value="<?php echo isset($_POST['id']) ? $_POST['id'] : $object['id']?>"/>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputEmail1" class="form-label">Họ Tên</label>
            <input style="width: 70%;" class="form-control"  type="text" name="txt_name" value="<?php echo isset($_POST['txt_name']) ? $_POST['txt_name'] : $object['bd_name']?>"/>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Giới tính:</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_sex" value="<?php echo isset($_POST['txt_sex']) ? $_POST['txt_sex'] : $object['bd_sex']?>"/>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Tuổi:</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_age" value="<?php echo isset($_POST['txt_age']) ? $_POST['txt_age'] : $object['bd_age']?>"/>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Nhóm máu:</label>        
            <input style="width: 70%;" class="form-control" type="text" name="txt_bgroup" value="<?php echo isset($_POST['txt_bgroup']) ? $_POST['txt_bgroup'] : $object['bd_bgroup']?>"/>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Ngày đăng kí</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_reg_date" value="<?php echo isset($_POST['txt_reg_date']) ? $_POST['txt_reg_date'] : $object['bd_reg_date']?>"/>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_phno" value="<?php echo isset($_POST['txt_phno']) ? $_POST['txt_phno'] : $object['bd_phno']?>"/>
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
