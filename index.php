<?php
$strings = array('AKLWC139', 'LMNSDO', 'akwSKWsm');
foreach ($strings as $testcase) {
    if (ctype_upper($testcase)) {
        echo "Строка $testcase состоит только из букв в верхнем регистре.\n";
    } else {
        echo "Строка $testcase не состоит только из букв в верхнем регистре.\n";
    }
}