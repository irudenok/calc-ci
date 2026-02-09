<?php

require_once __DIR__ . '/../src/Calculator.php';

$result = sum(2, 5);

if ($result !== 5) {
    throw new Exception('Что то сломалось!');
}