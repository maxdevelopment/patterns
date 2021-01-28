<?php
spl_autoload_register(static function ($className) {
    include $className . '.php';
});

$managementInterview = new ManagementInterview();
$managementInterview->takeInterview();

$developmentInterview = new DevelopmentInterview();
$developmentInterview->takeInterview();

/*
 * Этот шаблон полезен для каких-то общих обработок в классе, но требуемые подклассы динамически
 * определяются в ходе выполнения (runtime). То есть когда клиент не знает, какой именно подкласс
 * может ему понадобиться.
 */
