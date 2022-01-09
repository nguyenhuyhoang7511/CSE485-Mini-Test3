<?php
// require_once 'src/models/Book.php';
require_once './src/models/ObjectModel.php';
class ObjectController {
    /**
     * Liệt kê các sách đang có trên hệ thống
     */
    public function index() {
        //gọi view để hiển thị dữ liệu
        //gọi view thực chất là nhúng file view vào
        //gọi file luôn phải nhớ là đứng tại
//        vị trí file index gốc của ứng dụng
        $object = new object_Model();
        $objects = $object->index();
        // require_once './src/views/objects/index.php';
        require_once 'src/views/object/index.php';
    }

    public function add() {
        $error = '';
        //xử lý submit form
        if (isset($_POST['submit'])) {
            $bd_name = $_POST['txt_name'];
            $bd_sex = $_POST['txt_sex'];
            $bd_age = $_POST['txt_age'];
            $bd_bgroup = $_POST['txt_bgroup'];
            $bd_reg_date = $_POST['txt_reg_date'];
            $bd_phno = $_POST['txt_phno'];
            //xử lý validate, nếu mà để trống tên sách
//            thì báo lỗi và không cho submit form
            if (empty($bd_name)) {
                $error = "Name không được để trống";
            }
            else {
                //gọi model để insert dữ liệu vào database
                $object = new object_Model();
                //gọi phương thức để insert dữ liệu
                //nên tạo 1 mảng tạm để lưu thông tin của
//                đối tượng dựa theo cấu trúc bảng
                $objectArr = [
                    'txt_name' => $bd_name,
                    'txt_sex' => $bd_sex,
                    'txt_age' => $bd_age,
                    'txt_bgroup' => $bd_bgroup,
                    'txt_reg_date' => $bd_reg_date,
                    'txt_phno' => $bd_phno,
                ];
                $isInsert = $object->insert($objectArr);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                }
                else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
                header("Location: index.php?controller=object&action=index");
                exit();
            }
        }
        //gọi view
        // require_once 'src/views/objects/add.php';
        require_once 'src/views/object/add.php';
    }

    public function edit() {
        //lấy ra thông tin sách dựa theo id đã gắn trên url
        //xử lý validate cho trường hợp id truyền lên không hợp lệ
        if (!isset($_GET['id'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=object&action=index");
            return;
        }
        if (!is_numeric($_GET['id'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=object&action=index");
            return;
        }
        $id = $_GET['id'];
        //gọi model để lấy ra đối tượng sách theo id
        $objectModel = new object_Model();
        $object = $objectModel->details($id);

        //xử lý submit form, lặp lại thao tác khi submit lúc thêm mới
        $error = '';
        if (isset($_POST['submit'])) {
            $txt_name = $_POST['txt_name'];
            $txt_sex = $_POST['txt_sex'];
            $txt_age = $_POST['txt_age'];
            $txt_bgroup = $_POST['txt_bgroup'];
            $txt_reg_date = $_POST['txt_reg_date'];
            $txt_phno = $_POST['txt_phno'];
            //check validate dữ liệu
            if (empty($txt_name)) {
                $error = "Name không được để trống";
            }
            else {
                //xử lý update dữ liệu vào hệ thống
                $objectModel = new object_Model();
                $objectArr = [
                    'id' => $id,
                    'txt_name' => $txt_name,
                    'txt_sex' => $txt_sex,
                    'txt_age' => $txt_age,
                    'txt_bgroup' => $txt_bgroup,
                    'txt_reg_date' => $txt_reg_date,
                    'txt_phno' => $txt_phno
                ];
                $isUpdate = $objectModel->update($objectArr);
                if ($isUpdate) {
                    $_SESSION['success'] = "Update bản ghi #$id thành công";
                }
                else {
                    $_SESSION['error'] = "Update bản ghi #$id thất bại";
                }
                header("Location: index.php?controller=object&action=index");
                exit();
            }
        }
        //truyền ra view
        // require_once 'src/views/objects/edit.php';
        require_once 'src/views/object/edit.php';
    }

    public function details() {
        //lấy ra thông tin sách dựa theo id đã gắn trên url
        //xử lý validate cho trường hợp id truyền lên không hợp lệ
        if (!isset($_GET['id'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=object&action=index");
            return;
        }
        if (!is_numeric($_GET['id'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=object&action=index");
            return;
        }
        $id = $_GET['id'];
        //gọi model để lấy ra đối tượng sách theo id
        $objectModel = new object_Model();
        $object = $objectModel->details($id);

        //xử lý submit form, lặp lại thao tác khi submit lúc thêm mới
        $error = '';
        if (isset($_POST['submit'])) {
            $txt_name = $_POST['txt_name'];
            $txt_sex = $_POST['txt_sex'];
            $txt_age = $_POST['txt_age'];
            $txt_bgroup = $_POST['txt_bgroup'];
            $txt_reg_date = $_POST['txt_reg_date'];
            $txt_phno = $_POST['txt_phno'];
            //check validate dữ liệu
            if (empty($txt_name)) {
                $error = "Name không được để trống";
            }
            else {
                //xử lý update dữ liệu vào hệ thống
                $objectModel = new object_Model();
                $objectArr = [
                    'id' => $id,
                    'txt_name' => $txt_name,
                    'txt_sex' => $txt_sex,
                    'txt_age' => $txt_age,
                    'txt_bgroup' => $txt_bgroup,
                    'txt_reg_date' => $txt_reg_date,
                    'txt_phno' => $txt_phno
                ];
                $isUpdate = $objectModel->details($objectArr);
                if ($isUpdate) {
                    $_SESSION['success'] = "Update bản ghi #$id thành công";
                }
                else {
                    $_SESSION['error'] = "Update bản ghi #$id thất bại";
                }
                header("Location: index.php?controller=object&action=index");
                exit();
            }
        }
        //truyền ra view
        // require_once 'src/views/objects/details.php';
        require_once 'src/views/object/details.php';
    }


    public function delete() {
        //url trên trình dueyjet sẽ có dạng
//        ?controller=object&action=delete&id=1
        //bắt id từ trình duyêtj
        $id = $_GET['id'];
        if (!is_numeric($id)) {
            // header("Location: index.php?controller=object&action=index");
            // exit();
        }

        $object = new object_Model();
        $isDelete = $object->delete($id);

        if ($isDelete) {
            //chuyển hướng về trang liệt kê danh sách
            //tạo session thông báo mesage
            $_SESSION['success'] = "Xóa bản ghi thứ $id thành công";
        }
        else {
            //báo lỗi
            $_SESSION['error'] = "Xóa bản ghi thứ $id thất bại";
        }
        header("Location: index.php?controller=object&action=index");
        exit();
    }
}