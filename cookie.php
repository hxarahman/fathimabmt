<?php

if(!isset($_COOKIE['Language'])){
    setcookie("Language","English", time() + (10 * 365 * 24 * 60 * 60));
    header("Location: /");
  }
?>