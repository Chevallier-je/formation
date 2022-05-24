<?php 
  ob_start(); 
?> 
<h1>Mon tableau</h1>
<?php foreach ($contacts as $contact) { ?>
  <?= $contact['name'] ?> <?= $contact['phone'] ?>
  <a href="showController.php?id=<?= $contact['id'] ?>">voir le détail </a> <button><a href="fpdfController.php?id=<?= $contact['id'] ?>">PDF </a></button><br />
<?php } ?>
<?php 
  $title = "Index";
  $content = ob_get_clean();
  include "layout.php"; 
?>