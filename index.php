<?php
echo "<b>Question 2</b> <br>";
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2018/05/24";
echo "The value of \$tar: ".$tar."<br>";
echo "<b> Question 3</b><br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br>";
if ($date < $tar) {
    echo"The future <br>";
}elseif ($date >$tar){
	echo "The past <br>";
} else{
	echo "oops<br>";
}
echo "<b>Question 4</b><br>";
echo 'The / appears in date ';
echo substr_count($date, '/')." ";
echo "times. <br>"; 
echo "At positions: ";
echo strpos($date, '/'), ", ", strrpos($date, '/')."<br>";
echo "<b>Question 5</b><br>";
echo 'Number of words in $date: ', str_word_count($date)."<br>";
echo "<b>Question 6</b><br>";
echo "length of 'Hello Class': ", strlen("Hello Class")."<br>";
?>