<?php 
  ob_start(); 
?> 
<h1>Mon tableau</h1>
<?php foreach ($contacts as $contact) { ?>
  <?= $contact['forname'] ?> <?= $contact['phone'] ?>
  <a href="showController.php?id=<?= $contact['id'] ?>">voir le détail </a><br />
<?php } ?>
<?php 
  $title = "Index";
  $content = ob_get_clean();
  include "layout.php"; 
?>