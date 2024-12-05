<?php $this->extend('template'); ?>
<?php $this->section('footer'); ?>

<div class="main flex flex-col min-h-screen justify-between">
    <div class="container mx-auto mt-4 px-4 flex flex-col lg:flex-row gap-6">
        <aside class="w-full lg:w-1/4 bg-white p-6 shadow-lg rounded-lg top-4">
            <h3 class="text-xl font-bold mb-6 text-gray-800">Filter</h3>
            <form method="GET" action="/search" class="space-y-6">
                <div>
                    <input type="hidden" name="keyword" value="<?= htmlspecialchars($keyword) ?>">
                </div>
                <div>
                    <label for="kategori" class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                    <select name="kategori" id="kategori"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        <option value="">Semua Kategori</option>
                        <?php foreach ($kategoriLike as $k): ?>
                            <option value="<?= esc($k['slug']) ?>"><?= esc($k['kategori']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div>
                    <label for="harga_min" class="block text-sm font-medium text-gray-700 mb-2">Harga Minimum</label>
                    <input type="number" name="harga_min" id="harga_min" placeholder="0"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                </div>

                <div>
                    <label for="harga_max" class="block text-sm font-medium text-gray-700 mb-2">Harga Maksimum</label>
                    <input type="number" name="harga_max" id="harga_max" placeholder="0"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                </div>

                <div>
                    <label for="kondisi" class="block text-sm font-medium text-gray-700 mb-2">Kondisi</label>
                    <select name="kondisi" id="kondisi"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        <option value="">Semua Kondisi</option>
                        <option value="baru">Baru</option>
                        <option value="bekas">Bekas</option>
                    </select>
                </div>

                <div>
                    <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Rating Minimum</label>
                    <input type="number" name="rating" id="rating" step="0.1" placeholder="0"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                </div>

                <div>
                    <label for="urutan" class="block text-sm font-medium text-gray-700 mb-2">Urutkan</label>
                    <select name="urutan" id="urutan"
                        class="block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2">
                        <option value="terbaru">Terbaru</option>
                        <option value="terlama">Terlama</option>
                    </select>
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                        Terapkan Filter
                    </button>
                </div>
        </aside>


        <main class="flex-1">
            <h2 class="text-xl font-semibold mb-4">Hasil Pencarian: <?= esc(ucfirst($keyword)) ?></h2>
            <?php if (!empty($produk)): ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <?php foreach ($produk as $p): ?>
                        <a href="produk/<?= esc($p['produk_slug']) ?>"
                            class="block bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                            <div>
                                <img src="<?= esc($p['foto']) ?>" alt="<?= esc($p['nama']) ?> Foto"
                                    class="w-full h-40 object-cover">
                                <div class="p-4">
                                    <h3 class="text-md font-bold text-gray-700 truncate"><?= esc($p['nama']) ?></h3>
                                    <p class="text-sm text-gray-500">Kategori: <?= esc($p['kategori']) ?></p>
                                    <p class="text-lg font-semibold text-blue-500">Rp
                                        <?= number_format($p['harga'], 2, ',', '.') ?></p>
                                    <p class="text-sm font-semibold"><?= esc($p['nama_toko']) ?></p>
                                    <p class="text-sm">⭐ <?= htmlspecialchars(sprintf("%.1f", $p['rating'])) ?> |
                                        <?= esc($p['terjual']) ?> Terjual</p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-gray-500">Maaf, Produk Tidak Ditemukan.</p><br>
                <a href="/"
                    class="inline-block px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">Kembali</a>
            <?php endif; ?>
        </main>
    </div>
</div>

<?php $this->endSection(); ?>