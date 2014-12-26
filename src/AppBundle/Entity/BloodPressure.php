<?php

namespace AppBundle\Controller;

class BloodPressure
{
    protected $id;
    protected $dt;      // date time
    
    protected $sys;
    protected $dia;
    protected $pulse;
    protected $oxygen;
    
    protected $flag; // beforeMeal, afterMeal, beforeWorkout, afterWorkout, atRest
    
    protected $memo;
}