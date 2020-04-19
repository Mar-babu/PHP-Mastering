<?php
/*
trait NumberSeriesOne{
//    use NumberSeriesOne;
    function numberSeriesA(){
        echo "Number Series A\n";
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

Class NumberSeries extends SomeClass{
    use NumberSeriesOne{
        numberSeriesA as numberseriesAA;
    }

    function numberSeriesA(){
        echo "Printing Number Series A\n";
    }
}

$ns = new NumberSeries();
$ns->numberseriesAA() ;

*/


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


Class NumberSeries{
    use NumberSeriesOne, NumberSeriesTwo{
        NumberSeriesOne::numberSeriesA as numberseriesAA;
        NumberSeriesTwo::numberSeriesA as numberseriesAAA;
    }

    function numberSeriesA(){
        echo "Printing Number Series A\n";
    }
}

$ns = new NumberSeries();
$ns->numberseriesA() ;
$ns->numberseriesAA() ;
$ns->numberseriesAAA() ;

//19-04-2020