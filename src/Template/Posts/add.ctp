<h2>Add Post</h2>
<?= $this->Form->create($post) ?>
<?= $this->Form->control("title") ?>
<?= $this->Form->control("body") ?>
<?= $this->Form->control("category_id") ?>
<?= $this->Form->Button("Add") ?>
<?= $this->Form->end() ?>


<!--
<form method="post">
    <input type="text" name="title" placeholder="Title">
    <textarea name="body" rows="8" cols="80" placeholder="Body"></textarea>
    <select name="category_id">
        <?php foreach ($categories as $cat): ?>
            <option><?= $cats ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Add" />
</form>
-->
