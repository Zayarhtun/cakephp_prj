<h2>Register</h2>
<?= $this->Form->create($user) ?>
<?= $this->Form->control("name") ?>
<?= $this->Form->control("email") ?>
<?= $this->Form->control("password") ?>
<?= $this->Form->Button("Register") ?>
<?= $this->Form->end() ?>