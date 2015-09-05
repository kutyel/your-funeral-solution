<?php

  // Require mustache for our templates
  require '_assets/_libs/mustache/src/Mustache/Autoloader.php';
  Mustache_Autoloader::register();

  // Get view to load
  $v = $_GET['view'] ?: 'index';

  // Init template engine
  $m = new Mustache_Engine(array(
      'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/_assets/_views', array('extension' => '.html')),
      'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/_assets/_partials')
  ));

  // Render view
  print $m->render($v);

?>
