<div class="row">
    <div>

        <h2><?= $cat->name ?></h2>
        <?=
        $this->Html->link("Edit", [
        "controller" => "Categories",
        "action" => "edit",
        $cat->id
        ])
        ?>
        <?=
        $this->Html->link("Delete", [
        "controller" => "Categories",
        "action" => "delete",
        $cat->id
        ])
        ?>
        <h2>Posts Lists</h2>
        <?php foreach ($cat->posts as $post): ?>
        <li>
            <?= $post-> title?>
        </li>
        <?php endforeach; ?>  
        <li>
            <?=
            $this->Html->link("Category Lists", [
            "controller" => "Categories",
            "action" => "index",
            ])
            ?>
        </li>
    </div>

</div>