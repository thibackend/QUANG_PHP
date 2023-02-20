
<?php
session_start();
?>
<html>
    <style>
        img{
            height:50px;
            width:50px;
        }
    </style>

    <body>
        <form action="" method="post">
            <body >
                <table border <1px solid black>
                <tr>
                    <td>name</td>
                    <td>price</td>
                    <td>Evaluate</td>
                    <td> img</td>
                </tr> 
                <?php
            if(isset($_SESSION['tc'])){
                $n=count($_SESSION['tc']);
                for ($i=0;$i<$n;$i++){
            ?>
            <tr>
                <td><?php echo $_SESSION['tc'][$i]['tensp'];?> </td>
                <td><?php echo $_SESSION['tc'][$i]['giasp'];?> </td>
                <td><?php echo $_SESSION['tc'][$i]['dgsp'];?> </td>
                <td><img src="<?php echo $_SESSION['tc'][$i]['anhsp'];?>"></td>
            </tr>

            <?php
            }
            }
            ?>
                </table>
                <a href="them.php">
                    add
                </a>
            </body>
           

        </form>
    </body>
</html>