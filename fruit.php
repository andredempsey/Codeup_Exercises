<?php

//Fruits Assignment 
//iterate array using foreach loop and show color of fruit
//Date:  13 May 14
//Name:  Andre Dempsey
//Codeup Baddies


$fruits = [
    ["type"=>"Apples","color"=>"red"],
    ["type"=>"Bananas","color"=>"yellow"],
    ["type"=>"Oranges","color"=>"orange"],
    ["type"=>"Pears", "color"=>"green"],
    ["type"=>"Kiwis", "color"=>"green"],
    ["type"=>"Grapes","color"=>"purple"]];

foreach ($fruits as $key =>$fruit) 
{
        echo "{$fruit['type']} are {$fruit['color']}.\n";

}