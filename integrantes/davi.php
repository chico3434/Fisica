<?php
  include '../lib/fw.php';

  function pageTitle(){
    echo 'Parte do Davi';
  }

  function mainContent(){
    include 'content/davi.content.php';
  }

  include '../lib/main-template.php';