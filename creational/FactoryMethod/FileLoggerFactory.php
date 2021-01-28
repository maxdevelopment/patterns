<?php


class FileLoggerFactory implements LoggerFactoryInterface
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): LoggerInterface
    {
        return new FileLogger($this->filePath);
    }
}
