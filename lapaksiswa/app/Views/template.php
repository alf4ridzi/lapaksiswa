<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/">
    <?php if (strpos($_SERVER['REQUEST_URI'], 'login')): ?>
        <title>Login - <?= $web['web_title'] ?></title>
        <meta name="description" content="<?= $web['web_description'] ?>">
        <meta name="keywords" content="<?= $web['web_keywords'] ?>">
    <?php elseif (strpos($_SERVER['REQUEST_URI'], 'register')): ?>
        <title>Register - <?= $web['web_title'] ?></title>
        <meta name="description" content="<?= $web['web_description'] ?>">
        <meta name="keywords" content="<?= $web['web_keywords'] ?>">
    <?php elseif (strpos($_SERVER['REQUEST_URI'], 'search')): ?>
        <title>Hasil Pencarian : <?= $keyword ?></title>
        <meta name="description" content="Pencarian Produk <?= $keyword ?>">
    <?php elseif (strpos($_SERVER['REQUEST_URI'], 'kategori')): ?>
        <title>Kategori : <?= $nama_kategori ?></title>
        <meta name="description" content="Jual Produk <?= $nama_kategori ?>">
    <?php elseif (strpos($_SERVER['REQUEST_URI'], 'produk')): ?>
        <title>Jual <?= htmlspecialchars($produk['nama']); ?> - <?= $web['web_title'] ?></title>
        <meta name="description" content="<?= htmlspecialchars($produk['nama']) ?> - <?= htmlspecialchars($produk['deskripsi']) ?>">
        <meta name="keywords" content="<?= htmlspecialchars($produk['nama']) ?>">
    <?php else: ?>
        <title><?= $web['web_title'] ?></title>
    <meta name="description" content="<?= $web['web_description'] ?>">
    <meta name="keywords" content="<?= $web['web_keywords'] ?>">
    <?php endif; ?>
    <link rel="canonical" href="<?= 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
    <meta name="author" content="<?= $web['web_author'] ?>">
    <link rel="icon" type="image/x-icon" href="<?= $web['web_logo'] ?>">
    <link rel="stylesheet" href="/css/styles.css" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    
    .input-container {
        position: relative;
    }

    #mobileSidebar {
        transition: transform 0.3s ease-in-out;
    }

    body {
        min-height: 100vh;
        margin: 0;
    }

    .input-container .fa-search {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: gray;
    }

    .input-container input {
        padding-left: 2.5rem;
    }

    #dropdown {
        z-index: 9999;
    }

    .alert {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
        color: white;
        border-radius: 5px;
        margin: 10px 0;
        font-size: 16px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .alert.error {
        background-color: #e74c3c;
    }

    .alert.sukses {
        background-color: #2ecc71;
    }
</style>

<nav class="flex flex-col min-h-screen">
    <nav class="bg-white-500 py-4">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <div class="flex items-center space-x-3 ml-4">
                <button id="sidebarToggle" class="text-black text-xl focus:outline-none md:hidden">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <img src="<?= $web['web_logo'] ?>" alt="Logo" class="h-10 w-10">
                <a href="/" class="text-blue-500 text-xl font-bold">Lapak Siswa</a>
            </div>
            <div class="md:hidden border-2 border-gray-500 rounded-md flex items-center ml-2">
                <button id=""
                    class="text-black flex items-center justify-center md:hidden hover:bg-murky-900 focus:outline-none rounded-lg text-2xl border border-murky-800 w-10 h-10">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <div id="mobileSidebar" class="hidden fixed top-0 left-0 w-64 h-full bg-white shadow-lg z-50">
                <div class="flex items-center justify-between p-4 border-b">
                    <span class="text-xl font-bold">Lapak Siswa</span>
                    <button id="sidebarClose" class="text-black text-xl focus:outline-none">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>
                <div class="hidden sm:block w-full relative">
                    <input type="text" placeholder="Cari Produk Yang Kamu Inginkan Disini!"
                        class="w-full px-4 py-2 pl-10 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-search text-gray-400"></i>
                    </span>
                </div>
                <ul class="p-4 space-y-3">
                    <li class="flex items-center space-x-2">
                        <i class="bi bi-house-door"></i>
                        <a href="/" class="block px-4 py-2 text-black hover:bg-gray-100 rounded-md">Home</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="bi bi-cart"></i>
                        <a href="/cart" class="block px-4 py-2 text-black hover:bg-gray-100 rounded-md">Cart</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="bi bi-bell"></i>
                        <a href="/notifications"
                            class="block px-4 py-2 text-black hover:bg-gray-100 rounded-md">Notifications</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="bi bi-chat"></i>
                        <a href="/chat" class="block px-4 py-2 text-black hover:bg-gray-100 rounded-md">Chat</a>
                    </li>
                    <li class="relative group">
                        <i class="bi bi-app"></i>
                        <a onclick="toggleDropdown()"
                            class="menu-hover font-semibold text-black px-4 py-2 rounded-md cursor-pointer">
                            Kategori
                        </a>
                        <div id="dropdown"
                            class="hidden absolute bg-white shadow-md rounded-md mt-2 w-64 group-hover:block"
                            role="menu">
                            <ul class="divide-y divide-gray-200">
                                <?php foreach ($kategori as $k): ?>
                                    <li>
                                        <a href="kategori/<?= $k['slug'] ?>" class="p-3 hover:bg-gray-100 flex flex-col">
                                            <div class="font-semibold">
                                                <?= htmlspecialchars($k['kategori'], ENT_QUOTES, 'UTF-8') ?>
                                            </div>
                                            <span
                                                class="text-sm text-gray-500"><?= htmlspecialchars($k['deskripsi'], ENT_QUOTES, 'UTF-8') ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col md:flex-row md:items-center space-y-3 md:space-y-0 md:space-x-3 w-full md:w-2/5">
                <div class="hidden sm:block relative group">
                    <a onclick="toggleDropdown()"
                        class="menu-hover font-semibold text-black px-4 py-2 rounded-md cursor-pointer">
                        Kategori
                    </a>
                    <div id="dropdown" class="hidden absolute bg-white shadow-md rounded-md mt-2 w-64 group-hover:block"
                        role="menu">
                        <ul class="divide-y divide-gray-200">
                            <?php foreach ($kategori as $k): ?>
                                <li>
                                    <a href="kategori/<?= $k['slug'] ?>" class="p-3 hover:bg-gray-100 flex flex-col">
                                        <div class="font-semibold">
                                            <?= htmlspecialchars($k['kategori'], ENT_QUOTES, 'UTF-8') ?>
                                        </div>
                                        <span
                                            class="text-sm text-gray-500"><?= htmlspecialchars($k['deskripsi'], ENT_QUOTES, 'UTF-8') ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="hidden sm:block w-full relative">
                    <input type="text" id="searchInput" value="<?= isset($keyword) ? htmlspecialchars($keyword) : '' ?>" placeholder="Cari Produk Yang Kamu Inginkan Disini!"
                        class="w-full px-4 py-2 pl-10 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <button onclick="searchButtonHandle()" id="searchButton"
                        class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-search text-gray-400"></i>
                    </button>
                </div>
            </div>

            <div class="flex items-center space-x-6 mt-3 md:mt-0">
                <a href="/cart" class="hidden sm:block relative">
                    <i class="fa-solid fa-cart-shopping text-black text-xl"></i>
                </a>
                <a href="/notifications" class="hidden sm:block relative">
                    <i class="fa-regular fa-bell text-black text-xl"></i>
                </a>
                <a href="/chat" class="hidden sm:block relative">
                    <i class="fa-regular fa-envelope text-black text-xl"></i>
                </a>

                <div class="flex items-center space-x-3 md:mt-0">

                    <?php if (!session()->get('isLogin')): ?>
                        <a href="login" class="hidden sm:block px-4 py-2 bg-blue-600 text-white font-semibold rounded-md">
                            Login
                        </a>
                        <a href="register"
                            class="hidden sm:block px-4 py-2 border border-blue-600 text-blue-500 font-semibold rounded-md">
                            Register
                        </a>
                    <?php else: ?>
                        <a href="user"
                            class="hidden sm:flex px-4 py-2 text-black border font-semibold rounded-md hover:bg-gray-100 items-center space-x-2">
                            <i class="fas fa-user"></i>
                            <span><?php echo htmlspecialchars(ucfirst(session()->get('username'))); ?></span>
                        </a>

                        <a href="keluar"
                            class="hidden sm:flex px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 items-center space-x-2">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </nav>

    <hr />
    <?= $this->renderSection('footer') ?>
    <footer class="bg-white shadow dark:bg-gray-900 mt-8">
        <div class="container mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3">
                    <img src="<?= $web['web_logo'] ?>" class="h-8" alt="Lapak Siswa Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Lapak
                        Siswa</span>
                </a>
                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Tentang Kami</a>
                    </li>
                </ul>
            </div>

            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-sm text-gray-500 dark:text-gray-400">
                <div>
                    <h3 class="font-semibold text-gray-700 dark:text-white">Bantuan</h3>
                    <ul>
                        <li><a href="#" class="hover:underline">FAQ</a></li>
                        <li><a href="#" class="hover:underline">Kontak Kami</a></li>
                        <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:underline">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-700 dark:text-white">Layanan</h3>
                    <ul>
                        <li><a href="#" class="hover:underline">Jual di Lapak Siswa</a></li>
                        <li><a href="#" class="hover:underline">Cara Pembelian</a></li>
                        <li><a href="#" class="hover:underline">Pengiriman</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-700 dark:text-white">Ikuti Kami</h3>
                    <ul class="flex space-x-4">
                        <li><a href="#" class="hover:text-blue-600"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#" class="hover:text-blue-400"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="hover:text-pink-500"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" class="hover:text-red-600"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-700 dark:text-white">Metode Pembayaran</h3><br>
                    <ul class="flex space-x-4">
                        <?php foreach ($pembayaran as $p): ?>
                            <li><img src="<?= $p['logo'] ?>" alt="<?= $p['nama'] ?>" class="h-7" /></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />

            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">&copy; 2024 <a href="#"
                    class="hover:underline">Lapak Siswa</a>. All Rights Reserved.</span>
        </div>
    </footer>

    <script>
        window.addEventListener('load', function() {
            const storedValue = localStorage.getItem('searchValue');
            if (storedValue) {
                document.getElementById('searchInput').value = storedValue;
                localStorage.setItem('searchValue', '');
            }
        });
        
        var input = document.getElementById("searchInput");

        input.addEventListener("keypress", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();
                document.getElementById("searchButton").click();
            }
        });

        function searchButtonHandle() {
            var input = document.getElementById("searchInput").value;

            if (input.length <= 0) {
                window.location.href = '<?= base_url() ?>';
                return;
            };

            localStorage.setItem('searchValue', input)
            window.location.href = '<?php echo base_url('/search?keyword='); ?>' + encodeURIComponent(input);
        };

        
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdown');
            dropdown.classList.toggle('hidden');
        }

        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebarClose = document.getElementById('sidebarClose');
        const mobileSidebar = document.getElementById('mobileSidebar');

        sidebarToggle.addEventListener('click', () => {
            mobileSidebar.classList.remove('hidden');
        });

        sidebarClose.addEventListener('click', () => {
            mobileSidebar.classList.add('hidden');
        });


    </script>
</nav>



</html>