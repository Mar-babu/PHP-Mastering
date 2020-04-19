<?php
trait NumberSeriesOne{
//    use NumberSeriesOne;
    function numberSeriesA(){
        echo "Number Series A\n";
//        parent::numberSeriesA();
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
    use NumberSeriesOne;

//    function numberSeriesA(){
//        echo "Printing Number Series A\n";
//    }
}

$ns = new NumberSeries();
$ns->numberSeriesA();


//19-04-2020