<h1>編集</h1>

<?php
  echo $this->Form->create($post);
  echo $this->Form->control('title');
  echo $this->Form->control('content');
  echo $this->Form->button('編集する', ['class' => 'btn btn-warning']);
  echo $this->Form->end();
?>
