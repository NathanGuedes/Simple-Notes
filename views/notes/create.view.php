<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <form method="POST" class="mt-10">
                <div class="relative mb-6">
                    <div class="flex">
                        <div class="relative w-full">
                            <label for="body" class="flex  items-center mb-2 text-gray-600 text-sm font-medium">Body
                                <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z"
                                          fill="#EF4444"></path>
                                </svg>
                            </label>
                            <textarea
                                    class="block w-full h-40 px-4 py-2.5 text-base leading-7 font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-2xl placeholder-gray-400 focus:outline-none resize-none"
                                    id="body" name="body"
                                    placeholder="Write a note..."><?= $_POST['body'] ?? "" ?></textarea>
                        </div>
                    </div>
                    <?php if (!empty($errors['body'])) : ?>
                        <p class="text-red-500 text-xs mt-2"><?= htmlspecialchars($errors['body']) ?></p>
                    <?php endif; ?>
                </div>
                <div class="flex space-x-4">
                    <button class="w-full h-12 bg-gray-600 hover:bg-gray-800 transition-all duration-700 rounded-full shadow-xs text-white text-base font-semibold leading-6"
                            type="submit">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </main>

<?php require base_path('views/partials/footer.php') ?>