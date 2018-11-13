<?php
  include '../lib/fw.php';

  function pageTitle(){
    echo 'Parte da Ellen';
  }

  function mainContent(){
    include 'content/ellen.content.php';
  }

  include '../lib/main-template.php';