<?php
trait NumberSeriesOne{
    function numberSeriesA(){
        echo "Number Series A\n";
    }
}

trait NumberSeriesTwo{
    function numberSeriesA(){
        echo "Number Series A++\n";
    }
}


class NumberSeries{
    use NumberSeriesOne, NumberSeriesTwo{
        NumberSeriesOne::numberSeriesA as numberSeriesAA;
        NumberSeriesTwo::numberSeriesA as numberSeriesAAA;
    }

    function numberSeriesA(){
        echo "Printing + Printing Number Series A\n";
    }
}

$ns = new NumberSeries();
$ns->numberSeriesAAA();