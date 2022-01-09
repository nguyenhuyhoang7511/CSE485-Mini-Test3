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
        $queryInsert = "INSERT INTO blood_donor(`bd_name`,`bd_sex`,`bd_age`,`bd_bgroup`,`bd_reg_date`,`bd_phno`) 
        VALUES ('{$param['txt_name']}','{$param['txt_sex']}','{$param['txt_age']}','{$param['txt_bgroup']}','{$param['txt_reg_date']}','{$param['txt_phno']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);
        return $isInsert;
    }


    // HIỂN THỊ CHI TIẾT BẢN GHI
    public function details($id = null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM blood_donor WHERE id = $id";
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
        $querySelect = "SELECT * FROM blood_donor";
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
        $queryUpdate = "UPDATE blood_donor 
        SET 
        `bd_name` = '{$object['txt_name']}',
        `bd_sex` = '{$object['txt_sex']}', 
        `bd_age` = '{$object['txt_age']}',
        `bd_bgroup` = '{$object['txt_bgroup']}',
        `bd_reg_date` = '{$object['txt_reg_date']}',
        `bd_phno` = '{$object['txt_phno']}'
        WHERE `id` = {$object['id']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }

    public function delete($id = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM blood_donor WHERE id = $id";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }

    public function connectDb() {
        $connection = mysqli_connect(DB_HOST,
            DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;
    }

    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
}