<?php
    // include './views/template/header.php';
    include './src/views/template/header.php';
?>
<div style="color: red">
    <?php echo $error; ?>
</div>
<div class="container" style="width: 40%;" >
<h3 class="text-uppercase">Thêm Dự Án Mới</h3>
<form action="" method="post" class="border border-secondary mt-5" >

    <div class="container-form m-5">
        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputEmail1" class="form-label">Tên dự án :</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_tenduan" value="" />
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Thời gian :</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_namthuchien" value="" />
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Lĩnh Vực :</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_linhvuc" value="" />

        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Nhiệm vụ:</label>        
            <input style="width: 70%;" class="form-control" type="text" name="txt_nhiemvu" value="" />

        </div>

        <div class="mb-3 d-flex justify-content-between">
            <label for="exampleInputPassword1" class="form-label">Cơ quan thực hiện :</label>
            <input style="width: 70%;" class="form-control" type="text" name="txt_coquan" value="" />
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
