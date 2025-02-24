<?php
session_start();
$connection  = mysqli_connect("localhost","root","","apdp");

if(!isset($_SESSION['uid']))
{
    header("location:login.php");
}
if($_POST)
{
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    $txt4 = $_POST['txt4'];
    $date = date('d-m-Y');
    $status = "confirm";
    $uid = $_SESSION['uid'];

    // Shipping order
    $orderq = mysqli_query($connection,"insert into tbl_order(order_date,order_status,user_id,shipping_name,shipping_mobile,shipping_address,payment_mode) 
    values('{$date}','{$status}','{$uid}','{$txt1}','{$txt2}','{$txt3}','{$txt4}')");
    // inserted recodr id
    $orderid= mysqli_insert_id($connection);
    
    // order Details
    // Fetch cart data"
    $cartq = mysqli_query($connection,"select * from tbl_cart where user_id='{$uid}'");
    while ($cartdata = mysqli_fetch_array($cartq))
    {
        // cart  data
        $pid = $cartdata['product_id'];
        $qty = $cartdata['product_qty'];
        // product data
        $pq = mysqli_query($connection,"select * from tbl_product where pro_id='{$pid}'");
        $pdata = mysqli_fetch_array($pq);
        $price = $pdata['pro_price'];
        // order detail add
        $orderdetailq = mysqli_query($connection,"insert into tbl_order_details(order_id,product_id,product_qty,product_price) 
        values('{$orderid}','{$pid}','{$qty}','{$price}')");

        // cart remove
        mysqli_query($connection,"delete from tbl_cart where cart_id='{$cartdata['cart_id']}'");
    }
    header("location:thanks.php");
}
?>

<form method="post">
    <h2>Shipping</h2>
    Name : <input type="text" name="txt1" required/><br/>
    <br/>mobile : <input type="text" name="txt2" required/><br/>
    <br/>Address : <textarea cols="21" name="txt3" required></textarea>

    <h2>Payment Mode</h2>
    Cash : <input type="radio" name="txt4" value="Cash" required/>cash
    <input type="radio" name="txt4" value="online" required/>online
    <br/>
    <img width="100" src="images\istockphoto-1347277582-612x612.jpg" />
    <input type="submit" />
</form> 