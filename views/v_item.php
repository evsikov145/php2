<?foreach ($query as $data):?>

    <div class="single-content">
        <img src="<?= $data['path'] ?>" alt="<?= $data['name'] ?>">
        <p class="single__name"><?= $data['name'] ?></p>
        <p class="single__desc"><?= $data['desk'] ?></p>
        <p class="single__price">Стоимость: <?= $data['price'] ?> рублей</p>
        <a href="index.php?c=basket&act=add&id=<?= $data['id'] ?>">Купить</a>
    </div>

<? endforeach;?>