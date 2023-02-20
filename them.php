<?php

session_start();
?>
<html>
    <body>
        <form action="" method="post">
        <label for="">name</label>
        <input type="text" name="tensp">
        <label for="">price</label>
        <input type="text" name="giasp">
        <label for="">Evaluate</label>
        <input type="text" name="dgsp">
        <label for="">img</label>
        <input type="text" name="anhsp">
        <input type="submit" name="subm" value="submit">
        <?php
        if(isset($_POST['subm'])){
        $name=$_POST['tensp'];
        $price=$_POST['giasp'];
        $Evaluate=$_POST['dgsp'];
        $img=$_POST['anhsp'];
        $n=0;
        if(isset($_SESSION['tc']))
            $n=count($_SESSION['tc']);
            $_SESSION['tc'][$n]['tensp']=$_POST['tensp'];
            $_SESSION['tc'][$n]['giasp']=$_POST['giasp'];
            $_SESSION['tc'][$n]['dgsp']=$_POST['dgsp'];
            $_SESSION['tc'][$n]['anhsp']=$_POST['anhsp'];
            header("Location:index.php");
        
        
            
    }
    


   
    ?>
        </form>
        
    </body>
  
</html>