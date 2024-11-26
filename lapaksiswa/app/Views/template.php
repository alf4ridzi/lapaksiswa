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
    <nav class="bg-white-500 py-3">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <div class="flex items-center space-x-3 ml-4">
                <img src="<?= $web['web_logo'] ?>" alt="Logo" class="h-10 w-10">
                <a href="/" class="text-blue-500 text-xl font-bold">Lapak Siswa</a>
            </div>


            <div class="flex flex-col md:flex-row md:items-center space-y-3 md:space-y-0 md:space-x-3 w-full md:w-2/5">
                <div class="relative">
                    <button onclick="toggleDropdown()"
                        class="font-semibold text-black px-4 py-2 rounded-md">
                        Kategori
                    </button>
                    <div id="dropdown" class="hidden absolute bg-white shadow-md rounded-md mt-2 w-64">
                        <ul class="divide-y divide-gray-200">
                            <?php foreach ($kategori as $k): ?>
                                <li class="p-3 hover:bg-gray-100 flex flex-col">
                                    <a class="font-semibold" href="kategori/<?= $k['slug'] ?>"><?= $k['kategori'] ?></a>
                                    <span class="text-sm text-gray-500"><?= $k['deskripsi'] ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="w-full">
                    <input type="text" placeholder="Cari Produk Yang Kamu Inginkan Disini!"
                        class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-300">
                </div>
            </div>
            <?php if (!session()->get('isLogin')): ?>
                <div class="flex space-x-2 mt-3 md:mt-0">
                    <a href="login" class="px-4 py-2 bg-blue-700 text-blue-500 font-semibold rounded-md">
                        Login
                    </a>
                    <a href="register"
                        class="px-4 py-2 border border-blue-500 text-blue-500 font-semibold rounded-md hover:bg-blue-400">
                        Register
                    </a>
                </div>
            <?php else: ?>
                <div class="flex space-x-2 mt-3 md:mt-0">
                    <a href="dashboard"
                        class="px-4 py-2 bg-white text-blue-500 font-semibold rounded-md hover:bg-gray-100 flex items-center space-x-2">
                        <i class="fas fa-user"></i>
                        <span><?php echo session()->get('username') ?></span>
                    </a>
                    <a href="keluar"
                        class="px-4 py-2 bg-white text-blue-500 font-semibold rounded-md hover:bg-gray-100 flex items-center space-x-2">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                </div>
            
        <?php endif; ?>
        </div>
    </nav>

    <?= $this->renderSection('footer') ?>
    <footer class="bg-white shadow dark:bg-gray-900 mt-8">
        <div class="container mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Marketplace_Logo.png/561px-Marketplace_Logo.png?20150527155156"
                        class="h-8" alt="Lapak Siswa Logo" />
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
                        <li><img src="https://uxwing.com/wp-content/themes/uxwing/download/banking-finance/money-notes-receiving-indonesian-rupiah-color-icon.png"
                                alt="Cashless" class="h-12" /></li>
                        <h1 class="h-full">CASHLESS</h1>
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