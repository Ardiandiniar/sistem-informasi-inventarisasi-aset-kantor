<?php 

require_once 'koneksi.php';

 
class laporan {
    protected $db;

    public function __construct($con){
        $this->db= $con;
    }

    public function cetakKB($query){
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

    public function cetakfurnitur($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            ?>
                <tr>
                <td><?php echo "{$row['no_brg']}"; ?></td>
                <td><?php echo "{$row['model']}"; ?></td>
                <td><?php echo "{$row['merk']}"; ?></td>
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

    public function cetakelektronik($query){
        $query = $this->db->prepare($query);
        $query->execute();

        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            ?>
                <tr>
                <td><?php echo "{$row['no_brg']}"; ?></td>
                <td><?php echo "{$row['model']}"; ?></td>
                <td><?php echo "{$row['merk']}"; ?></td>
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

}
$cetak = new laporan($con);