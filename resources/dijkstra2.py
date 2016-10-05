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
        for node, connections in graph_dict.items():
            connectors = {}
            for connector, distance in connections.items():
                connectors[connector] = str(distance)
            self.nodes[node] = Node(node, node, False, connectors)

    def listNodes(self):
        nodelist = []
        for node in self.nodes:
            nodelist.append(node)
        return nodelist
    
    def findShortest(self, start, end):
        for node in self.nodes:
            

newgraph = Graph(graph)
print("This graph contains nodes "+(str(newgraph.listNodes()).rstrip(']').lstrip('[')))
print("This graph includes vertex "+newgraph.nodes['A'].identifier)
print("And is also called "+newgraph.nodes['A'].name+".")
print("This node is connected to "+(str(newgraph.nodes['A'].connectors).rstrip('}').lstrip('{')))
if(newgraph.nodes['A'].room):
    print("and it is a room")
else:
    print("and it is not a room")
