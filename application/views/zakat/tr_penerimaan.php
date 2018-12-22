
<head>
	<title><?= $title ?></title>
</head>
<body>
 <div class="page-container">
   <!--/content-inner-->
<div class="left-content">

<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Penerimaan</li>
            </ol>
<div class="agile-grids">	
    <div class="agile-tables">
	<div class="w3l-table-info">
	<h2>Tampil Data Penerimaan</h2>
	<div align="left" style="padding-right: 90px;">
            <a href="<?=base_url('index.php/zakat/tambahpenerimaan')?>" class="btn btn-warning">+ TAMBAH</a>
        </div>
	<table id="table" border="1" >
		<thead>
			<tr>
				<th>Id Penerimaan</th>
				<th>Id Muzaki</th>
				<th>Jenis Zakat</th>
				<th>Tanggal</th>
				<th>Jumlah </th>	
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if (!empty($data_penerimaan)) {
					foreach ($data_penerimaan as $data) {
			?>
			<tr>
			    <td><?= $data->IdPenerimaan ?></td>
				<td><?= $data->IdMuzaki ?></td>
				<td><?= $data->NamaZakat ?></td>
				<td><?= $data->TglPenerimaan ?></td>
				<td><?= $data->Nominal ?></td>
				<td> <a href="<?= base_url('zakat/deletetrpenerimaan/').$data->IdPenerimaan ?>">Hapus</a></td>
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