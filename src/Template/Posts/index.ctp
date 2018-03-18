<div class="row">
    <div class="medium-12">
        <h2>Post Lists</h2>
        <ul>
            <?php foreach ($posts as $post): ?>
            <li>
                <?= $this->Html->link($post->title,[
                       "controller" => "Posts",
                       "action" => "view",
                       $post->id
                    ])
                ?>
            </li>
            <?php endforeach; ?>  
        </ul>
    </div>
</div>

