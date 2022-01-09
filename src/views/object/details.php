<?php
    include './src/views/template/header.php';
    // include '.sr'
?>

<div style="color: red">
    <?php echo $error; ?>
</div>

<div class="container" style="width: 50%; " >
    <h3>Hiển Thị Thông Tin Chi Tiết</h3>

    <div class="card mb-3 border border-secondary mt-5" style="max-width: 1200px;background-color: bisque; ">
    <div class="row g-0">
        <div class="col-md-4 " style="margin-top: 30px;" >
        <!-- <img src="/assets/img/av" height="100%" class="img-fluid rounded-start mt-5" alt="..."> -->
        <i style="font-size: 170px;  " class="bi bi-qr-code "></i>
        <p class="">Quét mã dự án</p>
        </div>
        <div class="col-md-8 " style="border-left: 1px solid black;">
        <div class="card-body"  >
            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputEmail1" class="form-label mt-2">Tên dự án :</label>
                <input disabled  style="width: 70%;" class="form-control"  type="text" name="txt_tenduan" value="<?php echo isset($_POST['txt_tenduan']) ? $_POST['txt_tenduan'] : $object['tenduan']?>"/>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputPassword1" class="form-label mt-2">Thời gian :</label>
                <input disabled style="width: 70%;" class="form-control" type="text" name="txt_namthuchien" value="<?php echo isset($_POST['txt_namthuchien']) ? $_POST['txt_namthuchien'] : $object['namthuchien']?>"/>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputPassword1" class="form-label mt-2">Lĩnh Vực :</label>
                <input disabled style="width: 70%;" class="form-control" type="text" name="txt_linhvuc" value="<?php echo isset($_POST['txt_linhvuc']) ? $_POST['txt_linhvuc'] : $object['linhvuc']?>"/>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputPassword1" class="form-label mt-2">Nhiệm vụ :</label>        
                <input disabled style="width: 70%;" class="form-control" type="text" name="txt_nhiemvu" value="<?php echo isset($_POST['txt_nhiemvu']) ? $_POST['txt_nhiemvu'] : $object['nhiemvu']?>"/>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <label for="exampleInputPassword1" class="form-label mt-2">Cơ quan thực hiện :</label>
                <input disabled style="width: 70%;" class="form-control" type="text" name="txt_coquan" value="<?php echo isset($_POST['txt_coquan']) ? $_POST['txt_coquan'] : $object['coquanthuchien']?>"/>
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
