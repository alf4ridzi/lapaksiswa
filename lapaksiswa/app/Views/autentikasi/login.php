<?= $this->extend('template') ?>
<?= $this->section('footer') ?>

<style>
    .login-container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background-image: url('assets/background/page.png');
        background-size: 70%;
        background-repeat: no-repeat;
        background-position: center;
    }

    .login-box {
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

<div class="login-container">
    <div class="login-box">
        <h2 class="text-xl font-bold mb-6 text-center">Login Ke LAPAK SISWA</h2>
        <?php if (session()->get('error')): ?>
            <div id="alert" class="alert error">
                <?= session()->get('error'); ?>
            </div>
        <?php elseif (session()->get('sukses')): ?>
            <div id="alert" class="alert sukses">
                <?= session()->get('sukses') ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="auth/login">
            <div class="mb-4">
                <label for="login" class="block text-sm font-semibold">Username/Email</label>
                <input type="login" id="login" name="login"
                    class="input-field px-4 py-2 border border-gray-300 rounded-md w-full" placeholder="Masukkan Email"
                    required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password"
                        class="input-field px-4 py-2 border border-gray-300 rounded-md w-full pr-10"
                        placeholder="Masukkan Password" required>
                    <i class="fa-solid fa-eye absolute right-3 top-1/2 transform -translate-y-1/2 cursor-pointer"
                        id="togglePassword"></i>
                </div>
            </div>

            <div class="mb-4 flex items-center">
                <input type="checkbox" id="remember" name="remember" class="mr-2">
                <label for="remember" class="text-sm">Remember me</label>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="text-center mt-4">
            <a href="register" class="text-blue-500 hover:underline text-sm">Tidak Punya Akun? Daftar Sekarang</a>
        </div>
    </div>
</div>

<script>
    document.getElementById("togglePassword").addEventListener("click", function() {
    const passwordField = document.getElementById("password");
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
    
    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");
});

</script>
<?= $this->endSection() ?>