<?
require_once 'koneksi.php';
//$id = isset($_GET['id']) ? $_GET['id'] : '';
$nim= isset($_POST['id']) ?$_POST['id'] : '';
$namasiswa= isset($_POST['nama']) $_POST['nama'] : '';
$alamatsiswa= isset($_POST['alamat']) $_POST['alamat']: '';
$pass=isset($_POST['password']) ?$_POST['password']:'';
if(!$namasiswa| $alamatsiswa|$pass){
    echo json_encode(array('message'=>'field is empty'));
}
else{
    $query = mysqli_querry($con,"UPDATE member SET nama='$namasiswa',alamat='$alamatsiswa'WHERE id= '$nimm'");
    if($query){
        echo json_encode(array('message'=>' data member sukses update.'));
    }
    else{
        echo json_encode(array('message'=>' data member failed update.'));
    }
}
?>