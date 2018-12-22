<form method="post" enctype="multipart/form-data" action="<?= base_url('/Barang/insert') ?>">
  ID barang <input type="text" name="txtid" required><br>
  Nama Barang <input type="text" name="txtnama" required><br>
  Jenis Barang <input type="text" name="txtjenis" required><br>
  Stok <input type="text" name="txtstok" required><br>
  Harga <input type="text" name="txtharga" required><br>
  Gambar <input type="file" name="gambarbarang" required>
  <input type="submit" name="simpan" value="simpan">
</form>