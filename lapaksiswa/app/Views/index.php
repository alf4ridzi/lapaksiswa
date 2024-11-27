<?= $this->extend('template') ?>
<?= $this->section('footer') ?>

<style>
    #banner-slider {
        display: flex;
        overflow: hidden;
        width: 100%;
    }

    #banner-slider .slide {
        width: 100%;
        opacity: 0;
        transform: scale(0.98);
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    }

    #banner-slider .slide.active {
        opacity: 1;
        transform: scale(1);
    }

    .dot {
        cursor: pointer;
        background-color: #ddd;
        width: 10px;
        height: 10px;
        margin: 0 5px;
        border-radius: 50%;
        transition: background-color 0.3s;
    }

    .dot-active {
        background-color: #4A90E2;
    }

    .nav-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        font-size: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        z-index: 10;
        transition: background-color 0.3s;
    }

    .nav-button:hover {
        background: rgba(0, 0, 0, 0.8);
    }

    .nav-button.prev {
        left: 10px;
    }

    .nav-button.next {
        right: 10px;
    }
</style>

<div class="main">
    <!-- <div class="container mx-auto mt-8 px-4">
        <div class="relative">
            <button class="nav-button prev" id="prev-button">&#10094;</button>
            <button class="nav-button next" id="next-button">&#10095;</button>

            <div id="banner-slider" class="relative">
                <div class="slide active">
                    <img src="https://kumostoreindonesia.com/public/img/banner/kumostore_bannerr.webp" alt="Banner 1"
                        class="w-full h-64 object-cover">
                </div>
                <div class="slide">
                    <img src="https://kumostoreindonesia.com/public/img/banner/kumo%20store%20banner%20topup.webp"
                        alt="Banner 2" class="w-full h-64 object-cover">
                </div>
            </div>
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="dot" data-slide="0"></button>
                <button class="dot" data-slide="1"></button>
            </div>
        </div>
    </div> -->

    <div class="container mx-auto mt-8 px-4">
        <h2 class="text-xl font-semibold mb-4">Produk Terlaris</h2>
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
                                <p class="text-sm">⭐ 5.0 | <?= esc($p['terjual']) ?> Terjual</p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-gray-500">Belum ada produk terlaris.</p>
        <?php endif; ?>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slider = document.getElementById('banner-slider');
        const slides = slider.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevButton = document.querySelector('.nav-button.prev');
        const nextButton = document.querySelector('.nav-button.next');

        let currentIndex = 0;

        function updateSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            dots.forEach((dot, i) => {
                dot.classList.toggle('dot-active', i === index);
            });
            currentIndex = index;
        }

        function showNextSlide() {
            const nextIndex = (currentIndex + 1) % slides.length;
            updateSlide(nextIndex);
        }

        function showPrevSlide() {
            const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
            updateSlide(prevIndex);
        }

        const autoSlide = setInterval(showNextSlide, 5000);

        nextButton.addEventListener('click', () => {
            clearInterval(autoSlide);
            showNextSlide();
        });

        prevButton.addEventListener('click', () => {
            clearInterval(autoSlide);
            showPrevSlide();
        });

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                clearInterval(autoSlide);
                updateSlide(index);
            });
        });

        updateSlide(0);
    });
</script>

<?= $this->endSection() ?>