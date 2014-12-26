<?php

namespace AppBundle\Controller;

class Foodx
{
    protected $id;
    
    protected $cat1;  // Categories
    protected $cat2;
    
    protected $name;
    protected $amount;  // serving etc
    protected $amountPerServing;
    
    protected $calories;
    protected $caloriesFromFat;
    
    protected $fat; //grams
    protected $fatSat;
    protected $fatPolyUnsat;
    protected $fatMonoUnsat;
    
    protected $cholesterol; // mg
    protected $sodium;
    protected $potassium;
    
    protected $carbohydrate; // g
    protected $carbFiber;
    protected $carbSugar;
    
    protected $protein;
    protected $alcohol;
    
    protected $memo;
}