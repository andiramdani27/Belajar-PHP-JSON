<?php

// panggil data json
$sumber = 'data_kendaraan.json';
// panggil sumber dari internet
// $sumber = 'http://ppid.jakarta.go.id/json?url=http://data.jakarta.go.id/dataset/888419e5-cd42-4018-8a17-a9570d480ffc/resource/f5c6f134-c669-45f2-8d7b-9a93f239bbfb/download/Data-Kendaraan-Bermotor.csv';

$konten = file_get_contents($sumber);
// konversi json ke data array
$data = json_decode( $konten, true );

// convert array to back json
// echo json_encode($data);

// print_r($data);

echo "<br>SHOW DATA WITH FOR<hr>";
echo "<table border='1' width='100%'>
		<tr>	
			<th>Nomor Polisi</th>
			<th>Jenis Kendaraan</th>
			<th>Merk</th>
			<th>Lokasi</th>
			<th>Keterangan</th>
		</tr>";

// show data json -> array with for
for ($i=0; $i < count($data); $i++) { 
	echo "<tr>
			<td>". $data[$i]['nomor_polisi'] ."</td>
			<td>". $data[$i]['jenis_kendaraan'] ."</td>
			<td>". $data[$i]['merk'] . "</td>
			<td>". $data[$i]['lokasi'] . "</td>
			<td>". $data[$i]['keterangan'] . "</td>
		</tr>";
}

echo "</table>";

echo "<br>SHOW DATA WITH FOREACH<hr>";

echo "<table border='1' width='100%'>
		<tr>	
			<th>Nomor Polisi</th>
			<th>Jenis Kendaraan</th>
			<th>Merk</th>
			<th>Lokasi</th>
			<th>Keterangan</th>
		</tr>";

// show data json -> array with foreach
foreach ($data as $data) {
	echo "<tr>
			<td>". $data['nomor_polisi'] ."</td>
			<td>". $data['jenis_kendaraan'] ."</td>
			<td>". $data['merk'] . "</td>
			<td>". $data['lokasi'] . "</td>
			<td>". $data['keterangan'] . "</td>
		</tr>";
}

echo "</table>";

?>