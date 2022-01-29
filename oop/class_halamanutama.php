<?php
require_once 'koneksi.php';

class HalamanUtama{
    protected $db;

    public function __construct($con){
        $this->db= $con;
    }

    public function diagramKB($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            $total= $row['totalkb'];
            echo $total;
        }
    }

    public function diagramfurnitur($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            $total= $row['totalfurnitur'];
            echo $total;
        }
    }

    public function diagramelektronik($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            $total=$row['totalelektronik'];
            echo $total;
        }
    }


}

$halamanUtama = new HalamanUtama($con);