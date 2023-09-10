<?php

spl_autoload_register(fn($classname)=> require_once __DIR__."/classes/$classname.php");