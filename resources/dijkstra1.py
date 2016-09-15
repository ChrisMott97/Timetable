graph = {'A':{'B':5,'C':7},
         'B':{'A':5,'D':10},
         'C':{'A':7,'D':8},
         'D':{'B':10,'C':8}}

def getDistance(node, connector):
    return graph[node][connector]

def getConnectors(node):
    return list(graph[node].keys())
