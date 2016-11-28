#!D:\EasyPHP-Devserver-16.1\eds-binaries\python\default\python.exe
import sys
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

newgraph = Graph(owngraph1)
startpoint = input().upper()
endpoint = input().upper()
newgraph.findShortest(startpoint,endpoint)
print("The shortest length from "+str(newgraph.nodes[newgraph.startNode].identifier)+" to "+str(newgraph.nodes[newgraph.endNode].identifier)+" is "+str(newgraph.nodes[newgraph.endNode].shortest))
sys.stdout.flush()
print("The quickest route from "+str(newgraph.nodes[newgraph.startNode].identifier)+" to "+str(newgraph.nodes[newgraph.endNode].identifier)+" is "+ str(newgraph.finalRoute))
sys.stdout.flush()
