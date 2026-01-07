<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">
        <?= ($_SESSION['role'] == 'admin') ? '<i class="bi bi-gear-fill me-2"></i>Manajemen Inventaris' : '<i class="bi bi-controller me-2"></i>Katalog PlayStation'; ?>
    </h2>
    <?php if($_SESSION['role'] == 'admin'): ?>
        <a href="index.php?url=tambah" class="btn btn-success shadow-sm px-4 fw-bold">
            <i class="bi bi-plus-lg me-2"></i>Tambah Unit Baru
        </a>
    <?php endif; ?>
</div>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">
        <form action="index.php" method="GET" class="row g-3">
            <input type="hidden" name="url" value="dashboard">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                    <input type="text" name="search" class="form-control border-start-0" placeholder="Cari nama unit..." value="<?= $_GET['search'] ?? '' ?>">
                </div>
            </div>
            <div class="col-md-4">
                <select name="filter" class="form-select">
                    <option value="">Semua Jenis (PS3/PS4/PS5)</option>
                    <option value="PS3" <?= (isset($_GET['filter']) && $_GET['filter'] == 'PS3') ? 'selected' : '' ?>>PS3</option>
                    <option value="PS4" <?= (isset($_GET['filter']) && $_GET['filter'] == 'PS4') ? 'selected' : '' ?>>PS4</option>
                    <option value="PS5" <?= (isset($_GET['filter']) && $_GET['filter'] == 'PS5') ? 'selected' : '' ?>>PS5</option>
                </select>
            </div>
            <div class="col-md-2 text-end">
                <button type="submit" class="btn btn-primary w-100 fw-bold shadow-sm">Cari</button>
            </div>
        </form>
    </div>
</div>

<hr class="mb-4 text-muted">

<?php if($_SESSION['role'] == 'admin'): ?>
    
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="ps-3" style="width: 100px;">Gambar</th>
                            <th>Nama Unit</th>
                            <th>Jenis</th>
                            <th>Harga/Jam</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($data['ps'])): ?>
                            <?php foreach($data['ps'] as $row): ?>
                            <tr>
                                <td class="ps-3">
                                    <img src="public/img/<?= $row['gambar']; ?>" class="rounded shadow-sm border" style="width: 70px; height: 50px; object-fit: cover;">
                                </td>
                                <td><span class="fw-bold text-dark"><?= $row['nama_unit']; ?></span></td>
                                <td><span class="badge bg-secondary"><?= $row['jenis']; ?></span></td>
                                <td class="text-primary fw-bold">Rp<?= number_format($row['harga_per_jam']); ?></td>
                                <td>
                                    <span class="badge rounded-pill <?= ($row['status'] == 'tersedia') ? 'bg-success-subtle text-success border border-success' : 'bg-danger-subtle text-danger border border-danger'; ?> px-3">
                                        <?= ucfirst($row['status']); ?>
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group gap-1">
                                        <a href="index.php?url=ubah&id=<?= $row['id_ps']; ?>" class="btn btn-warning btn-sm shadow-sm" title="Ubah">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="delete.php?id=<?= $row['id_ps']; ?>" class="btn btn-outline-danger btn-sm shadow-sm" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus unit ini?')">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="6" class="text-center py-5 text-muted">Tidak ada data unit PlayStation.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php else: ?>

    <div class="row">
        <?php if(!empty($data['ps'])): ?>
            <?php foreach($data['ps'] as $row): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden transition-card">
                    <img src="public/img/<?= $row['gambar']; ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="card-title fw-bold mb-0"><?= $row['nama_unit']; ?></h5>
                            <span class="badge bg-info text-dark"><?= $row['jenis']; ?></span>
                        </div>
                        <p class="h4 text-primary fw-bold mb-3">Rp<?= number_format($row['harga_per_jam']); ?> <small class="text-muted fw-normal fs-6">/ Jam</small></p>
                        
                        <div class="mb-4">
                            <span class="badge rounded-pill <?= ($row['status'] == 'tersedia') ? 'bg-success-subtle text-success border border-success' : 'bg-danger-subtle text-danger border border-danger'; ?> px-3">
                                <?= ($row['status'] == 'tersedia') ? 'Tersedia Sekarang' : 'Sedang Disewa'; ?>
                            </span>
                        </div>

                        <?php 
                            if($row['status'] == 'tersedia') {
                                $no_wa = "6285925026332"; // <--- GANTI NOMOR WA KAMU DI SINI
                                $pesan = "Halo Admin Rental PS, saya mau sewa unit ini:%0A%0A" . 
                                         "*Unit:* " . $row['nama_unit'] . "%0A" .
                                         "*Jenis:* " . $row['jenis'] . "%0A" .
                                         "*Harga:* Rp" . number_format($row['harga_per_jam']) . "/jam%0A%0A" .
                                         "Apakah masih ada slot kosong?";
                                $link_wa = "https://wa.me/" . $no_wa . "?text=" . $pesan;
                                
                                echo '<a href="' . $link_wa . '" target="_blank" class="btn btn-success w-100 mt-auto fw-bold py-2 shadow-sm">
                                        <i class="bi bi-whatsapp me-2"></i>Sewa Sekarang
                                      </a>';
                            } else {
                                echo '<button class="btn btn-secondary w-100 mt-auto fw-bold py-2" disabled>
                                        <i class="bi bi-slash-circle me-2"></i>Tidak Tersedia
                                      </button>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center py-5">
                <div class="alert alert-light border shadow-sm px-4">Maaf, unit PlayStation tidak ditemukan. Silakan gunakan filter lain.</div>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>

<?php if($data['totalPages'] > 1): ?>
<nav class="mt-4">
    <ul class="pagination justify-content-center">
        <?php for($i=1; $i<=$data['totalPages']; $i++): ?>
            <li class="page-item <?= ($i == ($_GET['page'] ?? 1)) ? 'active' : '' ?>">
                <a class="page-link shadow-sm" href="index.php?url=dashboard&page=<?= $i ?>&search=<?= $_GET['search'] ?? '' ?>&filter=<?= $_GET['filter'] ?? '' ?>">
                    <?= $i ?>
                </a>
            </li>
        <?php endfor; ?>
    </ul>
</nav>
<?php endif; ?>