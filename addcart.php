<!-- file này bỏ -->


<?php
if(isset($_POST['submit']))
{
    $idsp = $_POST["idsp"];
    $sl;
        if(isset($_SESSION['cart'][$idsp]))
        {
            $sl = $_SESSION['cart'][$idsp] +1;
        }
        else
        {
            $sl=1;
        }
        $_SESSION['cart'][$idsp] = $sl;
        echo "string";

}
?>	