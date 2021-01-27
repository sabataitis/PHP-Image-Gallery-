<?php
include 'shared/head.php';
include 'shared/navigation.php';
?>
<section class="flex flex-col items-center">
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <div>
            <p>
                <label class="label" for="login">Username:</label>
            </p >
            <input type="text" class="border-2 my-2" name="login"
                   id="login" <?php if (isset($old_login)): ?> value="<?= $old_login; ?>"<?php endif; ?> />
        </div>
        <div>
            <p>
                <label class="label" for="password">Password:</label>
            </p>
            <input type="password" class="border-2 my-2" name="password"
                   id="password" <?php if (isset($old_pass)): ?> value="<?= $old_pass; ?>"<?php endif; ?> />
        </div>
        <button type="submit" class="capitalize text-md py-2 px-4 rounded bg-gray-200">Submit</button>
        <button type="reset" class="capitalize text-md py-2 px-4 rounded bg-gray-200">Cancel</button>
    </form>
    <div class="bg-gray-200 w-72 mt-4">
        <?php if (count($errors) > 0): ?>
            <p class="font-bold">
                Fix the following issues:
            </p>
            <?php foreach ($errors as $key => $error): ?>
                <p class="text-sm">
                    <?= $error ?>
                </p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
<?php
include 'shared/footer.php';
?>
