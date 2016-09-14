<?php
// descriptor array
$desc = array(
    0 => array('pipe', 'r'), // 0 is STDIN for process
    1 => array('pipe', 'w'), // 1 is STDOUT for process
    2 => array('pipe', 'w') // 2 is STDERR for process
);

// command to invoke markup engine
$cmd = "python python_example.py";

// spawn the process
$p = proc_open($cmd, $desc, $pipes);

fclose($pipes[0]);

// read the output from the engine
$output = stream_get_contents($pipes[1]);

// all done! Clean up
fclose($pipes[1]);
fclose($pipes[2]);
proc_close($p);

echo "<html>$output</html>";