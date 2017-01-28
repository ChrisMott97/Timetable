#!D:\EasyPHP-Devserver-16.1\eds-binaries\python\default\python.exe
import sys
denefield = {'Reception':{'ReceptionE':12},
            'ReceptionE':{'Reception':12, 'CanteenE1':18, 'Canteen1':18, 'Outside1':41},
            'CanteenE1':{'ReceptionE':18, 'Canteen1':6},
            'Canteen1':{'ReceptionE':18, 'CanteenE1':6, 'Canteen2':33},
            'Canteen2':{'Canteen1':33, 'Canteen3':5},
            'Canteen3':{'Canteen2':5, 'Canteen4':22},
            'Canteen4':{'Canteen3':22, 'Canteen5':23},
            'Canteen5':{'Canteen4':23, 'CanteenE2':30},
            'CanteenE2':{'Canteen5':30, 'Halls':22},
            'Halls':{'CanteenE2':22, 'Pe':15},
            'Pe':{'Halls':15, 'PeE':15},
            'PeE':{'Pe':15, 'Hum1':20},
            'Hum1':{'PeE':20, 'HumE1':20, 'HumE2':25},
            'HumE1':{'Hum1':20, 'Hum2':6},
            'Hum2':{'HumE1':6, 'Hum3':7},
            'Hum3':{'Hum2':7, 'Hum4':11},
            'Hum4':{'Hum3':11, 'HumE2':11, 'Hum5':10},
            'HumE2':{'Hum1':25, 'Hum4':11, 'SReception':8, 'TechE':20},
            'SReception':{'HumE2':8},
            'Hum5':{'Hum4':10, 'Library':8},
            'Library':{'Hum5':8, 'TechE':15, 'Y11CR':17},
            'TechE':{'HumE2':20, 'Library':15, 'Tech1':18, 'Math5':27},
            'Y11CR':{'Library':17, 'SciE1':46},
            'SciE1':{'Y11CR':46, 'Sci1':20},
            'Sci1':{'SciE1':20, 'Tech3':22, 'SciS1':7, 'DV1':11},
            'Tech3':{'Sci1':22, 'Drama1':25, 'Tech2':25},
            'Tech2':{'Tech3':25, 'Tech1':6},
            'Tech1':{'Tech2':6, 'TechE':18},
            'SciS1':{'Sci1':7, 'DV1':7},
            'DV1':{'Sci1':11, 'SciS1':7, 'DV2':14, 'DV5':11},
            'DV2':{'DV1':14, 'DV3':11},
            'DV3':{'DV2':11, 'DV5':15, 'DV4':15, 'Drama1':13},
            'Drama1':{'DV3':13, 'Art1':18, 'Tech3':25},
            'Art1':{'Drama1': 18},
            'DV5':{'DV1':11, 'DV3':15, 'DV6':15},
            'DV4':{'DV3':15, 'DV6':16},
            'DV6':{'DV5':15, 'DV4':16},
            'Drama2':{'DV6':7, 'Sci2':24},
            'Sci2':{'Drama2':24, 'Music1':25, 'SciS2':14, 'SciE2':14},
            'Music1':{'Sci2':25, 'Music2':25},
            'Music2':{'Music1':25, 'Arts':13},
            'Arts':{'Music2':13, 'Art3':10, 'SFCRE2':13, 'MusicE':21},
            'Art3':{'Arts':10},
            'SFCRE2':{'Arts':13, 'IT':14},
            'IT':{'SFCRE2':14},
            'MusicE':{'Arts':21, 'Outside1':5, 'SFCR1':23},
            'SFCR1':{'MusicE':23, 'SFCRE1': 13},
            'SFCRE1':{'SFCR1':13, 'CR':36},
            'CR':{'SFCRE1':36, 'SciE2':20},
            'SciE2':{'CR':20, 'SciS2':14, 'Sci2':14},
            'SciS2':{'Sci2':14, 'SciE2':14},
            'Outside1':{'MusicE':5, 'ReceptionE':41, 'MathE':20},
            'MathE':{'Outside1':20, 'Art2':15, 'MathS1':14, 'Math5':23},
            'Art2':{'MathE':20, 'Math5':13},
            'Math5':{'MathE':23, 'Art2':13, 'MathS3':7, 'TechE':27},
            'MathS3':{'Math5':7},
            'MathS1':{'MathE':14, 'Math1':11},
            'Math1':{'MathS1':11, 'Math2':10, 'Math3':4},
            'Math2':{'Math1':10},
            'Math3':{'Math1':4, 'Math4':10},
            'Math4':{'Math3':10, 'MathS2':10},
            'MathS2':{'Math4':10}}
graph = {'A':{'B':5,'C':7},
         'B':{'A':5,'D':10},
         'C':{'A':7,'D':8},
         'D':{'B':10,'C':8}}

d1graph = {'S':{'A':5, 'B':6, 'C':2},
           'A':{'S':5, 'D':4},
           'B':{'S':6, 'C':2, 'D':4, 'T':8},
           'C':{'S':2, 'B':2, 'T':12},
           'D':{'A':4, 'B':4, 'T':3},
           'T':{'B':8, 'C':12, 'D':3}}

