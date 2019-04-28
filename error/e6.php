<?php
$person = [
    'name' => 'XYZ',
    'id' => '6625535524',
    'age' => '24',
    'sex' => 'M',
];

function processMaternityLeave($person)
{
    if($person['age']<18){
        throw new Exception("Too Young");
    }else if ('F' == $person['sex']) {
        echo "Processed";
    }
    
    else {
        throw new GenderMismatchException($person);
    }
}

class GenderMismatchException extends Exception
{

    private $person;
    public function __construct($person)
    {
        $this->person = $person;
        parent::__construct("Gender Mismatch \n");
    }
    public function getDetailedMessage()
    {
        echo "Gender Mismatch for Person with ID {$this->person['id']} \n";
    }
}

try {
    processMaternityLeave($person);
} catch (GenderMismatchException $e) {
    echo $e->getMessage();
    echo $e->getDetailedMessage();
} catch (Exception $e){
    echo $e->getMessage();
}
