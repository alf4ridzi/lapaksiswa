<?= $this->extend('template'); ?>
<?= $this->section('footer'); ?>

<div class="container mx-auto mt-4 px-20 flex flex-col min-h-screen">
    <!-- Navigasi di kiri -->
    <nav class="text-gray-600 mb-4">
        <a href="/" class="hover:text-blue-500">Home</a>
        <span>&gt;</span>
        <a href="/produk/<?= $produk['produk_slug']; ?>" class="hover:text-blue-500">
            <?= htmlspecialchars($produk['nama']); ?>
        </a>
    </nav>

    <div class="flex-grow flex flex-col justify-center items-center">
        <div class="items-center space-x-2">
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
