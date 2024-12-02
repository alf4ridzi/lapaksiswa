<?= $this->extend('template'); ?>
<?= $this->section('footer'); ?>

<div class="main flex flex-col min-h-screen justify-between">
    <div class="container mx-auto mt-4 px-4">
        <h2 class="text-xl font-semibold mb-4">Kategori : <?= esc(ucfirst($nama_kategori)) ?></h2>
        <?php if (!empty($produk)): ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <?php foreach ($produk as $p): ?>
                    <a href="<?= esc($p['username']) ?>/<?= esc($p['produk_slug']) ?>"
                        class="block bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                        <div>
                            <img src="<?= esc($p['foto']) ?>" alt="<?= esc($p['nama']) ?> Foto"
                                class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h3 class="text-md font-bold text-gray-700 truncate"><?= esc($p['nama']) ?></h3>
                                <p class="text-sm text-gray-500">Kategori: <?= esc($p['kategori']) ?></p>
                                <p class="text-lg font-semibold text-blue-500">Rp
                                    <?= number_format($p['harga'], 2, ',', '.') ?>
                                </p>
                                <p class="text-sm font-semibold"><?= esc($p['nama_toko']) ?></p>
                                <p class="text-sm">⭐ <?= htmlspecialchars(sprintf("%.1f", $p['rating'])) ?> | <?= esc($p['terjual']) ?> Terjual</p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-gray-500">Maaf, Produk Tidak Ditemukan.</p><br>
            <a href="/"
                class="inline-block px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                Kembali
            </a>

        <?php endif; ?>
    </div>

</div>

<?= $this->endSection(); ?>