<?php
  include '../lib/fw.php';

  function pageTitle(){
    echo 'Parte do Mateus';
  }

  function mainContent(){
    include 'content/mateus.content.php';
  }

  include '../lib/main-template.php';
