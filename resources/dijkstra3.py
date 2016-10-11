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
        nodes: a dictionary of node instances
        startNode: a string representing the start point
        endPoint: a string representing the end point
        currentNode: a node instance reprenting the current node being used
        unvisited: a list of node identifiers as strings representing unvisited nodes
        finalLength: an integer representing the final length of the shortest path
        finalRoute: a list of node identifiers as strings representing the final shortest path route
    '''

    name = "the graph"
    
    nodes = {}
    startNode = str()
    endNode = str()
    currentNode = object()

    unvisited = list()
    
    finalLength = int()
    finalRoute = list()
    
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
    
    def findShortest(self, start_node, end_node):
        self.startNode = start_node
        self.endNode = end_node
        self.currentNode = self.nodes[self.startNode]
        self.unvisited.append(self.currentNode.identifier)

        for connector, length in self.currentNode.connectors.items():
            connectorObject = self.nodes[connector]
            if((connectorObject.shortest == None) or (length < connectorObject.shortest)):
                if(self.currentNode.previous):
                    connectorObject.shortest = self.nodes[self.currentNode.previous].shortest + length
                else:
                    connectorObject.shortest = length
                connectorObject.previous = self.currentNode.identifier
                if(connectorObject.visited != True):
                    self.unvisited.append(connectorObject.identifier)
        self.unvisited.remove(self.currentNode.identifier)
        self.currentNode.visited = True

newgraph = Graph(graph)
print("This graph contains nodes "+(str(newgraph.listNodes())))
print("This graph includes vertex "+newgraph.nodes['A'].identifier)
print("This node is connected to "+(str(newgraph.nodes['A'].connectors)))
if(newgraph.nodes['A'].visited):
    print("and it has been visited")
else:
    print("and it has not been visited")
newgraph.findShortest('A','B')
print(newgraph.unvisited)

