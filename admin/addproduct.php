<?php

    $connection = mysqli_connect("localhost","root","","apdp");
    if(isset($_POST['btnsubmit'])){
        $filename = $_FILES['file123']['name'];
        $filepath = $_FILES['file123']['tmp_name'];
        move_uploaded_file($filepath,"uploads/".$filename);
        // $fileupload = "./uploads".$_FILES['file123']['name'];
        // $fileprocess = move_uploaded_file($_FILES['file123']['tmp_name'],$fileupload);

       $name= $_POST['txt1'];
       $price = $_POST['txt2'];
       $category = $_POST['txt3'];
       $Description = $_POST['txt4'];
       $q = mysqli_query($connection,"insert into tbl_product(pro_name,pro_price,cat_id,pro_photo,Description)value('{$name}','{$price}','{$category}','{$Description}','{$filename}')");
       if($q){
        echo "<script>alert('Record Added');</script>";
        echo "<script>window.location='display.php';</script>";
        exit();
       }
    }
?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            Name : <input type="text" name="txt1" /><br><br>
            Price : <input type="text" name="txt2" /><br><br>
            Description : <input type="text" name="txt4" /><br><br>
            Categoryid : 

          

            <?php
            $cq = mysqli_query($connection,"select * from tbl_category");
            echo "<select name=txt3>";
            echo "<option value=''>select</option>";
            while ($row = mysqli_fetch_array($cq)){
                echo "<option value='{$row['cat_id']}'>{$row['cat_name']}</option>";
            }
            echo "</select>";
            ?>

<br><br> Photo : <input type="file" name="file123" /><br><br>
                <input type="submit" name="btnsubmit" />

        </form>
    </body>
</html>