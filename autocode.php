<?php 
$con = mysqli_connect("localhost", "root", "", "db_siiak");
$model = $_GET['id'];

$query = mysqli_query($con, "SELECT * FROM kba_kb where model = '$model'");

$data = mysqli_fetch_array($query);

$data_kb = array(
    'no_brg' =>  $data['no_brg']
);

echo json_encode($data_kb);