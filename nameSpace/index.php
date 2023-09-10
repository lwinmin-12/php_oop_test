<?php

use Html\button\Button;
use Html\form\Table;

require_once "Body.php";
require_once "Button.php";
require_once "Form.php";

require_once "Head.php";
require_once "Input.php";
require_once "Select.php";
require_once "Table.php";

$btn = new Button;
var_dump($btn->button());
$table= new Table;
var_dump($table->table());
