<?php


class DevelopmentInterview extends HiringManager
{

    public function makeInterviewer(): Interview
    {
        return new Developer();
    }
}
