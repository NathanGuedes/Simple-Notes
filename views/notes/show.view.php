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
                <a href="/note/edit?id=<?= $note['id'] ?>" class="text-sx text-black-500 hover:underline mt-6">Edit</a>
                <form method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?=$note['id']?>">
                    <button class="text-sx text-red-500 hover:underline">Delete</button>
                </form>
            </li>
        </ul>
    </div>

</main>

<?php require base_path('views/partials/footer.php'); ?>
