<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Tambah Unit PlayStation</h5>
            </div>
            <div class="card-body">
                <form action="index.php?url=proses_tambah" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Nama Unit</label>
                        <input type="text" name="nama_unit" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis</label>
                        <select name="jenis" class="form-select">
                            <option value="PS3">PS3</option>
                            <option value="PS4">PS4</option>
                            <option value="PS5">PS5</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga per Jam</label>
                        <input type="number" name="harga_per_jam" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="tersedia">Tersedia</option>
                            <option value="disewa">Disewa</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar Unit</label>
                        <input type="file" name="gambar" class="form-control" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Simpan Unit</button>
                        <a href="index.php?url=dashboard" class="btn btn-light">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>