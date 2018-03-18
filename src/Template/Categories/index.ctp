<div class="row">
    <div class="medium-12">
        <h2>Categories Lists</h2>
        <ul>
            <?php foreach ($categories as $cat): ?>
                <li>
                    <?=
                    $this->Html->link($cat->name, [
                        "controller" => "Categories",
                        "action" => "view",
                        $cat->id
                    ])
                    ?>
                </li>
                
<?php endforeach; ?>  
        </ul>
    </div>
</div>

