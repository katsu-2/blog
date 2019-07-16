<h1>投稿一覧</h1>
<button>
  <?= $this->Html->link('投稿する', ['action' => 'add']) ?>
</button>

<table>
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Content</th>
    <th>Created</th>
  </tr>

<?php foreach ($posts as $post): ?>
  <tr>
    <td><?= $post->id ?></td>
    <td>
      <?= $this->Html->link($post->title, ['action' => 'view', $post->id]) ?>
    </td>
    <td>
      <?= h($post->content) ?>
    </td>
    <td>
      <?= $post->created ?>
    </td>
    <td>
      <?= $this->Form->postLink(
        '削除',
        ['action' => 'delete', $post->id],
        ['confirm' => '本当に削除しますか？']
      )
      ?>
      <?= $this->Html->link('編集', ['action' => 'edit', $post->id]) ?>
    </td>
  </tr>
<?php endforeach; ?>
</table>
