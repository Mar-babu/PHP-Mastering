<?php

$string = "Lorem ipsum dolor sit amet consectetor, adipiscing elit. Esse vitae magni corporis maiores cupiditate reiciendis, commodi adipiscirrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr ex explicabo molestias";
//echo $string;

echo wordwrap($string,26,"\n",true);
//echo wordwrap($string,26,"<br/>",true);  //for website
//echo wordwrap($string,26);