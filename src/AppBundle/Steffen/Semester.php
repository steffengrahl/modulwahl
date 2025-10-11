<?php
/**
 * Created by PhpStorm.
 * User: w01e6742rahl
 * Date: 17.08.17
 * Time: 18:24
 */

namespace AppBundle\Steffen;


use DateTime;

class Semester
{
    private $date_now;
    private $date_ws;
    private $date_ss;

    /**
     * Semester constructor.
     */
    public function __construct()
    {
        $this->date_now = new DateTime();
        $this->date_ws = new DateTime('2017-07-01');
        $this->date_ss = new DateTime('2017-02-01');
    }

    /**
     * @return string - short code for current semester
     */
    public function getCurrent()
    {
        if ($this->date_ss < $this->date_now && $this->date_now < $this->date_ws)
        {
            return 'ss';
        }

        return 'ws';
    }

    /**
     * @return string -
     */
    public function getYear()
    {
        return $this->date_now->format('y');
    }
}