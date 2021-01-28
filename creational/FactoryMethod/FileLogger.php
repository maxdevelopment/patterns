<?php


class FileLogger implements LoggerInterface
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $message): void
    {
        echo $this->filePath . 'Msg: ' . $message . PHP_EOL;
    }
}
