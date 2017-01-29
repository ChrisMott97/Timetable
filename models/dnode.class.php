<?php

class DNode
{
	public $identifier;
	public $visited;
	public $shortest;
	public $previous;
	public $connectors;

	public function __construct($identifier, $visited, $shortest, $previous, $connectors = array())
	{
		$this->identifier = $identifier;
		$this->visited = $visited;
		$this->shortest = $shortest;
		$this->previous = $previous;
		$this->connectors = $connectors;
	}
}