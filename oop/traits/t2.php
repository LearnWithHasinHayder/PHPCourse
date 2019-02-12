<?php
trait NumberSeriesOne{
    function numberSeriesA(){
        echo "Number Series A\n";
        // parent::numberSeriesA();
    }
    function numberSeriesB(){
        echo "Number Series B\n";
    }
}

class SomeClass{
    function numberSeriesA(){
        echo "Printing + Printing Number Series A\n";
    }
}

class NumberSeries extends SomeClass{
    use NumberSeriesOne;
}

$ns = new NumberSeries();
$ns->numberSeriesA();