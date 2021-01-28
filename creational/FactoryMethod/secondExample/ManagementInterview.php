<?php


class ManagementInterview extends HiringManager
{

    public function makeInterviewer(): Interview
    {
        return new Manager();
    }
}
