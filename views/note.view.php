<?php require 'views/partials/head.php'; ?>
<?php require 'views/partials/nav.php'; ?>
<?php require 'views/partials/banner.php'; ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul role="list" class="divide-y divide-gray-100">
            <li class="flex flex-col gap-y-2 py-4">
                <p class="font-semibold text-gray-800">
                    <?= nl2br(htmlspecialchars($note['body'])) ?>
                </p>
                <a href="/notes" class="text-blue-600 hover:underline text-sm self-start">← Go back</a>
            </li>
        </ul>
    </div>

</main>

<?php require 'views/partials/footer.php'; ?>
