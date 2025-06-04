<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul role="list" class="divide-y divide-gray-100">
            <li class="flex flex-col gap-y-2 py-4">
                <a href="/notes" class="text-blue-600 hover:underline text-sx mb-6">Go back</a>
                <p class="font-semibold text-gray-800">
                    <?= nl2br(htmlspecialchars($note['body'])) ?>
                </p>
                <form method="POST" class="mt-6">
                    <input type="hidden" name="id" value="<?=$note['id']?>">
                    <button class="text-sx text-red-500 hover:underline">Delete</button>
                </form>
            </li>
        </ul>
    </div>

</main>

<?php require base_path('views/partials/footer.php'); ?>
