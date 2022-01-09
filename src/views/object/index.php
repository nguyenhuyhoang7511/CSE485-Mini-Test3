<?php
// include './views/template/header.php';
include 'src/views/template/header.php';
// include 'src/views/tem'
//file hiển thị thông báo lỗi
require_once 'src/views/commons/message.php';
?>
<div class="container-fluid">
    <div class="form-row text-center">
        <div class="col-12">
            <h1 class="text-center mt-5  text-uppercase  ">Danh sách những người hiến máu</h1>
            <a style="float: left;" class="text-start  btn btn-success mb-3  " href="index.php?controller=object&action=add">Thêm người </a>

                    <table class="table table-success table-striped table-bordered"  >
                        <tr class="table-dark">
                            <th class="text-center">ID</th>
                            <th>Họ Tên</th>
                            <th>Giới tính</th>
                            <th>Tuổi</th>
                            <th>Nhóm máu</th>
                            <th>Ngày đăng kí</th>
                            <th>Số ĐT</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                            <th>Chi tiết</th>

                        </tr>
                        <?php if (!empty($objects)): ?>
                            <?php foreach ($objects AS $object) : ?>
                                <tr>
                                    <td><?php echo $object['id'] ?></td>
                                    <td><?php echo $object['bd_name'] ?></td>
                                    <td><?php echo $object['bd_sex'] ?></td>
                                    <td><?php echo $object['bd_age'] ?></td>
                                    <td><?php echo $object['bd_bgroup'] ?></td>
                                    <td><?php echo $object['bd_reg_date'] ?></td>
                                    <td><?php echo '+84'.$object['bd_phno'] ?></td>

                                    <!-- <td> -->
                                        <?php
                                        //khai báo 3 url xem, sửa, xóa
                                        $urlDetail =
                                            "index.php?controller=object&action=details&id=" . $object['id'];
                                        $urlEdit =
                                            "index.php?controller=object&action=edit&id=" . $object['id'];
                                        $urlDelete =
                                            "index.php?controller=object&action=delete&id=" . $object['id'];
                                        ?>
                                                                                                                      
                                        <td>
                                            <a type="button" class="btn btn-success" href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                                        </td>
                                        <td>
                                            <a type="button" class="btn btn-success" onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                                            href="<?php echo $urlDelete?>">
                                                Xóa                                            
                                            </a>
                                        </td>
                                        <td> 
                                        <a type="button" class="btn btn-success" href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp;
                                        </td>

                                    <!-- </td> -->
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="2">KHông có dữ liệu</td>
                            </tr>
                        <?php endif; ?>
                    </table>

        </div>
    </div>
</div>
<?php
    include 'src/views/template/footer.php';
?>