<?php
  include '../lib/fw.php';

  function pageTitle(){
    echo 'Parte do Kevin';
  }

  function mainContent(){
    include 'content/kevin.content.php';
  }

  include '../lib/main-template.php';
