<?php
function personName()
{
    $name = array(
        "1" => "John Doe",
        "2" => "Will Smith",
        "3" => "Dyne Paul",
    );
    return array_keys($name);
}

function personLocation()
{
    $location = array(
        "John Doe" => "USA",
        "Will Smith" => "AUS",
        "Dyne Paul" => "NZ",
    );
    return array_values($location);
}
$keys = personName();
$values = personLocation();
$newArray = array_combine($keys, $values);
print_r($newArray);