<?php
require_once 'arrays-fatal.php';

session_destroy();
header('Location: home.php');