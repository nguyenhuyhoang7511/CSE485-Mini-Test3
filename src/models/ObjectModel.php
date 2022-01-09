<?php
    // require_once 'src/config/database.php';
    require_once 'src/configs/database.php';
    class object_Model {
    public $id;
    public $bd_name;
    public $bd_sex;
    public $bd_age;
    public $bd_bgroup;
    public $bd_reg_date;
    public $bd_phno;
    

    // THÊM BẢN GHI MỚI
    public function insert($param = []) {
        $connection = $this->connectDb();
        //tạo và thực thi truy vấn
        $queryInsert = "INSERT INTO duan(`tenduan`,`namthuchien`,`linhvuc`,`nhiemvu`,`coquanthuchien`) 
        VALUES ('{$param['txt_tenduan']}','{$param['txt_namthuchien']}','{$param['txt_linhvuc']}','{$param['txt_nhiemvu']}','{$param['txt_coquan']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);
        return $isInsert;
    }


    // HIỂN THỊ CHI TIẾT BẢN GHI
    public function details($id = null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM duan WHERE maduan = $id";
        $results = mysqli_query($connection, $querySelect);
        $object = [];
        if (mysqli_num_rows($results) > 0) {
            $objects = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $object = $objects[0];
        }
        $this->closeDb($connection);

        return $object;
    }

    // HIỂN THỊ TẤT CẢ CÁC BẢN GHI
    public function index() {
        $connection = $this->connectDb();
        //truy vấn
        $querySelect = "SELECT * FROM duan";
        $results = mysqli_query($connection, $querySelect);
        $objects = [];
        if (mysqli_num_rows($results) > 0) {
            $objects = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);

        return $objects;
    }

    public function update($object = []) 
    {

        $connection = $this->connectDb();
        $queryUpdate = "UPDATE duan 
        SET 
        `tenduan` = '{$object['txt_tenduan']}',
        `namthuchien` = '{$object['txt_namthuchien']}', 
        `linhvuc` = '{$object['txt_linhvuc']}',
        `nhiemvu` = '{$object['txt_nhiemvu']}',
        `coquanthuchien` = '{$object['txt_coquan']}'
        WHERE `maduan` = {$object['maduan']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }

    public function delete($id = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM duan WHERE maduan  = $id ";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }

    public function connectDb() {
        $connection = mysqli_connect(DB_HOST,
            DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            header("Location: error.php?controller=object&action=index");
        }

        return $connection;
    }

    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
}