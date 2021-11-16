<?php
    include '../Database.php';
    include '../MODEL/Studio_model.php';

class Studio {
    public $model;

    function __construct(){
    $db = new Database();
    $conn = $db->DBConnect();
    $this->model = new Studio_model($conn);   

    }

    function index(){
   
    $hasil = $this->model->tampil_data();

    return $hasil;
    }
}    
?>