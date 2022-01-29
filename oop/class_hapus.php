<?php

require_once 'koneksi.php';

class hapus {
    private $db;
    public function __construct($con){
        $this->db=$con;
    }

    public function hapusKB($no_brg){
	$delete = $this->db->prepare('DELETE FROM crudkb where id ='. $no_brg);
	$delete->execute();

	header("location:../tampilkb.php");
    }

    public function hapusfurnitur($no_brg){
        $delete = $this->db->prepare('DELETE FROM crudfurnitur where id ='. $no_brg);
        $delete->execute();
    
        header("location:../tampilfurnitur.php");
        }

    public function hapuselektronik($no_brg){
        $delete = $this->db->prepare('DELETE FROM crudelektronik where id ='. $no_brg);
        $delete->execute();
        
            header("location:../tampilelektronik.php");
            }
}
$hapus= new hapus($con);

if(isset($_GET['id_KB'])){
    $no_brg = $_GET['id_KB'];
    $hapus->hapusKB($no_brg);
}

else if(isset($_GET['id_furnitur'])) {
    $no_brg = $_GET['id_furnitur'];
    $hapus->hapusfurnitur($no_brg);
}

else if(isset($_GET['id_elektronik'])){
    $no_brg = $_GET['id_elektronik'];
    $hapus->hapuselektronik($no_brg);
}