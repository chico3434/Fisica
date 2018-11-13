<?php
  include '../lib/fw.php';

  function pageTitle(){
    echo 'Parte do Henrique';
  }

  function mainContent(){
    include 'content/henrique.content.php';
  }

  include '../lib/main-template.php';
