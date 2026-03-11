<?php include_once("include\conecsi.inc");
if (isset($_POST['data_barang'])) {
	    $data_barang=$_POST['data_barang'];
	    $data=mysql_query("SELECT nm_barang FROM produk WHERE kd_barang='".$data_barang."'",$connect);
	    $row=mysql_fetch_array($data);
	    echo $row['nm_barang'];
		
	}
?>	
