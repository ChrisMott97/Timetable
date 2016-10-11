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

    def __init__(self, identifier, visited, shortest, previous, connectors = {}):
        self.identifier = identifier
        self.visited = visited
        self.shortest = shortest
        self.previous = previous
        self.connectors = connectors
    
class Graph(object):
    '''
    A graph instantiates and groups Nodes.
    Attributes:
        name: a string representing the name of the graph
        nodes: a dictionary of node identifiers associated with their node object      
    '''

    name = "the graph"
    nodes = {}
    startNode = str()
    endNode = str()
    currentNode = object()
    
    def __init__(self, graph_dict):
        for node, connections in graph_dict.items():
            connectors = {}
            for connector, distance in connections.items():
                connectors[connector] = str(distance)
            self.nodes[node] = Node(node, False, None, None, connectors)

    def listNodes(self):
        nodelist = []
        for node in self.nodes:
            nodelist.append(node)
        return nodelist
    
    #def findShortest(self, start, end):
    #    for node in self.nodes:
            

newgraph = Graph(graph)
print("This graph contains nodes "+(str(newgraph.listNodes())))
print("This graph includes vertex "+newgraph.nodes['A'].identifier)
print("This node is connected to "+(str(newgraph.nodes['A'].connectors).rstrip('}').lstrip('{')))
if(newgraph.nodes['A'].visited):
    print("and it has been visited")
else:
    print("and it has not been visited")
