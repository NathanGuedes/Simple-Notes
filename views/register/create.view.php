<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form action="/register" method="post" class="lg:p-16 p-6">
            <div class="relative mb-6">
                <label for="name" class="flex  items-center mb-2 text-gray-600 text-sm font-medium">Full Name
                    <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z"
                              fill="#EF4444"/>
                    </svg>
                </label>
                <input type="text" id="default-search" name="name"
                       class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-gray-600"
                       required="">
            </div>
            <div class="relative mb-6">
                <label for="email" class="flex  items-center mb-2 text-gray-600 text-sm font-medium">Email
                    <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z"
                              fill="#EF4444"/>
                    </svg>
                </label>
                <input type="email" id="default-search" name="email"
                       class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-gray-600 "
                       required="">
                <?php if (!empty($errors['email'])): ?>
                    <p class="text-red-500 text-xs mt-2">
                        <?= htmlspecialchars($errors['email']) ?></p>
                <?php endif; ?>
            </div>
            <div class="relative mb-6">
                <label for="password" class="flex  items-center mb-2 text-gray-600 text-sm font-medium">Password
                    <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z"
                              fill="#EF4444"/>
                    </svg>
                </label>
                <input type="password" id="default-search" name="password"
                       class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-gray-600 "
                       required="">
                <?php if (!empty($errors['password'])): ?>
                    <p class="text-red-500 text-xs mt-2">
                        <?= htmlspecialchars($errors['password']) ?></p>
                <?php endif; ?>
            </div>
            <button type="submit"
                    class="w-52 h-12 shadow-sm rounded-full bg-indigo-600 hover:bg-indigo-800 transition-all duration-700 text-white text-base font-semibold leading-7">
                Register
            </button>
        </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>
