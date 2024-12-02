<?= $this->extend('template'); ?>
<?= $this->section('footer'); ?>

<div class="container mx-auto mt-4 px-4 sm:px-6 lg:px-20 flex flex-col min-h-screen">
    <?php if (!empty($produk)): ?>
        <!-- Navigasi -->
        <nav class="text-gray-600 mb-4 text-sm sm:text-base">
            <a href="/" class="hover:text-blue-500">Home</a>
            <span>&gt;</span>
            <a href="<?= $produk['username'] ?>" class="hover:text-blue-500"><?= $produk['nama_toko'] ?></a>
            <span>&gt;</span>
            <a href="/produk/<?= $produk['produk_slug']; ?>" class="hover:text-blue-500">
                <?= htmlspecialchars($produk['nama']); ?>
            </a>
        </nav>

        <div class="flex-grow flex flex-col">
            <div class="items-center space-x-2 text-center sm:text-left">
                <p class="text-lg font-bold"><?= htmlspecialchars($produk['nama']); ?></p>
                <p class="text-gray-500"><?= htmlspecialchars($produk['deskripsi']); ?></p>
            </div>
        </div>
    <?php else: ?>
        <p class="text-center text-gray-500">Produk tidak Ditemukan</p>
    <?php endif; ?>
</div>


<?= $this->endSection(); ?>
