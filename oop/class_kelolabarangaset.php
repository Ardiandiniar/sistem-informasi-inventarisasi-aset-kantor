<?php

require_once 'koneksi.php';

class kelolabarangaset{
    protected $db;

    public function __construct($con){
        $this->db= $con;
    }
}

class kendaraanbermotor1 extends kelolabarangaset{
    

    public function Insertkendaraanbermotor ($no_brg, $model){
        try{
            $insetkba_kb = $this->db->prepare("INSERT INTO kba_kb (no_brg,model) VALUES(:no_brg,:model)");

            $insetkba_kb->bindParam(":no_brg",$no_brg);
            $insetkba_kb->bindParam(":model",$model);
            $insetkba_kb->execute();
            

            return true;
        } 
        catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function Tampilkendaraanbermotor ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            
            echo'<option name="id" value='.$row['no_brg'].'>'.$row['model'].' ('.$row['no_brg'].')</option>';
        }
    }
    public function Tampilkbakendaraanbermotor ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            
            echo"
            <tr>
            <td> {$row['no_brg']} </td>
            <td> {$row['model']} </td>";?>
            
            <td> <a href='editkbakb.php?id=<?php echo "{$row['id']}"?>' class='btn btn-primary bi bi-pen'></a></td>
            </tr>
            <?php 
        }
    }

    public function Tampiltahunkendaraanbermotor ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            
            echo'<option name="id" value='.$row['tahun'].'>'.$row['tahun'].'</option>';
            
        }
    }

    public function EditkbaKB($id,$no_brg,$model){
       
        
        try{
             $data = [
                'no_brg'=>$no_brg,
                'model'=>$model,
                'id'=>$id
             ];

            $editkb = $this->db->prepare("UPDATE kba_kb SET no_brg=:no_brg,
                                                            model=:model
                                                            WHERE id = :id");
            $editkb->execute($data);
            return true;
            
        }

        catch (PDOException $e) 
        {
            echo $e->getMessage();
            return false;
            
        }
    }
    
}  

class furnitur1 extends kelolabarangaset{
    

    public function Insertfurnitur ($no_brg, $model){
        try{
            $insetkba_furnitur = $this->db->prepare("INSERT INTO kba_furnitur (no_brg,model) VALUES(:no_brg,:model)");

            $insetkba_furnitur->bindParam(":no_brg",$no_brg);
            $insetkba_furnitur->bindParam(":model",$model);
            $insetkba_furnitur->execute();
            

            return true;
        } 
        catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function Tampilfurnitur ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            
            echo'<option name="id" value='.$row['no_brg'].'>'.$row['model'].' ('.$row['no_brg'].')</option>';
        }
    }

    public function Tampilkbafurnitur ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            
            echo"
            <tr>
            <td> {$row['no_brg']} </td>
            <td> {$row['model']} </td>";?>
            
            <td> <a href='editkbafurnitur.php?id=<?php echo "{$row['id']}"?>' class='btn btn-primary bi bi-pen'></a></td>
            </tr>
            <?php 
        }
    }

    public function Tampiltahunfurnitur ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            
            echo'<option name="id" value='.$row['tahun'].'>'.$row['tahun'].'</option>';
            
        }
    }

    public function Editkbafurnitur($id,$no_brg,$model){
       
        
        try{
             $data = [
                'no_brg'=>$no_brg,
                'model'=>$model,
                'id'=>$id
             ];

            $editfurnitur = $this->db->prepare("UPDATE kba_furnitur SET no_brg=:no_brg,
                                                            model=:model
                                                            WHERE id = :id");
            $editfurnitur->execute($data);
            return true;
            
        }

        catch (PDOException $e) 
        {
            echo $e->getMessage();
            return false;
            
        }
    }
}  

class elektronik1 extends kelolabarangaset{
    

    public function Insertelektonik ($no_brg, $model){
        try{
            $insetkba_elektronik = $this->db->prepare("INSERT INTO kba_elektronik (no_brg,model) VALUES(:no_brg,:model)");

            $insetkba_elektronik->bindParam(":no_brg",$no_brg);
            $insetkba_elektronik->bindParam(":model",$model);
            $insetkba_elektronik->execute();
            

            return true;
        } 
        catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function Tampilelektronik ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            
            echo'<option name="id" value='.$row['no_brg'].'>'.$row['model'].' ('.$row['no_brg'].')</option>';
        }
    }
    public function Tampilkbaelektronik ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            
            echo"
            <tr>
            <td> {$row['no_brg']} </td>
            <td> {$row['model']} </td>";?>
            
            <td> <a href='editkbaelektronik.php?id=<?php echo "{$row['id']}"?>' class='btn btn-primary bi bi-pen'></a></td>
            </tr>
            <?php
        }
    }

    public function Tampiltahunelektronik ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            
            echo'<option name="id" value='.$row['tahun'].'>'.$row['tahun'].'</option>';
            
        }
    }

    public function Editkbaelektronik($id,$no_brg,$model){
       
        
        try{
             $data = [
                'no_brg'=>$no_brg,
                'model'=>$model,
                'id'=>$id
             ];

            $editelektronik = $this->db->prepare("UPDATE kba_elektronik SET no_brg=:no_brg,
                                                            model=:model
                                                            WHERE id = :id");
            $editelektronik->execute($data);
            return true;
            
        }

        catch (PDOException $e) 
        {
            echo $e->getMessage();
            return false;
            
        }
    }
}  


$kba_kb = new kendaraanbermotor1($con);
$kba_furnitur = new furnitur1($con);
$kba_elektronik = new elektronik1($con);


