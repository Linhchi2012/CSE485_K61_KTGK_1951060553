<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active " aria-current="page" href="#">List</a>
  </li>
 
</ul>


<table class="table">
  <thead>
  <tr>
         <th scope="col">Mã Độc Giả</th>
         <th scope="col">Họ và tên</th>
         <th scope="col">Giói tính</th>
         <th scope="col">Năm sinh</th>
         <th scope="col">Nghề nghiệp</th>
         <th scope="col">Ngày cấp thẻ</th>
         <th scope="col">Ngày hết hạn</th>
         <th scope="col">Địa chỉ</th>
    </tr>
  </thead>
  <tbody>
      <?php

        foreach($list as $list){


      ?>
      
    <tr>
      <th scope="row"><?php  echo "<p> {$list ['madg']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$list ['hovaten']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$list ['gioitinh']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$list ['namsinh']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$list ['nghenghiep']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$list ['ngaycapthe']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$list ['ngayhethan']}</p>"; ?></th>
      <th scope="row"><?php  echo "<p> {$list ['diachi']}</p>"; ?></th>
    </tr>
       <?php }?>
       <?php
          $urlAdd =  "index.php?controller=list&action=add&id=" . $list['madg'];
      ?>
        <a href="<?php echo $urlAdd?>">ADD</a> &nbsp
        <?php
          $urlAdd =  "index.php?controller=list&action=edit&id=" . $list['madg'];
        ?>
         <a href="<?php echo $urlAdd?>">EDIT</a> &nbsp
         <?php
          $urlAdd =  "index.php?controller=list&action=delete&id". $list['madg'] ;
        ?>
         <a href="<?php echo $urlAdd?>">
            DELETE
        </a> &nbsp
              
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

