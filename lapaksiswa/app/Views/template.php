<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $web['web_title'] ?></title>
    <base href="/">
    <link rel="canonical" href="<?= 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
    <meta name="description" content="<?= $web['web_description'] ?>">
    <meta name="keywords" content="<?= $web['web_keywords'] ?>">
    <meta name="author" content="<?= $web['web_author'] ?>">
    <link rel="icon" type="image/x-icon" href="<?= $web['web_logo'] ?>">
    <link rel="stylesheet" href="/css/styles.css" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .input-container {
        position: relative;
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

<body class="flex flex-col min-h-screen">
    <nav class="bg-white-500 py-4">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <div class="flex items-center space-x-3 ml-4">
                <img src="<?= $web['web_logo'] ?>" alt="Logo" class="h-10 w-10">
                <a href="/" class="text-blue-500 text-xl font-bold">Lapak Siswa</a>
            </div>


            <div class="flex flex-col md:flex-row md:items-center space-y-3 md:space-y-0 md:space-x-3 w-full md:w-2/5">
                <div class="relative group">
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

                <div class="w-full relative">
                    <input type="text" placeholder="Cari Produk Yang Kamu Inginkan Disini!"
                        class="w-full px-4 py-2 pl-10 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-search text-gray-400"></i>
                    </span>
                </div>

            </div>

            <div class="flex items-center space-x-6 mt-3 md:mt-0">
                <a href="/cart" class="relative">
                    <i class="fa-solid fa-cart-shopping text-black text-xl"></i>
                </a>
                <a href="/notifications" class="relative">
                    <i class="fa-regular fa-bell text-black text-xl"></i>
                    <!-- <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-1">5</span> -->
                </a>

                <div class="flex items-center space-x-3 md:mt-0">
                    <?php if (!session()->get('isLogin')): ?>
                        <a href="login" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md">
                            Login
                        </a>
                        <a href="register" class="px-4 py-2 border border-blue-600 text-blue-500 font-semibold rounded-md">
                            Register
                        </a>
                    <?php else: ?>
                        <a href="user"
                            class="px-4 py-2 text-black border font-semibold rounded-md hover:bg-gray-100 flex items-center space-x-2">
                            <i class="fas fa-user"></i>
                            <span><?php echo ucfirst(session()->get('username')) ?></span>
                        </a>
                        <a href="keluar"
                            class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 flex items-center space-x-2">
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

            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">c 2024 <a href="#"
                    class="hover:underline">Lapak Siswa</a>. All Rights Reserved.</span>
        </div>
    </footer>

    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdown');
            dropdown.classList.toggle('hidden');
        }
    </script>
</body>



</html>