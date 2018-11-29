<?php
declare(strict_types=1);

require_once 'SortingArray.php';

$myArray = new SortingArray();
print_r($myArray->sortArray([4,1,3]));
