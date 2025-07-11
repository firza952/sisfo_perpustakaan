<?php include('./view/layout/header.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="card shadow-sm border-0 rounded-lg">
                <div class="card-body p-5">
                    <!-- Judul dengan display heading dan text center -->
                    <h1 class="display-5 fw-bold text-center text-primary mb-4">Hai, Selamat Datang di Sistem Informasi Perpustakaan</h1>
                    
                    <!-- Subteks dengan lead paragraph -->
                    <p class="lead text-center text-muted mb-5">
                        Silakan klik border dibawah ini untuk mengakses berbagai fitur sistem
                    </p>
                    
                    <!-- Informasi tambahan dengan grid -->
                    <div class="row text-center g-4">
                        <!-- Card Koleksi Buku -->
                        <div class="col-md-4">
                            <div class="p-3 border rounded bg-light h-100 d-flex flex-column">
                                <a href="index.php?modul=buku" class="text-decoration-none flex-grow-1">
                                    <div class="p-3">
                                        <i class="bi bi-book fs-1 text-success mb-3"></i>
                                        <h3 class="text-blue">Koleksi Buku</h3>
                                        <p class="text-muted">Temukan berbagai koleksi buku terbaru</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Card Peminjaman -->
                        <div class="col-md-4">
                            <div class="p-3 border rounded bg-light h-100 d-flex flex-column">
                                <a href="index.php?modul=buku&proses=tambah" class="text-decoration-none flex-grow-1">
                                    <div class="p-3">
                                        <i class="bi bi-calendar-check fs-1 text-primary mb-3"></i>
                                        <h3 class="text-blue">Peminjaman</h3>
                                        <p class="text-muted">Kelola proses peminjaman buku</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Card Anggota -->
                        <div class="col-md-4">
                            <div class="p-3 border rounded bg-light h-100 d-flex flex-column">
                                <a href="index.php?modul=anggota" class="text-decoration-none flex-grow-1">
                                    <div class="p-3">
                                        <i class="bi bi-people fs-1 text-warning mb-3"></i>
                                        <h3 class="text-blue">Anggota</h3>
                                        <p class="text-muted">Kelola data anggota perpustakaan</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./view/layout/footer.php'); ?>