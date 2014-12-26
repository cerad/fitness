<?php

namespace AppBundle\Controller;

class BloodSugar
{
    protected $id;
    protected $dt;      // date time
    
    protected $bs;
    
    protected $flag; // beforeMeal, afterMeal, beforeWorkout, afterWorkout, morningFast
    
    protected $memo;
}