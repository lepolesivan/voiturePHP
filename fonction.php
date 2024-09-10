<?php 
    function checkId($cars, $id){
        foreach($cars as $car){
            if($car['id'] == $id){
                return $car;
            }
        }
        return null;
    }