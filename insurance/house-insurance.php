<?php

  // Require mustache for our templates
  require '_assets/_libs/mustache/src/Mustache/Autoloader.php';
  Mustache_Autoloader::register();

  // Init template engine
  $m = new Mustache_Engine(array(
      'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/_assets/_views'),
      'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/_assets/_partials')
      
  ));
  // Render view
  print $m->render('house-insurance');

?>
