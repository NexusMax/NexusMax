<?php require_once ROOT . '/views/clothing/admin/header_admin.php';?>
    <div class="breadcrubms">
        <ol class="dreadcrumbs">
            <li><a href="/admin">Админпанель</a></li>
            <li class="active">Управление товарами</li>
        </ol>
    </div>

    <a href="/admin/product/create" class="btn btn-default back"><i class="fa fa-plus"></i>Добавить товар</a>
    <h4>Список товаров</h4>
    <br>

    <table class="table-bordered table-striped table">
        <tr>
            <th>ID товара</th>
            <th>Название товара</th>
            <th>Цена</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($productList as $product): ?>
            <tr>
                <td><?=$product['id'];?></td>
                <td><?=$product['name'];?></td>
                <td><?=$product['price'];?></td>
                <td><a href="/admin/product/update/<?= $product['id'];?>" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
                <td><a href="/admin/product/delete/<?= $product['id'];?>" title="Удалить"><i class="fa fa-times"></i></a></td>
            </tr>

        <?php endforeach;?>
    </table>


<?php require_once ROOT . '/views/clothing/admin/footer_admin.php';?>