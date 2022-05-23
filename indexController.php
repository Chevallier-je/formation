<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
  //nom de variable en Anglais.
  //KISS : Keep It Simple and Stupid 
  //pas de majuscule au début des key ou dans variable (Prenom --> prenom); 
  //NTU : Never Trust Users  : utilisateur spécifique pour la bdd
  //RT(f)M : Read The (Fucking) Manual 

  //Un controller doit faire 
  //1. se mettre en lien avec le model;
  include "model/model.php";

  //2. appeler la bonne fonction du model pour rappatirer des données ici
   
  $contacts = get_all_contacts(); 

  //3. Appel le bon tempalte
  include "vue/indexVue.php";

?>
