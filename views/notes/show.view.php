<?php require basePath("views/partials/head.php");?>
<?php require basePath("views/partials/nav.php");?>
<?php require basePath("views/partials/banner.php");?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <p>Written by user: <?= $note[0]['userid']; ?></p>
            <p class="mb-6">
                <a href="/notes" class="text-blue-300 underline">go back</a>
            </p>
            <form method="POST">
                <input type="hidden" name="_method" id="_method" value="DELETE">
                <input type="hidden" name="id" id="id" value="<?=$note[0]['id']?>">
                <button type="submit" class="text-red-600 mt-6">Delete</button>
            </form>
        </div>
    </main>
<?php require basePath("views/partials/footer.php");?>
