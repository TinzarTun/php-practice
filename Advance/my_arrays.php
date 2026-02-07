<?php
//Numeric
$names[0] = "MgMg";
$names[1] = "MaMa";
$names[2] = "KoKo";
echo $names[1] . " and " . $names[2] . " are " . $names[0] . " 's neighbours" ."<br/>";

// Key/Value
$address['name'] = "Peter";
$address['occupation'] = "actor";
$address['age'] = "30";
echo $address["name"] . " is " . $address["age"] . " years old.<br/><br/>";

foreach ($address as $key=>$value)
{
    echo "<b>$key:</b> $value<br>";
}

print_r($names);
echo "<br />";
print_r($address);

echo "<br />";
var_dump($names);

echo "<br />";
var_dump($address);

echo "<br /><br />";

// multidimensional array
$families = array(  "Griffin" => array ("Peter", "Lois", "Megan",),
    "Quagmire"  => array ("Glenn"),
    "Brown"  => array ("Cleveland", "Loretta", "Junior")
);
echo $families['Brown'][1];


$arraya = array('a','b','c');
print_r($arraya);
echo("<br>") ;
foreach($arraya as $key=>$value)
{      if($value == 'b')
    {
        $d = 'd';
        array_push($arraya, $d);      //value d is inserted in arraya
        print_r($arraya);
    }
}

// Removing
echo "<br> ******** removing from array<br/>";
$my_array = array("Element 1", "Element 2", "Element 3");
foreach ($my_array as $name) {
    echo "$name<br/>";
}
unset($my_array[1]);
echo "<br/> After removing <br/>";
foreach ($my_array as $name) {
    echo "$name<br/>";
}

// Sorting
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
echo "<br/>Asc<br />";
foreach ($fruits as $key => $val)
{
    echo  $val . "<br/>";
}

rsort($fruits);
echo "<br/>DES<br />";
foreach ($fruits as $key => $val)
{
    echo  $val . "<br/>";
}

$capitals['CA'] = "Sacramento";
$capitals['TX'] = "Austin";
$capitals['OR'] = "Salem";
echo "<br/>Associative Sort with Value<br />";
asort($capitals) ;
foreach($capitals as $ans=>$value)
    echo $value."<br/>";

echo "<br/>Associative Sort with Key<br />";
ksort($capitals) ;
foreach($capitals as $ans=>$value)
    echo $value."<br/>";


echo "<br/>Array_splice<br />";
$authors = array("Steinbeck", "Kafka", "John", "Peter");
$moreAuthors = "Milton";
array_splice($authors, 2, 0, $moreAuthors);
print_r($authors);

echo "<br/>String to array (splitting strings)<br />";
$fruitString  = "apple.pear.banana.strawberry.peach";
$fruitArray = explode( ".", $fruitString);
print_r($fruitArray);


echo "<br />";
$fruitString = implode(",", $fruitArray);
echo $fruitString."<br />";

$myBook = array( "The Grapes of Wrath", "John Steinbeck", 1939 );
    list( $title, $author, $pubYear ) = $myBook;
echo $title ."<br />";
echo $author ."<br />";
echo $pubYear;
?>