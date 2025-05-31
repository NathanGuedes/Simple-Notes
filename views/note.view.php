<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php require 'views/partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul role="list" class="divide-y divide-gray-100">
            <div class="min-w-0 flex-auto">
                <p class="mb-4">
                    <a href="/notes" class="text-blue-500 hover:underline mb-4 inline-block">Go back</a>
                </p>
                <li class="flex justify-between gap-x-6 py-2">
                    <p class="font-semibold "><?= nl2br(htmlspecialchars($note['body'])) ?></p>
                </li>
            </div>
        </ul>
</main>

<?php require 'views/partials/footer.php'; ?>
