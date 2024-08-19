<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Kantin | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex h-screen w-full items-center justify-center bg-cover bg-no-repeat" style="background-image:url('./assets/kantin.jpg')">
        <div class="bg-white w-full max-w-md p-8 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold text-amber-800 text-center mb-6">E-Kantin Demo!</h1>
            <form action="<?= base_url('auth/login') ?>" method="post">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input type="text" id="username" name="username" placeholder="Username" class="w-full p-3 rounded-md bg-gray-200 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-800 focus:border-transparent" required />
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input type="password" id="password" name="password" placeholder="Password" class="w-full p-3 rounded-md bg-gray-200 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-amber-800 focus:border-transparent" required />
                    <div class="mt-2 text-right">
                        <a href="<?= base_url('auth/register') ?>" class="text-sm text-amber-800 hover:underline">Register?</a>
                    </div>
                </div>
                <?php if ($this->session->flashdata('error')) : ?>
                    <p class="text-red-500"><?php echo $this->session->flashdata('error'); ?></p>
                <?php endif; ?>
                <div>
                    <button class="w-full bg-amber-800 text-white py-3 rounded-md hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-800 focus:ring-opacity-50">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>