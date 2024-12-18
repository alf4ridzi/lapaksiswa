<?= $this->extend('template') ?>
<?= $this->section('footer') ?>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-6 lg:px-8"
    style="padding-top: 80px; padding-bottom: 50px;">
    <div class="max-w-screen-lg w-full bg-white shadow-lg rounded-lg p-6">
        <div class="flex flex-col sm:flex-row sm:items-start gap-6 w-full">
            <div class="flex flex-col items-center w-full sm:w-1/3">
                <label for="profile_picture" class="block">
                    <img src="<?php echo isset($user['foto']) ? base_url('picture/user/' . htmlspecialchars($user['foto'])) : base_url('picture/user/default.png') ?>"
                        alt="Profile Picture"
                        class="w-32 h-32 sm:w-40 sm:h-40 rounded-full object-cover border border-gray-300">
                </label>
                <input type="file" id="profile_picture" name="profile_picture" class="hidden" accept="image/*">
                <button type="button" onclick="document.getElementById('profile_picture').click()"
                    class="mt-2 bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                    Pilih Foto
                </button>
                <p class="text-xs text-gray-500 mt-2 text-center">
                    Besar file: maksimum 10MB. Ekstensi yang diperbolehkan: JPG, JPEG, PNG.
                </p>

                <div class="mt-4 w-full space-y-2">
                    <button class="w-full bg-gray-100 text-gray-600 px-4 py-2 rounded-md hover:bg-gray-200 text-left">
                        <i class="fa-solid fa-pen-to-square"></i> Ubah Profil
                    </button>
                    <button class="w-full bg-gray-100 text-gray-600 px-4 py-2 rounded-md hover:bg-gray-200 text-left">
                        <i class="fa-solid fa-user-lock"></i> Ganti Password
                    </button>
                </div>
            </div>

            <div class="flex-1">
                <h2 class="text-xl font-semibold text-gray-700">Ubah Biodata Diri</h2>
                <div class="mt-4 space-y-4">
                    <div class="flex justify-between items-center">
                        <p class="text-gray-700">Nama</p>
                        <div class="flex items-center gap-2">
                            <span class="text-gray-800"><?= $user['nama'] ?></span>
                            <button class="text-blue-500 text-sm hover:underline">Ubah</button>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-gray-700">Tanggal Lahir</p>
                        <?php if (isset($user['tanggal_lahir'])): ?>
                            <span class="text-gray-800"><?= $user['tanggal_lahir'] ?></span>
                        <?php else: ?>
                            <button class="text-blue-500 text-sm hover:underline">Tambah Tanggal Lahir</>
                            <?php endif; ?>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-gray-700">Jenis Kelamin</p>
                        <div class="flex items-center gap-2">
                            <span class="text-gray-800"><?= htmlspecialchars(ucfirst($user['jenis_kelamin'])) ?></span>
                            <button class="text-blue-500 text-sm hover:underline">Ubah</button>
                        </div>

                    </div>
                </div>

                <h2 class="text-xl font-semibold text-gray-700 mt-6">Ubah Kontak</h2>
                <div class="mt-4 space-y-4">
                    <div class="flex justify-between items-center">
                        <p class="text-gray-700">Email</p>
                        <div class="flex items-center gap-2">
                            <span class="text-gray-800"><?= $user['email'] ?></span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="text-gray-700">Nomor HP</p>
                        <div class="flex items-center gap-2">
                            <span class="text-gray-800"><?= $user['no_hp'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>