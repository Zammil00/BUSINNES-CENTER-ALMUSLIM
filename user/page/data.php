<?php include_once("include\conecsi.inc");
if (isset($_POST['data_harga'])) {
	    $data_harga=$_POST['data_harga'];
	    $data=mysql_query("SELECT hrg_barang FROM produk WHERE nm_barang='".$data_harga."'",$connect);
	    $row=mysql_fetch_array($data);
	    echo $row['hrg_barang'];
		
	}
?>	
