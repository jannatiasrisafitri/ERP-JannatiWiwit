<?php
$aksi = "aksi_jenis_tunjangan.php";
?>
    <h3>Tambah Jenis Tunjangan</h3>


<tr>
    <form  method=POST enctype='multipart/form-data' action="<?php echo $aksi; ?>?modul=jenis_tunjangan&act=tambah" class="form uniformForm validateForm">
        <div class="field-group">
            <label for="required">Jenis Tunjangan:</label>
            <div class="field">
                <input type="text" name="nama_jenis_tunjangan" size="20" class="validate[required]" />
            </div>
        </div> <!-- .field-group -->

        <div class="actions">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" onclick="self.history.back()" class="btn btn-error">Batal</button>
        </div> <!-- .actions -->

    </form>
</tr>


