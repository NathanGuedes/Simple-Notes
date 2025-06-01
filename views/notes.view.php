<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php require 'views/partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul role="list" class="divide-y divide-gray-100">
            <?php foreach ($notes as $note): ?>
                <li class="py-2">
                    <a class="text-blue-600 hover:underline font-semibold block" href="/note?id=<?= $note['id'] ?>">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</main>

<?php require 'views/partials/footer.php'; ?>
