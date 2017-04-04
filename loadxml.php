<?php
include "koneksi.php";
if( !$xml = simplexml_load_file('perhotelan.xml')){
	echo "load XML failed !";
} else {
	echo '<h1>This is the Data</h1>';
		foreach ($xml as $perhotelan) {
			$nama = $perhotelan->nama;
			$harga = $perhotelan->harga;
			$tipe = $perhotelan->tipe;
			$jalan = $perhotelan->alamat->jalan;
			$nomor = $perhotelan->alamat->nomor;
			$bintang = $perhotelan->bintang;
			$vasilitas = $perhotelan->vasilitas;
			$namapml = $perhotelan->pemilik->namapml;
			$nohp = $perhotelan->pemilik->nohp;
			$email = $perhotelan->pemilik->email;

			echo "Nama Hotel : ".$nama."<br />";
			echo "Harga : ".$harga."<br />";
			echo "Tipe : ".$tipe."<br />";
			echo "Jalan : ".$jalan."<br />";
			echo "Nomor : ".$nomor."<br />";
			echo "Bintang : ".$bintang."<br />";
			echo "Vasilitas : ".$vasilitas."<br />";
			echo "Nama Pelimik : ".$namapml."<br />";
			echo "No Hp : ".$nohp."<br />";
			echo "Email : ".$email."<br />";
			echo "<br>";

			
			$result = mysql_query("INSERT INTO identitas VALUES('','$nama','$harga','$tipe','$jalan $nomor','$bintang','$vasilitas','$namapml $nohp $email')");
		}
			if ($result){
				echo '<h2>Selamat Data Berhasil Disimpan</h2>';
			} else {
				echo '<h2>Gagal Menyimpan Ke Databases</h2>'.mysql_error();
			}
}
?>