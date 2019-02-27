<?php

function dayOfBirth($birthDate){
    
    $date= new DateTime($birthDate);
    return $date->format('N');
    
    
}

$birthday = ('21.10.1987');
var_dump(dayOfBirth($birthday));