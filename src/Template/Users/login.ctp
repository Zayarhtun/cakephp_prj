<h2>Login</h2>
<?= $this->Form->create() ?>
<?= $this->Form->control("email") ?>
<?= $this->Form->control("password") ?>
<?= $this->Form->Button("Login") ?>
<?= $this->Form->end() ?>