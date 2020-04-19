<?php
trait NumberSeriesOne{
    function numberSeriesA(){
        echo "Number Series A\n";
    }
    function numberSeriesB(){
        echo "Number Series B\n";
    }
}

trait NumberSeriesTwo{
//    use NumberSeriesOne;
    function numberSeriesC(){
        echo "Number Series C\n";
    }
    function numberSeriesD(){
        echo "Number Series D\n";
    }
}

Class NumberSeries{
    use NumberSeriesOne, NumberSeriesTwo;
}

$ns = new NumberSeries();
$ns->numberSeriesA();
$ns->numberSeriesB();
$ns->numberSeriesD();

//Trait Can use Anothor trait as Also Class can use many traits