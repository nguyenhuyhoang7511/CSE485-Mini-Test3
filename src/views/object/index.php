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
            <h1 class="text-center mt-5 mb-5 text-uppercase  ">HỆ THỐNG QUẢN LÝ DỰ ÁN TRUNG TÂM KTTV quốc gia</h1>
            <a style="float: left;" type="button" class="text-start  btn btn-success mb-3 " href="index.php?controller=object&action=add"><i class="bi bi-capslock"></i> Thêm </a>

                    <table class="table table-success table-striped table-bordered"  >
                        <tr class="table-dark">
                            <th class="text-center">ID</th>
                            <th>Tên dự án</th>
                            <th>Năm thực hiện</th>
                            <th>Lĩnh vực</th>
                            <th>Nhiệm vụ</th>
                            <th>Cơ quan thực hiện</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                            <th>Chi tiết</th>

                        </tr>
                        <?php if (!empty($objects)): ?>
                            <?php foreach ($objects AS $object) : ?>
                                <tr>
                                    <td><?php echo $object['maduan'] ?></td>
                                    <td><?php echo $object['tenduan'] ?></td>
                                    <td><?php echo $object['namthuchien'] ?></td>
                                    <td><?php echo $object['linhvuc'] ?></td>
                                    <td><?php echo $object['nhiemvu'] ?></td>
                                    <td><?php echo $object['coquanthuchien'] ?></td>

                                    <!-- <td> -->
                                        <?php
                                        //khai báo 3 url xem, sửa, xóa
                                        $urlDetail =
                                            "index.php?controller=object&action=details&maduan=" . $object['maduan'];
                                        $urlEdit =
                                            "index.php?controller=object&action=edit&maduan=" . $object['maduan'];
                                        $urlDelete =
                                            "index.php?controller=object&action=delete&maduan=" . $object['maduan'];
                                        ?>
                                                                                                                      
                                        <td>
                                            <a type="button" class="btn btn-success" href="<?php echo $urlEdit?>"><i class="bi bi-pencil-square"></i></a> &nbsp;
                                        </td>
                                        <td>
                                            <a type="button" class="btn btn-success" onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                                            href="<?php echo $urlDelete?>">
                                            <i class="bi bi-trash"></i>                                            
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