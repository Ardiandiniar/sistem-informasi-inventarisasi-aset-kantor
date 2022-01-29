
    <script type="text/javascript">
    window.print()
    </script>
    
    <style type="text/css">
    #print {
        margin:auto;
        text-align:center;
        font-family:"Calibri", Courier, monospace;
        width:1200px;
        font-size:14px;
    }
    #print .title {
        margin:20px;
        text-align:right;
        font-family:"Calibri", Courier, monospace;
        font-size:12px;
    }
    #print span {
        text-align:center;
        font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;   
        font-size:10px;
    }
    #print table {
        border-collapse:collapse;
        width:100%;
        margin:18px;
    }
    #print .table1 {
        border-collapse:collapse;
        width:90%;
        text-align:center;
        margin:10px;
    }
    #print table hr {
        border:3px double #000;   
        
    }
    #print .ttd {
        float:right;
        width:250px;
        background-position:center;
        background-size:contain;
    }
    #print table th {
        color:#000;
        font-family:Verdana, Geneva, sans-serif;
        font-size:10px;
    }
    #logo{
        width:111px;
        height:90px;
        padding-top:10px;   
        margin-left:10px;
    }

    h1,h2,h3,h4{
        line-height:10px;
    }
    #print .camat {
        float:left;
        width:250px;
        background-position:center;
        background-size:contain;
    }
    </style>

    <title>Cetak laporan elektronik</title>
    <div id="print">
    <table class='table1'>
            <tr>
<td><img src='images/bekasi.jpg' height="150" width="150"></td>
                <td>

        <h2 style="font-size:32px; margin:20px">PEMERINTAHAN KABUPATEN BEKASI</h2>
        <h1 style="font-size:40px">KECAMATAN KEDUNG WARINGIN</h1>
        <h2 style="font-size:24px">Jl. Raya kedunggede No.10 DesaKedungWaringin</h2>
        <h3 style="font-size:30px; margin-top:10px" >KEDUNGWARINGIN-BEKASI 17540</h3>
    </td>
    </tr>
</table>
    
<table class='table'>   
<td><hr/></td>

</table>
<td>LAPORAN DATA BARANG INVENTARISASI ASET KANTOR</td>
<br>
<td><h3>LAPORAN DATA ELEKTRONIK</h3></td>
<tr>
<td>
<table border=1px; class='table' width="90%">
<tr>
<th >No.Barang</th>
<th>Model</th>
<th>Merk</th>
<th>Status</th>
<th>Tgl Input</th>
<th>Tahun Beli</th>
<th>Jumlah</th>
<th>Satuan Harga</th>
<th>Total Harga</th>
</tr>

<?php 

if(isset($_GET['tahun'])==''){
    require_once 'oop/class_laporan.php';
    $query2 = "SELECT * FROM crudelektronik ORDER BY id ASC";
    $cetak->cetakelektronik($query2);
}else{
    require_once 'oop/class_laporan.php';
    $query2 = "SELECT * FROM crudelektronik WHERE YEAR(th_beli)=".$_GET['tahun'];
    $cetak->cetakelektronik($query2);
}


?>

</table>
</tr>
</table>
</div>

<div id="print">
<table width="450" text-align="left" class="camat">
<tr>
<td width="100px" style="padding:20px 20px 20px 20px;" text-align="center">
<strong>Mengetahui,<br>Camat</strong>
      <br><br><br>
<strong><u><br>Drs. H. ASAN ASARI.</u><br>NIP:196704201994031009<br></strong><small></small>
</td>
</tr>
</table>
</div>

<div id="print">
<table width="450" text-align="right" class="ttd">
<tr>
<td width="100px" style="padding:20px 20px 20px 20px;" text-align="center">
<strong>Kedungwaringin,<?php 
    $tgl=date('d M Y');
    echo $tgl;
?> 
</strong>
<strong>Pengurus barang</strong>
      <br><br><br><br><br>
<strong><u>RD.DIAH SETIAWATI</u><br>NIP:1965111811986032005<br></strong><small></small>
</td>
</tr>
</table>
</div>


