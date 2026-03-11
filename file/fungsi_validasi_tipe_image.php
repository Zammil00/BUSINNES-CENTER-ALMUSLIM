<?php
 function cekTypeImageUpload($tipe_file){
	   $hasil = 0;  // kondisikan terlebih dahulu kalau image benar
	   $tipe  = $tipe_file;
	   if ($tipe != "foto/jpeg") {
		  $hasil = 1; // kondisi image salah
	   }
	   
	   return $hasil;
 }
?>
