<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex:">
        <form class="lg:p-16 p-6" method="post" action="/register">
            <div class="relative flex items-center mt-8">
            <span class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </span>
                <input type="text" class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Name" name="name">
            </div>

            <div class="relative flex items-center mt-6">
            <span class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            </span>
                <input type="email" class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Email" name="email">
            </div>
            <?php if (!empty($errors['email'])) : ?>
                <p class="text-red-500 text-xs mt-2 px-2"><?= htmlspecialchars($errors['email']) ?></p>
            <?php endif; ?>

            <div class="relative flex items-center mt-4">
            <span class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </span>
                <input type="password" class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Password" name="password">
            </div>
            <?php if (!empty($errors['password'])) : ?>
                <p class="text-red-500 text-xs mt-2 px-2"><?= htmlspecialchars($errors['password']) ?></p>
            <?php endif; ?>

            <div class="mt-6">
                <button class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    Register
                </button>
            </div>
        </form>
    </div>

</main>

<?php require base_path('views/partials/footer.php'); ?>
