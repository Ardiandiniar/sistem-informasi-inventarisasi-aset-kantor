<?php

require_once 'koneksi.php';

//class  
class KendaraanBermotor {
    protected $db;

    public function __construct($con){
        $this->db= $con;
    }

    public function InsertKB ($idmodel,$no_brg,$model, $merk, $no_mesin, $status, $tgl, $th_beli, $jumlah, $stn_hrg, $ttl_hrg){
        
        try{
            $insetkb = $this->db->prepare("INSERT INTO crudkb (id_kba_kb,no_brg,model,merk,no_mesin,status,tgl_input,th_beli,jumlah,stn_hrg,ttl_hrg) VALUES(:id_kba_kb,:no_brg,:model,:merk,:no_mesin,:status,:tgl_input, :th_beli,:jumlah,:stn_hrg,:ttl_hrg)");

            $insetkb->bindParam(":id_kba_kb",$idmodel);
            $insetkb->bindParam(":no_brg",$no_brg);
            $insetkb->bindParam(":model",$model);
            $insetkb->bindParam(":merk",$merk);
            $insetkb->bindParam(":no_mesin",$no_mesin);
            $insetkb->bindParam(":status",$status);
            $insetkb->bindParam(":tgl_input",$tgl);
            $insetkb->bindParam(":th_beli",$th_beli);
            $insetkb->bindParam(":jumlah",$jumlah);
            $insetkb->bindParam(":stn_hrg",$stn_hrg);
            $insetkb->bindParam(":ttl_hrg",$ttl_hrg);
            $insetkb->execute();

            return true;
        } 
        catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function TampilKB ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            ?>
                <tr>
                <td><?php echo "{$row['no_brg']}"; ?></td>
                <td><?php echo "{$row['model']}"; ?></td>
                <td><?php echo "{$row['merk']}"; ?></td>
                <td><?php echo "{$row['no_mesin']}"; ?></td>
                <td><?php echo "{$row['status']}"; ?></td>
                <td><?php echo "{$row['tgl_input']}"; ?></td>
                <td><?php echo "{$row['th_beli']}"; ?></td>
                <td><?php echo "{$row['jumlah']}"; ?></td>
                <td><?php echo "{$row['stn_hrg']}"; ?></td>
                <td><?php echo "{$row['ttl_hrg']}"; ?></td>
                <td>
                    <a href="oop/class_hapus.php?id_KB='<?php echo $row['id'] ?>'" onclick='return confirm("apakah anda ingin menghapus?");' class='btn btn-danger'><span class='bi bi-trash'></span></a>
                </td>
                <td> 
                    <a href="editkb.php?id=<?php echo $row['id'] ?>" class='btn btn-primary'><span class='bi bi-pen'></span></a>
                </td>

                </tr>
            <?php
        }
    }

    public function TampiladminKB ($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            ?>
                <tr>
                <td><?php echo "{$row['no_brg']}"; ?></td>
                <td><?php echo "{$row['model']}"; ?></td>
                <td><?php echo "{$row['merk']}"; ?></td>
                <td><?php echo "{$row['no_mesin']}"; ?></td>
                <td><?php echo "{$row['status']}"; ?></td>
                <td><?php echo "{$row['tgl_input']}"; ?></td>
                <td><?php echo "{$row['th_beli']}"; ?></td>
                <td><?php echo "{$row['jumlah']}"; ?></td>
                <td><?php echo "{$row['stn_hrg']}"; ?></td>
                <td><?php echo "{$row['ttl_hrg']}"; ?></td>
                </tr>
            <?php
        }
    }

    public function EditKB($id,$no_brg, $model, $merk, $no_mesin, $status, $tgl, $th_beli, $jumlah, $stn_hrg){
       
        $ttl_hrg = $jumlah * $stn_hrg;
        try{
             $data = [
                'no_brg'=>$no_brg,
                'model'=>$model,
                'merk'=>$merk,
                'no_mesin'=>$no_mesin,
                'status'=>$status,
                'tgl_input'=>$tgl,
                'th_beli'=>$th_beli,
                'jumlah'=>$jumlah,
                'stn_hrg'=>$stn_hrg,
                'ttl_hrg'=>$ttl_hrg,
                'id'=>$id
             ];

            $editkb = $this->db->prepare("UPDATE crudkb SET no_brg=:no_brg,
                                                            model=:model,
                                                            merk=:merk,
                                                            no_mesin=:no_mesin,
                                                            status=:status,
                                                            tgl_input=:tgl_input,
                                                            th_beli=:th_beli,
                                                            jumlah=:jumlah,
                                                            stn_hrg=:stn_hrg,
                                                            ttl_hrg=:ttl_hrg
                                                            WHERE id = :id");
            if($editkb->execute($data)){
                echo "<script>windows.location.href='tampilkb.php?update=update';</script>";
                return true;
                }else{
            echo "<script>windows.location.href='editkb.php?gagal_update=gagal_update';</script>";
                return false;
                }
        
            
        }

        catch (PDOException $e) 
        {
            echo $e->getMessage();
            return false;
            
        }
    }

    
}

$aset = new KendaraanBermotor($con);

