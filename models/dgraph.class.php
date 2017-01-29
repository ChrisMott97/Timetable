<?php

class DGraph
{
	public $nodes;
	public $startNode;
	public $endNode;
	public $currentNode;
	public $unvisited;
	public $finalLength;
	public $finalRoute;
	public $shortestnode;
	public $shortestnodeval;

	public function __construct($graph)
	{
		$this->nodes = array();
		$this->unvisited = array();
		$this->finalRoute = array();
		$this->shortestnodeval = 1000;
		foreach($graph as $node => $connections)
		{
			$connectors = array();
			foreach($connections as $connector => $distance)
			{
				$connectors[$connector] = $distance;
			};
			$this->nodes[$node] = new DNode($node, False, 1000, "", $connectors);
		}
	}
	public function listNodes()
	{
		$nodelist = array();
		foreach($this->nodes as $node)
		{
			array_push($nodelist, $node);
		}
		return $nodelist;
	}
	public function findShortest($start_node, $end_node)
	{
		set_time_limit(100);
		$this->startNode = $start_node;
		$this->endNode = $end_node;
		$this->currentNode = $this->nodes[$this->startNode];
		array_push($this->unvisited, $this->currentNode->identifier);

		while(!empty($this->unvisited))
		{
			foreach($this->currentNode->connectors as $connector => $length)
			{
				$connectorObject = $this->nodes[$connector];
				if(!$connectorObject->visited)
				{
					if($this->currentNode->previous)
					{
						$full_length = $length + $this->currentNode->shortest;
						if($full_length < $this->connectorObject->shortest)
						{
							$connectorObject->shortest = $full_length;
							$connectorObject->previous = $this->currentNode->identifier;
						}
					}
					else
					{
						$connectorObject->shortest = $length;
						$connectorObject->previous = $this->currentNode->identifier;
					}
					if(!in_array($connectorObject->identifier, $this->unvisited))
					{
						array_push($this->unvisited,$connectorObject->identifier);
					}
				}
			}
			unset($this->unvisited[$this->currentNode->identifier]);
			$this->currentNode->visited = True;
			$this->shortestnode = null;
			$this->shortestnodeval = 1000;
			foreach($this->unvisited as $node)
			{
				$nodeobject = $this->nodes[$node];
				if($nodeobject->shortest < $this->shortestnodeval)
				{
					$this->shortestnodeval = $nodeobject->shortest;
					$this->shortestnode = $nodeobject->identifier;
				}
			}
			if($this->shortestnode)
			{
				$this->currentNode = $this->nodes[$this->shortestnode];
			}
		}
		array_push($this->finalRoute, $this->endNode);
		$this->currentNode = $this->nodes[$this->endNode];
		foreach($this->nodes as $node)
		{
			$nodeobj = $this->nodes[$node];
		}
		while($this->finished == False)
		{
			if($this->currentNode->identifier == $this->startNode)
			{
				$this->finished = True;
			}
			else
			{
				array_push($this->finalRoute, $this->currentNode->previous);
				$this->currentNode = $this->nodes[$this->currentNode->previous];
			}
		}
		$reversed = array_reverse($this->finalRoute);
		$this->finalRoute = $reversed;
		return $this->finalRoute;
	}
}