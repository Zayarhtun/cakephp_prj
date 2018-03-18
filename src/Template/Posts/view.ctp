<div class="row">
    <div>
        <h2><?= $post->title ?></h2>
        <?=
        $this->Html->link("Edit", [
            "controller" => "Posts",
            "action" => "edit",
            $post->id
        ])
        ?>
        <?=
        $this->Html->link("Delete", [
            "controller" => "Posts",
            "action" => "delete",
            $post->id
        ])
        ?>
        <p><?= $post->body ?></p>
        <p>Category : <?= $post->category->name ?></p>
        <?=
        $this->Html->link("Post Lists", [
            "controller" => "Posts",
            "action" => "index",
        ])
        ?>
    </div>

</div>