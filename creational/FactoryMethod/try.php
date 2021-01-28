<?php
spl_autoload_register(static function ($className) {
    include $className . '.php';
});

$loggerFactory = new  StdoutLoggerFactory();
$logger = $loggerFactory->createLogger();
$logger->log('stdout logger');

$loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
$logger = $loggerFactory->createLogger();
$logger->log('file logger');

/*
 * Этот шаблон полезен для каких-то общих обработок в классе, но требуемые подклассы динамически
 * определяются в ходе выполнения (runtime). То есть когда клиент не знает, какой именно подкласс
 * может ему понадобиться.
 */
