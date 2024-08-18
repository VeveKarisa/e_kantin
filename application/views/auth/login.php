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
    <div class="flex h-screen w-full items-center justify-center bg-cover bg-no-repeat" style="background-image:url('../assets/kantin.jpg')">
        <div class="hero-content flex-col gap-8">
            <div class="card bg-white w-full max-w-sm shrink-0 shadow-2xl">
            <h1 class="text-2xl font-bold text-amber-800 text-center pt-5">E-Kantin Demo!</h1>
                <form action="<?= base_url('auth/login') ?>" method="post" class="card-body">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Username</span>
                        </label>
                        <input type="text" name="username" placeholder="Username" class="p-1.5 rounded-md bg-slate-800" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" name="password" placeholder="password" class="p-1.5 rounded-md bg-slate-800" required />
                        <label class="label">
                            <a href="<?= base_url('auth/register') ?>" class="label-text-alt link link-hover">Register?</a>
                        </label>
                    </div>
                    <?php if ($this->session->flashdata('error')) : ?>
                        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
                    <?php endif; ?>
                    <div class="form-control mt-6">
                        <button class="bg-amber-800 text-white outline-none py-2 rounded-md">Masuk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>