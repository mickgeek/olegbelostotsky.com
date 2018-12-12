<?php $title = 'Posts'; ?>
<?php ob_start(); ?>
  <h1>Posts</h1>
  <ul class="post-list">
    <?php foreach ($this->posts as $id => $post): ?>
      <li>
        <a href="/posts/<?= $id ?>"><?= $post['title'] ?></a>
        <sup><?= $post['date'] ?></sup>
      </li>
    <?php endforeach; ?>
  </ul>
<?php $content = ob_get_contents(); ?>
<?php ob_end_clean(); ?>

<?php require($this->kernel->getTemplateDir() . '/layout.php'); ?>