owngraph1 = {'A':{'B':5,'C':8,'D':7},
             'B':{'A':5,'C':2,'E':1},
             'C':{'A':8,'B':2,'E':5,'F':9},
             'D':{'A':7,'F':11},
             'E':{'B':1,'C':5,'G':3},
             'F':{'C':9,'D':11,'G':10},
             'G':{'E':3,'F':10}}

import math
class Node(object):
    '''
    A node is a single point on a nodegraph.
    Attributes:
        identifier: a string as a letter or combination of letters to identify the node
        visited: a boolean determining if the node has been visited/used as the current node
        shortest: an floating point value that represents the shortest length from start node to the given node
        previous: a string representing the identifier of the previous node
        connectors: a dictionary (associative array) defining all connectors and their length for a node
    '''

    def __init__(self, identifier, visited, shortest, previous, connectors = {}):
        self.identifier = str(identifier)
        self.visited = bool(visited)
        self.shortest = float(shortest)
        self.previous = str(previous)
        self.connectors = connectors
    
class Graph(object):
    '''
    A graph instantiates and groups Nodes.
    Attributes:
        nodes: a dictionary of node instances
        startNode: a string representing the start point
        endPoint: a string representing the end point
        currentNode: a node instance reprenting the current node being used
        unvisited: a list of node identifiers as strings representing unvisited nodes
        finalLength: an integer representing the final length of the shortest path
        finalRoute: a list of node identifiers as strings representing the final shortest path route
        shortestnode: a temporary string representing the node closest to the current
        shortestnodeval: a floating point value represenitng the disdtance to the closest node
    '''   
    nodes = {}
    startNode = str()
    endNode = str()
    currentNode = object()

    unvisited = list()
    
    finalLength = int()
    finalRoute = list()

    shortestnode = str()
    shortestnodeval = float("inf")
    
    finished = False
    
    def __init__(self, graph_dict):
        '''Initializes nodes dictionary using the given graph'''
        for node, connections in sorted(graph_dict.items()):
            connectors = {}
            for connector, distance in sorted(connections.items()):
                connectors[connector] = str(distance)
            self.nodes[node] = Node(node, False, "inf", "", connectors)
        
    def listNodes(self):
        '''Processes the dictionary of node instances into a simple string list of all nodes'''
        nodelist = []
        for node in sorted(self.nodes):
            nodelist.append(node)
            nodelist.sort()
        return nodelist
    
    def findShortest(self, start_node, end_node):
        '''Finds the shortest length from start_node to end_node then works backwards to find the route'''
        self.startNode = start_node
        self.endNode = end_node
        self.currentNode = self.nodes[self.startNode]
        self.unvisited.append(self.currentNode.identifier)
        
        while(self.unvisited):
            for connector, length in sorted(self.currentNode.connectors.items()):
                connectorObject = self.nodes[connector]
                if(not connectorObject.visited):
                    if(self.currentNode.previous):
                        full_length = float(length) + float(self.currentNode.shortest)
                        if(float(full_length) < float(connectorObject.shortest)):
                            connectorObject.shortest = full_length
                            connectorObject.previous = self.currentNode.identifier
                    else:
                        connectorObject.shortest = float(length)
                        connectorObject.previous = self.currentNode.identifier
                    if(not connectorObject.identifier in self.unvisited):
                        self.unvisited.append(connectorObject.identifier)
            self.unvisited.remove(self.currentNode.identifier)
            self.currentNode.visited = True
            self.shortestnode = str()
            self.shortestnodeval = float("inf")
            for node in self.unvisited:
                nodeobject = self.nodes[node]
                if(float(nodeobject.shortest) < float(self.shortestnodeval)):
                    self.shortestnodeval = nodeobject.shortest
                    self.shortestnode = nodeobject.identifier
            if(self.shortestnode):
                self.currentNode = self.nodes[self.shortestnode]
        self.finalRoute.append(self.endNode)
        self.currentNode = self.nodes[self.endNode]
        for node in self.nodes:
            nodeobj = self.nodes[node]
        while(self.finished == False):
            if(self.currentNode.identifier == self.startNode):
                self.finished = True
            else:
                self.finalRoute.append(self.currentNode.previous)
                self.currentNode = self.nodes[self.currentNode.previous]
        self.finalRoute.reverse()

newgraph = Graph(denefield)
startpoint = input()
endpoint = input()
newgraph.findShortest(startpoint,endpoint)
print("The shortest length from "+str(newgraph.nodes[newgraph.startNode].identifier)+" to "+str(newgraph.nodes[newgraph.endNode].identifier)+" is "+str(newgraph.nodes[newgraph.endNode].shortest))
sys.stdout.flush()
# print("The quickest route from "+str(newgraph.nodes[newgraph.startNode].identifier)+" to "+str(newgraph.nodes[newgraph.endNode].identifier)+" is "+ str(newgraph.finalRoute))
print(str(newgraph.finalRoute).rstrip('\']').lstrip('[\''))
sys.stdout.flush()
