<h2>Edit Post</h2>
<?= $this->Form->create($post) ?>
<?= $this->Form->control("title") ?>
<?= $this->Form->control("body") ?>
<?= $this->Form->control("category_id") ?>
<?= $this->Form->Button("Edit") ?>
<?= $this->Form->end() ?>