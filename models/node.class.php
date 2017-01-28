<?php

class Node
{
    public $nodeid;
    public $identifier;
    public $x;
    public $y;

    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['nodeid'])) $this->nodeid = $data['nodeid'];
            
            $this->identifier = $data['identifier'];
            $this->x = $data['x'];
            $this->y = $data['y'];
        }
    }
}

