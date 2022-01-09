<?php
    //1.index.php laf trang mac dinh se chay dau tien
    //nhiem vu cua no trong bai toan nos chi don gian la phan tich xem nguoi dung dang muon gif der chuyen tiep cong viec toi chuc nang tuong ung
    //coi moji url cua ng dung co dang: http://localhost/project-mvc/index.php?controller=user&action=index
    //de toi xem anh muon doi tuong nao va thuc hien hanh dong gi(index, delete, insert, update)   
    //lay ra controller
    $controller = isset($_GET['controller'])? $_GET['controller']: 'list';//(phan tu ba ngooi)
    //lay ra action
    $action = isset($_GET['action'])? $_GET['action']: 'index';
    //truong hop dac biet la controller va action k xuat hien tren URL, nos mac dinh hien trang nguoi dung index
    //http://localhost/project-mvc/index.php
    $controller = ucfirst($controller);//url cta thiet ke luon co dag chu thuong
    //sang chu in hoa
    $fileController = $controller."Controller.php";//Tên tệp tin truy xuất
    $pathController = "controller/$fileController";//Đườcng dẫn đầy đủ đến tệp tin cần truy xuất

    if(!file_exists($pathController)){
        die("Trang bạn tìm không tồn tại");//nếu đoạn này xảy ra , chương trình dừng thực hiện
    }
    //nếu không, gộp tệp tin controller tương ứng vào đây
    require_once "$pathController";
    $classController = $controller."Controller";//xác định tên class trong controller đang định nghĩa

    $opject = new $classController();//tạo ra đối tượng tương ứng với class vừa xác định ở trên
    if(!method_exists($opject, $action)){
        die("Phương thức $action không tồn tại trong class $classController");//kiểm tra action có tồn tại không
    }
    //nếu có thì gọi action tương ứng tên phương thức
    $opject -> $action();

?>