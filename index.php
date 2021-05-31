<?php
if( !session_id() ) session_start();
require_once 'app/init.php';

use app\core\App as App;

$app = new App;

