<h1>Sửa Danh Sách Độc Giả</h1>
<?php
          $urlAdd =  "index.php?controller=list&action=index" ;
        ?>
         <a href="<?php echo $urlAdd?>">
            LIST
        </a> &nbsp
        <form method="post" action="">
    <br>
   MaDG
    <input type="text" bd_name="bd_id" value="" />
</br>
<br>
  HoVaTen
    <input type="text" bd_name="bd_name" value="" />
</br>
<br>
  GioiTinh
    <input type="text md-2" bd_name="bd_sex" value="" />
</br>
<br> 
   NamSinh
    <input type="text" bd_name="bd_age" value="" /> 
</br>

    
    <input type="submit" name="submit" value="Update" />
</form>