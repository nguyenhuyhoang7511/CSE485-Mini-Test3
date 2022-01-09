<?php
    include './src/views/template/header.php';
    // include '.sr'
?>

<div style="color: red">
    <?php echo $error; ?>
</div>

<div class="container" style="width: 50%; " >
    <h3>Hiển Thị Thông Tin Chi Tiết</h3>

    <div class="card mb-3 border border-secondary mt-5" style="max-width: 840px;background-color: bisque; ">
    <div class="row g-0">
        <div class="col-md-4 " style="margin-top: 30px;" >
        <!-- <img src="/assets/img/av" height="100%" class="img-fluid rounded-start mt-5" alt="..."> -->
        <i style="font-size: 170px;  " class="bi bi-qr-code "></i>
        <p class="">Quét mã QR</p>
        </div>
        <div class="col-md-8 " style="border-left: 1px solid black;">
        <div class="card-body"  >
            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputEmail1" class="form-label mt-2">Họ Tên :</label>
                <input disabled  style="width: 70%;" class="form-control"  type="text" name="txt_name" value="<?php echo isset($_POST['txt_name']) ? $_POST['txt_name'] : $object['bd_name']?>"/>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputPassword1" class="form-label mt-2">Giới tính :</label>
                <input disabled style="width: 70%;" class="form-control" type="text" name="txt_sex" value="<?php echo isset($_POST['txt_sex']) ? $_POST['txt_sex'] : $object['bd_sex']?>"/>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputPassword1" class="form-label mt-2">Tuổi :</label>
                <input disabled style="width: 70%;" class="form-control" type="text" name="txt_age" value="<?php echo isset($_POST['txt_age']) ? $_POST['txt_age'] : $object['bd_age']?>"/>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputPassword1" class="form-label mt-2">Nhóm máu :</label>        
                <input disabled style="width: 70%;" class="form-control" type="text" name="txt_bgroup" value="<?php echo isset($_POST['txt_bgroup']) ? $_POST['txt_bgroup'] : $object['bd_bgroup']?>"/>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputPassword1" class="form-label mt-2">Ngày đăng kí :</label>
                <input disabled style="width: 70%;" class="form-control" type="text" name="txt_reg_date" value="<?php echo isset($_POST['txt_reg_date']) ? $_POST['txt_reg_date'] : $object['bd_reg_date']?>"/>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputPassword1" class="form-label mt-2">Số điện thoại :</label>
                <input disabled style="width: 70%;" class="form-control" type="text" name="txt_phno" value="<?php echo isset($_POST['txt_phno']) ? $_POST['txt_phno'] : $object['bd_phno']?>"/>
            </div>

        </div>
        </div>
    </div>
    </div>

    <a class="btn btn-success mt-5 " aria-current="page" href="index.php?controller=object&action=index"> Quay Lại Trang Chủ</a>



        
</div>

<?php
    include './src/views/template/footer.php'
?>
