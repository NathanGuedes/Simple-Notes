<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php require 'views/partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul role="list" class="divide-y divide-gray-100">
            <?php foreach ($notes as $note): ?>
                    <div class="min-w-0 flex-auto">
                        <li class="flex justify-between gap-x-6 py-2">
                            <a class="text-blue-500 hover:underline" href="/note?id=<?= $note['id'] ?>" >
                                <p class="font-semibold "><?= htmlspecialchars($note['body']) ?></p>
                            </a>
                        </li>
                    </div>
            <?php endforeach; ?>
        </ul>
</main>

<?php require 'views/partials/footer.php'; ?>
