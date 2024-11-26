<?= $this->extend('template') ?>
<?= $this->section('footer') ?>

<style>
    .register-container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .register-box {
        width: 100%;
        max-width: 400px;
        padding: 2rem;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .input-field {
        width: 100%;
    }

    .btn {
        width: 100%;
        padding: 1rem;
        border: none;
        border-radius: 8px;
        background-color: #3B82F6;
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #2563EB;
    }
    
</style>

<div class="register-container">
    <div class="register-box">
        <h2 class="text-xl font-bold mb-6 text-center">Register Ke LAPAK SISWA</h2>
        <?php if (session()->get('error')): ?>
            <div id="alert" class="alert error">
                <?= session()->get('error'); ?>
            </div>
        <?php elseif (session()->get('sukses')): ?>
            <div id="alert" class="alert sukses">
                <?= session()->get('sukses') ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="auth/register">
            <div class="mb-4">
                <label for="username" class="block text-sm font-semibold">Username</label>
                <input type="text" id="username" name="username"
                    class="input-field px-4 py-2 border border-gray-300 rounded-md w-full"
                    placeholder="Masukkan username" required>
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-semibold">Nama Lengkap</label>
                <input type="text" id="nama" name="nama"
                    class="input-field px-4 py-2 border border-gray-300 rounded-md w-full"
                    placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold">Email</label>
                <input type="email" id="email" name="email"
                    class="input-field px-4 py-2 border border-gray-300 rounded-md w-full"
                    placeholder="Masukkan email" required>
            </div>
            <div class="mb-4">
                <label for="no_hp" class="block text-sm font-semibold">Nomor HP/WA</label>
                <input type="number" id="no_hp" name="no_hp"
                    class="input-field px-4 py-2 border border-gray-300 rounded-md w-full"
                    placeholder="Masukkan Nomor HP" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold">Password</label>
                <input type="password" id="password" name="password"
                    class="input-field px-4 py-2 border border-gray-300 rounded-md w-full"
                    placeholder="Masukkan Password" required>
            </div>
            <div class="mb-4">
                <label for="confirmpassword" class="block text-sm font-semibold">Konfirmasi Password</label>
                <input type="password" id="confirmpassword" name="confirmpassword"
                    class="input-field px-4 py-2 border border-gray-300 rounded-md w-full"
                    placeholder="Konfirmasi Password" required>
            </div>
            <button type="submit" class="btn">Register</button>
        </form>
        <div class="text-center mt-4">
            <a href="login" class="text-blue-500 hover:underline text-sm">Sudah punya akun ? Login</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>