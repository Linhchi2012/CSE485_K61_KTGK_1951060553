<?php
require_once 'config/database.php';
    class ListModel{
        public $madg;
        public $hovaten;
        public $gioitinh;
        public $namsinh;
        public $nghenghiep;
        public $ngaycapthe;
        public $ngayhethan;
        public $diachi;
     
        //định nghĩa các phương thức để sau này nhận các thao tác tương ứng với các action
        function getAllUsers(){
            //b1: koi tao ket noi
            $conn = $this -> connectDb();
            //b2:dinh nghia va thuc hien truy van
            $sql = "SELECT * from DocGia";
            $result = mysqli_query($conn,$sql);
            //toi khai bao bien luu ket qua tra ve
            $arr_list = [];
            //b3: xu ly va (k phai show ket qua) tra ve ket qua
            if(mysqli_num_rows($result)>0){
                //lay tat ca dung musqli_fetch_all
                $arr_list = mysqli_fetch_all($result, MYSQLI_ASSOC);
            }
            return $arr_list;
        }
            public function insert($param = []) {
                $connection = $this->connectDb();
                //tạo và thực thi truy vấn
                $queryInsert = "INSERT INTO DocGia(`name`) 
                VALUES ('{$param['name']}')";
                $isInsert = mysqli_query($connection, $queryInsert);
                $this->closeDb($connection);
        
                return $isInsert;
            }
        
            public function getBookById($id = null) {
                $connection = $this->connectDb();
                $querySelect = "SELECT * FROM DocGia WHERE madg =$id";
                $results = mysqli_query($connection, $querySelect);
                $listModel= [];
                if (mysqli_num_rows($results) > 0) {
                    $listModel = mysqli_fetch_all($results, MYSQLI_ASSOC);
                    $listModel = $listModel[0];
                }
                $this->closeDb($connection);
        
                return $listModel;
            }
        
            /**
             * Truy vấn lấy ra tất cả sách trong CSDL
             */
            public function index() {
                $connection = $this->connectDb();
                //truy vấn
                $querySelect = "SELECT * FROM DocGia";
                $results = mysqli_query($connection, $querySelect);
                $listModel = [];
                if (mysqli_num_rows($results) > 0) {
                    $listModel = mysqli_fetch_all($results, MYSQLI_ASSOC);
                }
                $this->closeDb($connection);
        
                return $listModel;
            }
            public function add($list = []) {
                $connection = $this->connectDb();
                $queryUpdate = "UPDATE DocGia SET `name` = '{$list['name']}' WHERE `id` = {$list['id']}";
                $isUpdate = mysqli_query($connection, $queryUpdate);
                $this->closeDb($connection);
        
                return $isUpdate;
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


?>