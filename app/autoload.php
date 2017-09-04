<?php

function chargerClasse ($classname) {
    require 'src/' . $classname . '.php';
}

spl_autoload_register('chargerClasse');