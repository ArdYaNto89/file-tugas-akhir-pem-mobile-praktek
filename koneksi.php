<?php   
$con = mysqli_connect("localhost", "root", "","adminmember");
if (mysqli_connect_error())
{
    echo "koneksi gagal" . mysqli_connect_error();
}
?>