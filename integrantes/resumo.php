<?php
  include '../lib/fw.php';

  function pageTitle(){
    echo 'Resumo dos integrantes';
  }

  function mainContent(){
    include 'content/resumo.content.php';
  }

  include '../lib/main-template.php';
