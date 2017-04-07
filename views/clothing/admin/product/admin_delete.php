<?php require_once ROOT . '/views/clothing/admin/header_admin.php';?>

    <div class="breadcrubms">
        <ol class="dreadcrumbs">
            <li><a href="/admin">Админпанель</a></li>
            <li class="active">Управление товарами</li>
        </ol>
    </div>
<section>
    <div class="contaiter">
        <div class="row">
            <br>
            <h4>Удалить товар <?=$id;?></h4>
            <form action="" method="post">
                <input type="submit" name="submit" value="Удалить">
            </form>
        </div>
    </div>
</section>

<?php require_once ROOT . '/views/clothing/admin/footer_admin.php';?>