<?php

class FindDate
{

    public $start;
    public $interval;
    public $end;

    public function __construct($start, $interval)
    {
        $this->start = $start;
        $this->interval = $interval;
    }

    public function finalDate()
    {
        $date = date_create($this->start);
        date_sub($date, date_interval_create_from_date_string($this->interval."seconds"));
        return $this->end = date_format($date, 'd-m-Y H:i:s.');
    }

    public function getTravelInfo()
    {
        $nbrSecParJour = 3600*24;
        $nbrSecParAn = $nbrSecParJour*365.25;
        $nbrSecParMois = $nbrSecParJour*30;

        $nbrAnnees = floor($this->interval / $nbrSecParAn);
        $reste = $this->interval % $nbrSecParAn;

        $nbrMois = floor($reste / $nbrSecParMois);
        $reste = $reste % $nbrSecParMois;

        $nbrSemaines = floor($reste / ($nbrSecParJour*7));
        $reste = $reste % ($nbrSecParJour*7);

        $nbrJours = floor($reste / $nbrSecParJour);
        $reste = $reste % $nbrSecParJour;

        $nbrHeures = floor($reste / 3600);
        $reste = $reste % 3600;

        $nbrMinutes = floor($reste / 60);
        $reste = $reste % 60;

        return "Between thoses two dates, thare are ".$nbrAnnees." year(s), ".$nbrMois." month(s), ".$nbrSemaines." week(s), ".$nbrJours." day(s), ".$nbrHeures." hour(s), ".$nbrMinutes." minut(s) et ".$reste. " second(s).";
    }

    public function backToTheFutureStepByStep()
    {

        $begin = new DateTime( $this->end );
        $end = new DateTime( $this->start );

        $step = new DateInterval('P1M8D');
        $daterange = new DatePeriod($begin, $step, $end);
        foreach ($daterange as $date){
            echo $date->format("d-m-Y, H:i:s") . "<br>";
        }

    }



}





