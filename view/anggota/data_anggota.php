<?php include('./view/layout/header.php'); ?>

<div class="container-fluid py-4">
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="mb-1 text-primary"><i class="fas fa-users me-2"></i>Data Anggota</h2>
                    <p class="text-muted mb-0">Manajemen data anggota perpustakaan</p>
                </div>
                <a href="index.php?modul=anggota&proses=tambah" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Tambah Anggota
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-white border-bottom-0 pt-3 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-3">Daftar Anggota</h5>
                    </div>
                </div>

                <div class="card-body p-0">
                    <?php if(isset($_SESSION["ERROR_SISTEM"])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mx-3 mt-3" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <?= $_SESSION["ERROR_SISTEM"] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION["ERROR_SISTEM"]); ?>
                    <?php endif; ?>

                    <?php if(isset($_SESSION["SUCCESS_SISTEM"])): ?>
                        <div class="alert alert-success alert-dismissible fade show mx-3 mt-3" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            <?= $_SESSION["SUCCESS_SISTEM"] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION["SUCCESS_SISTEM"]); ?>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-hover table-borderless mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-4">Anggota</th>
                                    <th>NPM</th>
                                    <th>Jurusan</th>
                                    <th>Kontak</th>
                                    <th class="text-end pe-4">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data_anggota as $i => $anggota): ?>
                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm me-3 bg-primary bg-opacity-10 text-primary">
                                                <?= substr($anggota['nama'], 0, 1) ?>
                                            </div>
                                            <div>
                                                <h6 class="mb-0"><?= $anggota['nama'] ?></h6>
                                                <small class="text-muted">Anggota #<?= $i+1 ?></small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= $anggota['npm'] ?></td>
                                    <td>
                                        <span class="badge  text-primary">
                                            <?= $anggota['jurusan'] ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="d-block"><?= $anggota['no_telp'] ?></span>
                                            <small class="text-muted"><?= $anggota['email'] ?></small>
                                        </div>
                                    </td>
                                    <td class="text-end pe-4">
                                        <div class="btn-group">
                                            <a href="index.php?modul=anggota&proses=ubah&npm=<?= $anggota['npm'] ?>" 
                                               class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                               <i class="fas fa-edit me-1"></i>Edit
                                            </a>
                                            <a href="index.php?modul=anggota&proses=proses_hapus&npm=<?= $anggota['npm'] ?>" 
                                               class="btn btn-sm btn-outline-danger rounded-pill px-3"
                                               onclick="return confirm('Hapus data anggota ini?')">
                                               <i class="fas fa-trash-alt me-1"></i>Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer bg-white border-top-0 pt-0 pb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-muted small">
                            Menampilkan <span class="fw-bold"><?= count($data_anggota) ?></span> anggota
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-stats {
        transition: transform 0.2s;
        border-radius: 12px;
        border: none;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }
    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    }
    .icon-shape {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .avatar {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-weight: bold;
    }
</style>

<?php include('./view/layout/footer.php'); ?>