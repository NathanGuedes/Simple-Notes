<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <form method="POST" action="/note" class="w-full">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">

                <div class="mb-6">
                    <label for="body" class="mb-2 block text-sm font-medium text-gray-700 flex items-center">
                        Body
                        <svg width="7" height="7" class="ml-1" viewBox="0 0 7 7" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.11222 6.04545L3.20668 3.94744L1.43679 5.08594L0.894886 4.14134L2.77415 3.18182L0.894886 2.2223L1.43679 1.2777L3.20668 2.41619L3.11222 0.318182H4.19105L4.09659 2.41619L5.86648 1.2777L6.40838 2.2223L4.52912 3.18182L6.40838 4.14134L5.86648 5.08594L4.09659 3.94744L4.19105 6.04545H3.11222Z"
                                  fill="#EF4444"></path>
                        </svg>
                    </label>

                    <textarea id="body" name="body"
                              class="block w-full h-40 px-4 py-3 text-gray-700 bg-white border rounded-lg border-gray-300 placeholder-gray-400 focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 resize-none"
                              placeholder="Write a note..."><?= $note['body'] ?></textarea>

                    <?php if (!empty($errors['body'])) : ?>
                        <p class="text-red-500 text-sm mt-2"><?= htmlspecialchars($errors['body']) ?></p>
                    <?php endif; ?>
                </div>

                <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0">
                    <button type="submit"
                            class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        Update
                    </button>

                    <a href="/notes"
                       class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-500 rounded-lg hover:bg-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-50 text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>

    </main>

<?php require base_path('views/partials/footer.php') ?>