<?php
require_once 'array-cadastro.php';

session_destroy();
header('Location: cadastro.php');