<?php
  include '../lib/fw.php';

  function pageTitle(){
    echo 'Parte do Francisco';
  }

  function mainContent(){
    include 'content/francisco.content.php';
  }

  include '../lib/main-template.php';