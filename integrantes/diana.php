<?php
  include '../lib/fw.php';

  function pageTitle(){
    echo 'Parte da Diana';
  }

  function mainContent(){
    include 'content/diana.content.php';
  }

  include '../lib/main-template.php';