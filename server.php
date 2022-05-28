<?php 

include __DIR__.'./database.php';
// var_dump($dischi);
$filterArray = [];
if(isset($_GET['genre'])){
    foreach($dischi as $value){
        if($value['genre'] == $_GET['genre']){
            $filterArray[] = $value;
        }
    }
}else {
    $filterArray = $dischi;
}
header('Content-Type: application/json');
echo json_encode($filterArray);
?>