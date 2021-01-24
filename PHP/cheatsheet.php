<?php

$var = '';

/* PHP Standard Functions */


// Will return false if $var has been assigned the constant NULL, $var has not been set to any value yet (undefined) $var has been deleted using the unset function.
if (isset($var)) {
    // 
}

// Prints string
echo "string";
print "string";

//Return the current time in seconds
echo time();

// Converts an optional time in seconds to a date based on format
// Syntax: Date(format, time)
echo date("l jS \of F Y h:i:s A");

// Returns a random integer between min and max
// Syntax: mt_rant(min, max)
echo mt_rand(10, 20);

// Sends a raw HTTP Header
/* Examples: 
            header("Content-type: text/plain);
*/

// Ends execution and sends back optional message
die('message');

//Includes and evaluates the specified file path such as 
// "app/model/home.php"
include "app/model/home.php";


/* PHP Array Functions */

// returns the length of an array var
count($var);

// prints the var's contents
print_r($var);

// removes an element off the end of the array var
array_pop($var);

// shifts an element of the beginning of the array var
array_shift($var);

// pushes or adds one or more element into the end of the array var
array_push($var, "element");

// Sorts the array var
sort($var);

// Returns an array with elements of $var in reverse order
array_reverse($var);sdfaSdaDsaSedadEsaSDareadaDaeDADQEeADEaeEzxcEdZDEEV a  Was V  wV  wv  wc   EW ew

// Randomly selects a random entry form the array and returns the key or keys of the random etries.
array_rand($var);

/* PHP JSON Functions */

// Returns JSON equivalent for the given object/array/value
json_encode($var);

// Parse the given jSON data string and returns an equivalent associative array object
json_decode($var);


/* PHP String Functions */

// Returns the length of string
strlen($var);

// Returns the position of the first occurrence of substr in str, or FALSE if not found
strpos($var, $str);

// Returns a lowercase version of $var
strtolower($var);

// Returns a uppercase version of $var
strtoupper($var);

// Returns an array of substrings of $var split by delimiter
explode(delimiter, $var);


/* Regex Functions */

// returns whether str matches regex
preg_match(regex, str);

// returns a new string with all substrings of str that match regex replaced by repl
preg_replace(regex, repl, str);

// return an array of strings from given str split apart using given regex as delimiter 
preg_split(regex, str);

/* PH File Functions */

// Reads entire file path.
file(path);

// Returns whether a file or directory path exists
file_exists(path);

// Reads entire file path into a string
file_get_contents(path);

// Writes a string data to a file path
file_put_contents(path, data);

// Returns an array of all files and directories inside the specified path including
scandir(path);

// Returns an array of path names matching pattern
glob(pattern);

// Given a filename path, this function will strip any leading directory from a file path and returns just the filename
basename(path);

/* PHP Superglobals Reference */


// Superglobal array which contains query paramets passed in via a GET request
$_GET;

// Superglobal array which contains POST paramets passed in via a POST request
$_POST;

/* PDO Functions */

// Constructor, connecting to the database using the given host value , username and password
new \PDO('mysql:dbname=database;host=localhost', 'username', 'pwd');

// returns a PDOStatemnet after executing sqlquery in the PDO's connected database
query(sqlquery);

// executes a SQL statement. returns the number of affected rows.
exec(sqlquery);

// return the number of columns in the result set.
columnCount();

// returns the next row from the result set./
fetch();

// returns all of the rows in an array of arrays representing row each from the set
fetchAll();

// Returns the number of rows in the result set.
rowCount();