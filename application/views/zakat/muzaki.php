
<head>
	<title><?= $title ?></title>
</head>
<body>
 <div class="page-container">
   <!--/content-inner-->
<div class="left-content">

<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Data Muzaki</li>
            </ol>
<div class="agile-grids">	
    <div class="agile-tables">
	<div class="w3l-table-info">
	<h2>Tampil Data Muzaki</h2>
	<div align="left" style="padding-right: 90px;">
            <a href="<?=base_url('zakat/tambahmuzaki')?>" class="btn btn-warning">+ TAMBAH</a>
        </div>
	<table id="table" border="1" >
		<thead>
			<tr>
				<th>NISN</th>
				<th>Nama Siswa</th>
				<th>Tempat lahir</th>
				<th>Tgl Lahir</th>
				<th>Alamat </th>
				<th>No_Telp </th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if (!empty($data_muzaki)) {
					foreach ($data_muzaki as $data) {
			?>
			<tr>
			    <td><?= $data->IdMuzaki ?></td>
				<td><?= $data->NamaMuzaki ?></td>
				<td><?= $data->TglLahir ?></td>
				<td><?= $data->JenisKelamin ?></td>
				<td><?= $data->AlamatMuzaki ?></td>
				<td><?= $data->No_Telp ?></td>
				<td><a href="<?= base_url('index.php/zakat/rubahmuzaki/').$data->IdMuzaki ?>">Edit</a> | <a href="<?= base_url('index.php/zakat/deletemuzaki/').$data->IdMuzaki ?>">Hapus</a></td>
			</tr>
			<?php
				}
			}else{
				echo "maaf data kosong";
			}
			?>
		</tbody>
	</table>
	</div>