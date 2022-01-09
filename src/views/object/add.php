<?php
    // include './views/template/header.php';
    include './src/views/template/header.php';
?>
<div style="color: red">
    <?php echo $error; ?>
</div>
<div class="container" style="width: 40%;" >
<h3 class="text-uppercase">Thêm thông tin</h3>
<form action="" method="post" class="border border-secondary mt-5" >

    <div class="container-form m-5">
        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputEmail1" class="form-label">Họ Tên</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_name" value="" />
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Giới tính:</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_sex" value="" />
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Tuổi:</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_age" value="" />

        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Nhóm máu:</label>        
            <input style="width: 70%;" class="form-control" type="text" name="txt_bgroup" value="" />

        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Ngày đăng kí</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_reg_date" value="" />
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_phno" value="" />
        </div>

        <div class="mb-3 d-flex justify-content-center mt-5">
        <a class="btn btn-success" style="margin-bottom: -20px; margin-right: 60px;" aria-current="page" href="index.php?controller=object&action=index"> Quay Lại</a>
        <input  style="margin-bottom: -20px;" type="submit" class="btn btn-success " name="submit" value="Thêm mới" />

        </div>
    </div>

</form>
</div>

<?php
    // include '.src/views/template/footer.php'
    include './src/views/template/footer.php';
?>
