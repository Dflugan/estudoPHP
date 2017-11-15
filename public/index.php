<?php
//teste
//teste master
//teste origin
// teste conflito master
require '../bootstrap.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'index';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

Foundation\Request::dispatch($page, $action);
