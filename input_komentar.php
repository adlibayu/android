<?php
include "koneksi.php";

error_reporting(0);
ini_set('display_errors', '0');

$nama = $_POST['nama'];
$instansi = $_POST['instansi'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];

if ($nama == '' || $instansi == '' || $hp == '' || $email == '' || $komentar == '')

{ $response_array['status'] = 'isi_data';}

else if($nama != '' && $instansi !='' && $hp != '' && $email != '' && $komentar != '')
{

$sql = "INSERT INTO komentar SET nama='$nama',
								instansi ='$instansi',
								hp = '$hp',
								email ='$email',
								komen = '$komentar' ";

			$hasil = mysql_query($mysqli,$sql);

			if($hasil){
				$response_array['status'] = 'sukses';
			}	
			else{
				$response_array['status'] = 'gagal';
			}
}
header('Content-type: application/json');
echo json_encode($response_array);
?>