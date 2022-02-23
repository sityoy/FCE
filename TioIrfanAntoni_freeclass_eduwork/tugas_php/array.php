<?php


$json = file_get_contents('data.json');
$data = json_decode($json, true)
//  var_dump($data);
//  die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Data Nilai </h2>
	<table border='2' width='100%' bgcolor='yellow' cellspacing='1'>

	 <th width='5'>No</th>
	 <th width='100'>Nama</th>
	 <th width='100'>Tanggal Lahir</th>
	 <th width='100'>Umur</th>
	 <th width='100'>Alamat</th>
	 <th width='100'>Kelas</th>
	 <th width='100'>Nilai</th>
	 <th width='100'>Grade</th>

	<?php $no = 1;
	foreach ($data as $d ) ; ?>
	<tr>
		<td><?= $no; ?></td>
		<td><?= $d["nama"]; ?> </td>
		<td><?= $d["tanggal_lahir"]; ?> </td>
		<td align="center"><?= date('Y') - date('Y', strtotime($d["tanggal_lahir"])); ?></td>
		<td align="center"><?= $d["alamat"];?> </td>
		<td align="center"><?= $d["kelas"];?> </td>
		<td align="center"><?= $d["nilai"];?> </td>

		<?php if ($d['nilai'] >= 90) : ?>
			<td align="center">A</td>
		<?php elseif ($d['nilai'] >= 80) : ?>
			<td align="center">B</td>
		<?php elseif ($d['nilai'] >= 70) : ?>
			<td align="center">C</td>
		<?php elseif ($d['nilai'] >= 60) : ?>
			<td align="center">D</td>
		<?php else : ?>
			<td align="center">E</td>
		<?php endif; ?>
	</tr>
<?php $no++; ?>

</body>
</html>