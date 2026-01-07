<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">Ubah Unit PlayStation</h5>
            </div>
            <div class="card-body">
                <form action="index.php?url=proses_ubah" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_ps" value="<?= $data['ps']['id_ps']; ?>">
                    <input type="hidden" name="gambar_lama" value="<?= $data['ps']['gambar']; ?>">
                    
                    <div class="mb-3 text-center">
                        <img src="public/img/<?= $data['ps']['gambar']; ?>" class="rounded" style="width: 150px;">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Unit</label>
                        <input type="text" name="nama_unit" class="form-control" value="<?= $data['ps']['nama_unit']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis</label>
                        <select name="jenis" class="form-select">
                            <option value="PS3" <?= $data['ps']['jenis'] == 'PS3' ? 'selected' : ''; ?>>PS3</option>
                            <option value="PS4" <?= $data['ps']['jenis'] == 'PS4' ? 'selected' : ''; ?>>PS4</option>
                            <option value="PS5" <?= $data['ps']['jenis'] == 'PS5' ? 'selected' : ''; ?>>PS5</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga per Jam</label>
                        <input type="number" name="harga_per_jam" class="form-control" value="<?= $data['ps']['harga_per_jam']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="tersedia" <?= $data['ps']['status'] == 'tersedia' ? 'selected' : ''; ?>>Tersedia</option>
                            <option value="disewa" <?= $data['ps']['status'] == 'disewa' ? 'selected' : ''; ?>>Disewa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ganti Gambar (Opsional)</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-warning fw-bold">Update Unit</button>
                        <a href="index.php?url=dashboard" class="btn btn-light">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>