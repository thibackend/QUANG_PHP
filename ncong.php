<html>
    <body>
        <form action="" method="post">
            <label >input number:</label>
            <input type="text" name="nb">
            <input type="submit" value="check">
        </form>
        <?php
        if(isset($_POST['nb'])){
            echo "<script>alert('da nhan click')</script> ";
            $nb1=$_POST['nb'];
            $sum=0;
            while($nb1>0){
                $sum=$sum +($nb1%10);
                $nb1=$nb1/10;
            }
            echo "result:$sum";
        }
        ?>
    </body>
</html>