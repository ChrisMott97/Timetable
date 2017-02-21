<?php
/** Holds a single record from Buildings table. */
class Building
{
    public $id;
    public $name;
    public $description;
    
    public function __construct($data = null)
    {
        if (is_array($data)) {
            if (isset($data['id'])) $this->id = $data['id'];
            
            $this->name = $data['name'];
            $this->description = $data['description'];
        }
    }
}

