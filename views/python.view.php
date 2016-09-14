<?php
// descriptor array
$desc = array(
    0 => array('pipe', 'r'), // 0 is STDIN for process
    1 => array('pipe', 'w'), // 1 is STDOUT for process
    2 => array('pipe', 'w') // 2 is STDERR for process
);

// command to invoke markup engine
$cmd = "python hello.py";

// spawn the process
$p = proc_open($cmd, $desc, $pipes);

if(is_resource($p)){
    print fgets($pipes[1]);
    
    fclose($pipes[1]);
    fclose($pipes[0]);
    fclose($pipes[2]);
    $returned = proc_close($p);
    echo $returned;
} else {
    echo 'no resource available';
}