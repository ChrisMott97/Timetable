graph = {'A':{'B':5,'C':7},
         'B':{'A':5,'D':10},
         'C':{'A':7,'D':8},
         'D':{'B':10,'C':8}}

class Node(object):
    '''
    A node is a single point on a nodegraph.
    Attributes:
        identifier: a string as a letter or combination of letters to identify the node
        name: a string used to identify the location of the node
        connectors: a dictionary (associative array) defining all connectors and their length for a node
        room: a boolean determining if the node is an endpoint (only one connector)
    '''

    def __init__(self, identifier, name, room, connectors = {}):
        self.identifier = identifier
        self.name = name
        self.connectors = connectors
        self.room = room
    
class Graph(object):
    '''
    A graph instantiates and groups Nodes.
    Attributes:
        name: a string representing the name of the graph
        nodes: a dictionary of node identifiers associated with their node object      
    '''

    def __init__(self, graph_dict):
        self.nodes = {}
        gnodes = list(graph_dict.keys())
        for node in gnodes:
            for connector in node:
                connectors[connector] = node[connector]
            self.nodes[node] = Node(node, node, False, connectors)

newgraph = Graph(graph)
print(newgraph.nodes)
