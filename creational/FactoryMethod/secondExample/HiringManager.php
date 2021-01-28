<?php


abstract class HiringManager
{
    abstract public function makeInterviewer(): Interview;

    public function takeInterview(): void
    {
        $interviewer = $this->makeInterviewer();
        echo $interviewer->askQuestions() . PHP_EOL;
    }
}
