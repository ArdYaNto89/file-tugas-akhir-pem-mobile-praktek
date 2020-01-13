<?
require_once 'koneksi.php';
//$id = isset($_GET['id']) ? $_GET['id'] : '';
$nim = $_POST['id'] ;

if(!$nim){
    echo json_encode(array('message'=>'field empty.'));
}
else{
    $query = mysqli_query($con, "DELETE FROM member WHERE id= '$nim'");
if{
echo json_encode(array('message'=>' data member sukses deleted.'));
}
else{
    echo json_encode(array('message'=>'data member failed deleted.'));
}
}
?>
