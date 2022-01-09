<?php
require_once 'model/List.php';
class ListController{
    //điều khiển về mặt logic giữa model và view
    function index(){
       //tôi sẽ cần gọi ListModel để truy vấn dữ liệu
        $listModel = new ListModel();
        $list= $listModel -> getAllUsers();
        //sau khi truy vấn được dữ liệu tôi sẽ đổ ra listView/index tương ứng
        require_once'view/List/index.php';
    }
  
    function add(){
        $listModel = new ListModel();
        $list= $listModel -> getAllUsers();
        //sau khi truy vấn được dữ liệu tôi sẽ đổ ra listView/add tương ứng
        require_once'view/List/add.php';
    }
    function edit(){
        $listModel = new ListModel();
        $list= $listModel -> getAllUsers();
        //sau khi truy vấn được dữ liệu tôi sẽ đổ ra listView/edit tương ứng
        require_once'view/List/edit.php';
    }
    }
    function delete(){
       
    }
    

