<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul role="list" class="divide-y divide-gray-100">
            <?php foreach ($notes as $note): ?>
                <li class="py-2">
                    <a class="text-gray-800 hover:underline font-semibold block" href="/note?id=<?= $note['id'] ?>">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a class="text-sx text-blue-600 hover:underline" href="/notes/create">Create Note</a>
        </p>
    </div>

</main>

<?php require base_path('views/partials/footer.php'); ?>
