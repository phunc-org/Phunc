import glob
from os.path import join
import os


def getTestDir():
    for dir in ['tests','Tests','test','Test']:
        if os.path.isdir(dir):
            return dir

def getSrcDir():
    for dir in ['src','app']:
        if os.path.isdir(dir):
            return dir

def getSrcList():
    list = glob.glob( os.path.join(getSrcDir(),"*.php"))
    for name in list:
        #name = path.replace(os.path.join(getSrcDir(),"") , '')
        #name = name.replace(".php" , '')
        print(name)

def getTestList():
    list = glob.glob( os.path.join(getTestDir(), "*", "*.php"))
    for path in list:
        name = path.replace(os.path.join(getTestDir(),"") , '')
        #name = name.replace(".php" , '')
        print(name)

def getCommmand(testIn):
    testFunction = '1'
    #testIn = ''
    testOut = '3'
    return testFunction + ' ' + testIn + ' ' + testOut

def createFileTests(source):
    list = glob.glob( os.path.join(source,"*.php"))
    for name in list:
        #name = path.replace(os.path.join(source,"") , '')
        #name = name.replace(".php" , '')
        test = getCommmand(testIn = name)
        #print(name)
        print(test)

print(createFileTests(source=getSrcDir()))
#getSrcList()