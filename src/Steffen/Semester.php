<?php

declare(strict_types=1);

namespace App\Steffen;

use DateTime;

class Semester
{
    private $date_now;
    private $date_ws;
    private $date_ss;

    public function __construct()
    {
        $this->date_now = new DateTime();
        $this->date_ws = new DateTime('2017-07-01');
        $this->date_ss = new DateTime('2017-02-01');
    }

    public function getCurrent(): string
    {
        if ($this->date_ss < $this->date_now && $this->date_now < $this->date_ws) {
            return 'ss';
        }

        return 'ws';
    }

    public function getYear(): int
    {
        return (int)$this->date_now->format('y');
    }
}
