
<head>
	<title><?= $title ?></title>
</head>
<body>
 <div class="page-container">
   <!--/content-inner-->
<div class="left-content">

<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Mustahiq</li>
            </ol>
<div class="agile-grids">	
    <div class="agile-tables">
	<div class="w3l-table-info">
	<h2>Tampil Data Mustahiq</h2>
	<div align="left" style="padding-right: 90px;">
            <a href="<?=base_url('zakat/tambahmustahiq')?>" class="btn btn-warning">+ TAMBAH</a>
        </div>
	<table id="table" border="1" >
		<thead>
			<tr>
				<th>Id Mustahiq</th>
				<th>Nama Mustahiq</th>
				<th>Tgl Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Alamat </th>
				<th>Pendapatan Bulanan</th>
				<th>Id Kategori</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if (!empty($data_mustahiq)) {
					foreach ($data_mustahiq as $data) {
			?>
			<tr>
			    <td><?= $data->IdMustahiq ?></td>
				<td><?= $data->NamaMustahiq ?></td>
				<td><?= $data->TglLahir ?></td>
				<td><?= $data->JenisKelamin ?></td>
				<td><?= $data->Alamat ?></td>
				<td><?= $data->Pendapatanbulanan ?></td>
				<td><?= $data->IdKategori ?></td>
				<td><a href="<?= base_url('zakat/rubahmustahiq/').$data->IdMustahiq ?>">Edit</a> | <a href="<?= base_url('zakat/deletemustahiq/').$data->IdMustahiq ?>">Hapus</a></td>
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