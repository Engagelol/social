<?php require 'header.php'; ?>
    <?php foreach ($products as $product): ?>
      <h3><?= $product['title'] ?></h3>
      <p><?= $product['content'] ?></p>
    <?php endforeach; ?>
  </body>
</html>
