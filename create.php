<?php
include'koneksi.php';
//$id = isset($_GET['id']) ? $_GET['id'] : '';
$namasiswa= isset($_POST['nama']) ?$_POST['nama']:'';
$alamatsiswa= isset($_POST['alamat']) ?$_POST['alamat']:'';
$pass=isset($_POST['password']) ?$_POST['password']:'';
if(!$namasiswa||!$alamatsiswa||!$pass){
    echo json_encode(array('message'=>'required failed is empty'));
}
else{
    $query = mysqli_query($con,"INSERT INTO member VALUES('','$namasiswa','$alamatsiswa','$pass')");
    if($query){
        echo json_encode(array('message'=>'data member berhasil.'));
    }
    else{
        echo json_encode(array('message'=>'data member gagal.'));
    }
}
?>