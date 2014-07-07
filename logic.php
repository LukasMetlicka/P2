<?php
//Make wordlist array
$list = file('wordlist.txt');
$count = 0;

foreach ($list as $line_num => $line ) {
	$wordlist[$line_num] = "$line";
}

//check if the variable $pass_length is invalid

if ( empty( intval($_POST["characters"]) ) == true ) {
	$pass_length = 4;
} else {
	$pass_length = intval ( $_POST['characters'] );
}
//save the value given by user
$_SESSION['pass'] = $pass_length;
$password = '';
$i = 0;

while ( $i < $pass_length ) {
	$word = $wordlist[rand(0,109582)];
	$password = $password.$word;
	$i++;
}