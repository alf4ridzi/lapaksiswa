<?= $this->extend('template') ?>
<?= $this->section('footer') ?>

<style>
    .banner-slide-container {
        width: 50%;
        max-width: 1200px;
        margin: 30px auto 0;
        padding: 20px;
        position: relative;
        background-color: #F3F4F6;
        border-radius: 10px;
        overflow: hidden;
    }

    .banner-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .banner-slide img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        object-fit: cover;
    }

    .btn-banner {
        padding: 10px 20px;
        background-color: #5A3EEC;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-banner:hover {
        background-color: #3B26B1;
    }
</style>

<div class="main">
    <div class="w-full">
        <div class="banner-slide-container">
            <div class="banner-slide">
                <img src="https://kumostoreindonesia.com/public/img/banner/kumostore_bannerr.webp" alt="Promo Banner" />
            </div>
        </div>

        <div class="container mx-auto mt-8 px-4">
            <h2 class="text-xl font-semibold mb-4">Produk Terlaris</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="/produk/1"
                    class="block bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div>
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-md font-bold text-gray-700 truncate">Produk 1</h3>
                            <p class="text-sm text-gray-500">Kategori: Elektronik</p>
                            <p class="text-lg font-semibold text-blue-500">Rp 150.000</p>
                            <p class="text-sm font-semibold">BEKASI</p>
                            <p class="text-sm font-semibold">? 5.0 | 100+ Terjual</p>
                        </div>
                    </div>
                </a>

                <a href="/produk/1"
                    class="block bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div>
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-md font-bold text-gray-700 truncate">Produk 1</h3>
                            <p class="text-sm text-gray-500">Kategori: Elektronik</p>
                            <p class="text-lg font-semibold text-blue-500">Rp 150.000</p>
                            <p class="text-sm font-semibold">BEKASI</p>
                            <p class="text-sm font-semibold">? 5.0 | 100+ Terjual</p>
                        </div>
                    </div>
                </a>

                <a href="/produk/1"
                    class="block bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div>
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-md font-bold text-gray-700 truncate">Produk 1</h3>
                            <p class="text-sm text-gray-500">Kategori: Elektronik</p>
                            <p class="text-lg font-semibold text-blue-500">Rp 150.000</p>
                            <p class="text-sm font-semibold">BEKASI</p>
                            <p class="text-sm font-semibold">? 5.0 | 100+ Terjual</p>
                        </div>
                    </div>
                </a>

                <a href="/produk/1"
                    class="block bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div>
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-md font-bold text-gray-700 truncate">Produk 1</h3>
                            <p class="text-sm text-gray-500">Kategori: Elektronik</p>
                            <p class="text-lg font-semibold text-blue-500">Rp 150.000</p>
                            <p class="text-sm font-semibold">BEKASI</p>
                            <p class="text-sm font-semibold">? 5.0 | 100+ Terjual</p>
                        </div>
                    </div>
                </a>

                <a href="/produk/1"
                    class="block bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div>
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-md font-bold text-gray-700 truncate">Produk 1</h3>
                            <p class="text-sm text-gray-500">Kategori: Elektronik</p>
                            <p class="text-lg font-semibold text-blue-500">Rp 150.000</p>
                            <p class="text-sm font-semibold">BEKASI</p>
                            <p class="text-sm font-semibold">? 5.0 | 100+ Terjual</p>
                        </div>
                    </div>
                </a>
                
                <a href="/produk/1"
                    class="block bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div>
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-md font-bold text-gray-700 truncate">Produk 1</h3>
                            <p class="text-sm text-gray-500">Kategori: Elektronik</p>
                            <p class="text-lg font-semibold text-blue-500">Rp 150.000</p>
                            <p class="text-sm font-semibold">BEKASI</p>
                            <p class="text-sm font-semibold">? 5.0 | 100+ Terjual</p>
                        </div>
                    </div>
                </a>

                <a href="/produk/1"
                    class="block bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div>
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-md font-bold text-gray-700 truncate">Produk 1</h3>
                            <p class="text-sm text-gray-500">Kategori: Elektronik</p>
                            <p class="text-lg font-semibold text-blue-500">Rp 150.000</p>
                            <p class="text-sm font-semibold">BEKASI</p>
                            <p class="text-sm font-semibold">? 5.0 | 100+ Terjual</p>
                        </div>
                    </div>
                </a>

                <a href="/produk/1"
                    class="block bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div>
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-md font-bold text-gray-700 truncate">Produk 1</h3>
                            <p class="text-sm text-gray-500">Kategori: Elektronik</p>
                            <p class="text-lg font-semibold text-blue-500">Rp 150.000</p>
                            <p class="text-sm font-semibold">BEKASI</p>
                            <p class="text-sm font-semibold">? 5.0 | 100+ Terjual</p>
                        </div>
                    </div>
                </a>

                <a href="/produk/1"
                    class="block bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div>
                        <img src="https://via.placeholder.com/150" alt="Produk 1" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="text-md font-bold text-gray-700 truncate">Produk 1</h3>
                            <p class="text-sm text-gray-500">Kategori: Elektronik</p>
                            <p class="text-lg font-semibold text-blue-500">Rp 150.000</p>
                            <p class="text-sm font-semibold">BEKASI</p>
                            <p class="text-sm font-semibold">? 5.0 | 100+ Terjual</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.banner-slide');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = (i === index) ? 'flex' : 'none';
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    setInterval(nextSlide, 5000);
    showSlide(currentSlide);
</script>

<?= $this->endSection() ?>
