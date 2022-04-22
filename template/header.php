<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
    <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <h3>Perpustakaan</h3>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 <?= empty($_GET['page']) ? "link-secondary" : "link-dark" ?>">Home</a></li>
        <li><a href="index.php?page=buku/index.php" class="nav-link px-2 <?= $_GET['page'] == "buku/index.php" ? "link-secondary" : "link-dark" ?>">Buku</a></li>
        <li><a href="index.php?page=anggota/index.php" class="nav-link px-2 <?= $_GET['page'] == "anggota/index.php" ? "link-secondary" : "link-dark" ?>">Anggota</a></li>
        <li><a href="index.php?page=peminjaman/index.php" class="nav-link px-2 <?= $_GET['page'] == "peminjaman/index.php" ? "link-secondary" : "link-dark" ?>">Peminjaman</a></li>
    </ul>

    <div class="col-md-3 text-end">
        <?php if($_SESSION["username"]): ?>
            <a href="logout.php" class="btn btn-outline-primary me-2">Logout (<?= $_SESSION['username'] ?>)</a>
        <?php else: ?>
            <a href="index.php" class="btn btn-outline-primary me-2">Login</a>
        <?php endif; ?>
    </div>
</header>