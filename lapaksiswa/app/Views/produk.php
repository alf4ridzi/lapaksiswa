<?= $this->extend('template'); ?>
<?= $this->section('footer'); ?>

<style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;

    }
</style>

<div class="container mx-auto mt-4 px-4 sm:px-6 lg:px-20 flex flex-col">
    <div class="flex-grow">
        <?php if (!empty($produk)): ?>
            <nav class="text-gray-600 mb-4 text-sm sm:text-base">
                <a href="/" class="hover:text-blue-500">Beranda</a>
                <span>&gt;</span>
                <a href="<?= $produk['username'] ?>" class="hover:text-blue-500"><?= $produk['nama_toko'] ?></a>
                <span>&gt;</span>
                <span class="text-blue-500 font-semibold">
                    <?= htmlspecialchars($produk['nama']); ?>
                </span>
            </nav>

            <div class="flex flex-grow flex-col md:flex-row gap-6">
                <div class="bg-white py-6 shadow rounded-lg p-6 flex-1">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6">
                        <h1 class="text-2xl font-bold text-gray-800">Detail Produk</h1>
                    </div>

                    <div class="flex flex-col md:flex-row gap-6">
                        <div class="flex-shrink-0">
                            <img src="<?= $produk['foto'] ?>" alt="<?= htmlspecialchars($produk['nama']); ?>"
                                class="w-full max-w-sm h-auto object-cover rounded-lg border">
                        </div>

                        <div class="flex-grow">
                            <h2 class="text-3xl font-semibold text-gray-800 mb-2">
                                <?= htmlspecialchars($produk['nama']); ?>
                            </h2>
                            <p class="text-sm font-semibold mb-2">
                                <span class="text-gray-500 font-bold">
                                    <i class="fa-solid fa-bag-shopping"></i> Terjual:
                                    <?= htmlspecialchars($produk['terjual']); ?>
                                </span>
                                <span class="text-yellow-400 ml-4">
                                    <i class="fas fa-star"></i> Rating: <?= htmlspecialchars($produk['rating']); ?>
                                </span>
                            </p>

                            <div class="text-2xl font-bold text-red-500 mb-4">
                                Rp <?= number_format($produk['harga'], 0, ',', '.'); ?>
                            </div>

                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Spesifikasi</h3>
                                <ul class="list-disc pl-5 text-gray-600">
                                    <li>Kondisi : <?= htmlspecialchars($produk['kondisi'])?></li>
                                    <li>Unit: <?= htmlspecialchars($produk['unit']); ?></li>
                                    <li>Varian: <?= htmlspecialchars($produk['varian']); ?></li>
                                    <li>Kategori: <?= htmlspecialchars($produk['kategori']); ?></li>
                                </ul>
                            </div>

                            <div class="mb-1">
                                <h3 class="text-lg font-semibold text-gray-800 mb-2">Deskripsi Produk</h3>
                                <p class="text-base font-semibold text-gray-400">
                                    <?= htmlspecialchars($produk['deskripsi']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6 w-full md:w-1/3 mt-6">
                    <div class="mb-6">
                        <label for="quantity" class="block text-gray-700 font-medium">Atur jumlah dan catatan</label>
                        <div class="flex items-center mt-2">
                            <button id="minus_stok"
                                class="bg-gray-200 text-gray-700 py-2 px-4 rounded-l-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input type="number" id="quantity"
                                class="text-center border-t border-b border-gray-200 py-2 w-16 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                value="1" min="1" oninput="validateInput(this)">
                            <button id="tambah_stok"
                                class="bg-gray-200 text-gray-700 py-2 px-4 rounded-r-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <i class="fas fa-plus"></i>
                            </button>
                            <span class="ml-4 text-gray-700">Stok Total: <?= $produk['stok'] ?></span>
                        </div>
                    </div>

                    <div class="mb-6 flex items-center">
                        <p class="text-lg font-bold text-gray-500 mr-2">Subtotal:</p>
                        <p id="subtotal" class="text-lg font-bold text-black mr-2">Rp <?= number_format($produk['harga'], 0, ',', '.');  ?></p>
                    </div>


                    <div class="flex flex-col gap-4">
                        <button class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600">
                            <i class="fas fa-cart-arrow-down mr-2"></i>+ Keranjang
                        </button>
                        <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                            <i class="fas fa-credit-card mr-2"></i>Beli Langsung
                        </button>
                    </div>

                    <div class="flex justify-between items-center mt-6">
                        <button class="text-gray-700 hover:text-gray-900">
                            <i class="fas fa-comments mr-2"></i>Chat
                        </button>
                        <button class="text-gray-700 hover:text-gray-900">
                            <i class="fas fa-heart mr-2"></i>Wishlist
                        </button>
                        <button class="text-gray-700 hover:text-gray-900">
                            <i class="fas fa-share mr-2"></i>Share
                        </button>
                    </div>
                </div>
            </div>

            <!-- Related Products Section -->
            <div class="mt-10">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Produk Terkait</h3>
                <?php if (!empty($related)): ?>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                        <?php foreach ($related as $r): ?>
                            <a href="/produk/<?= $r['produk_slug'] ?>"
                                class="bg-white shadow rounded-lg overflow-hidden hover:shadow-md transition">
                                <img src="<?= $r['foto'] ?>" alt="<?= htmlspecialchars($r['nama']); ?>"
                                    class="w-full h-40 object-cover">
                                <div class="p-4">
                                    <h4 class="text-lg font-medium text-gray-800 truncate">
                                        <?= htmlspecialchars($r['nama']); ?>
                                    </h4>
                                    <p class="text-red-500 font-semibold">
                                        Rp <?= number_format($r['harga'], 0, ',', '.'); ?>
                                    </p>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p class="text-red-500">Maaf, belum ada produk terkait.</p>
                <?php endif; ?>
            </div>

        <?php else: ?>
            <p class="text-center text-gray-500">Produk tidak Ditemukan</p>
        <?php endif; ?>
    </div>
</div>

<script>
    document.getElementById('quantity').addEventListener('input', function () {
        let stok = <?= $produk['stok']; ?>;
        let quantityInput = parseInt(this.value, 10);

        if (quantityInput > stok) {
            this.value = stok;
        }
    });

    function validateInput(input) {
        if (parseInt(input.value) < 1) {
            input.value = 1;
        }
    }

    document.getElementById('minus_stok').addEventListener('click', function () {
        let quantityInput = document.getElementById('quantity');
        let subtotal = document.getElementById('subtotal');
        const price = <?= $produk['harga']; ?>;

        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
            let subtotalNew = price * (currentQuantity - 1);
            subtotal.innerText = "Rp " + subtotalNew.toLocaleString();
        }
    });

    document.getElementById('tambah_stok').addEventListener('click', function () {
        let quantityInput = document.getElementById('quantity');
        let subtotal = document.getElementById('subtotal');
        const price = <?= $produk['harga']; ?>;
        const maxStock = <?= $produk['stok']; ?>;

        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity < maxStock) {
            quantityInput.value = currentQuantity + 1;
            let subtotalNew = price * (currentQuantity + 1);
            subtotal.innerText = "Rp " + subtotalNew.toLocaleString();
        }
    });
</script>

<?= $this->endSection(); ?>