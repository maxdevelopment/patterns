<?php


class StdoutLogger implements LoggerInterface
{

    public function log(string $message): void
    {
        echo $message . PHP_EOL;
    }
}
