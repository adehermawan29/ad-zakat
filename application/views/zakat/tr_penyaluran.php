
<head>
	<title><?= $title ?></title>
</head>
<body>
 <div class="page-container">
   <!--/content-inner-->
<div class="left-content">

<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Transaksi Penyaluran</li>
            </ol>
<div class="agile-grids">	
    <div class="agile-tables">
	<div class="w3l-table-info">
	<h2>Data Transaksi Penyaluran</h2>
	<div align="left" style="padding-right: 90px;">
            <a href="<?=base_url('index.php/zakat/tambahpenyaluran')?>" class="btn btn-warning">+ TAMBAH</a>
        </div>
	<table id="table" border="1" >
		<thead>
			<tr>
				<th>Id Penyaluran</th>
				<th>Id Mustahiq</th>
				<th>Tanggal</th>
				<th>Nominal</th>	
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if (!empty($data_penyaluran)) {
					foreach ($data_penyaluran as $data) {
			?>
			<tr>
			    <td><?= $data->IdPenyaluranZakat ?></td>
				<td><?= $data->IdMustahiq ?></td>
				<td><?= $data->TglPenyaluran ?></td>
				<td><?= $data->Nominal ?></td>
				<td> <a href="<?= base_url('zakat/deletetrpenyaluran/').$data->IdPenyaluranZakat ?>">Hapus</a></td>
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