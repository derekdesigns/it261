<?php
// my implode and my wines function!!

// cab, merlot, malbec, syrah, and blend


$wines = array(
    'cab',
    'merlot',
    'malbec',
    'syrah',
    'blend'
);

// echo wines

$my_wines = implode(', ', $wines);
echo $my_wines;