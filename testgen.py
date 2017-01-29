import glob
from os.path import join
import os


def getTestDir():
    for dir in ['tests','Tests','test','Test']:
        if os.path.isdir(dir):
            return dir

list = glob.glob( os.path.join(getTestDir(), "*", "*.php"))

for path in list:
    name = path.replace(os.path.join(getTestDir(),"") , '')
    print(name)