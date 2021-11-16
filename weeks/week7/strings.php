<?php
// sub-strings and replace

$statement = 'Presently, I am reading The Looming Tower';
echo substr($statement, 0);
echo '<br>';
echo $statement;
echo '<br>';
echo substr($statement, 0, 4);
echo '<br>';
echo substr($statement, 0, 14);
echo '<br>';
echo substr($statement, -7);
echo '<br>';
echo substr($statement, -15, 5);
echo '<br>';

// the other function will be string replace

$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book, the Looming Tower.';

echo str_replace('the', 'The', $statement2);
