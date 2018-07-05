## This is the next project from story: Clean Coding 
The base library is Phunc
This is solution for Math Operations
There are basics for IMplementation of Finance and Units Operation
Which can be helpful for very complicated operation, to explain step by step
  

### Elementary arithmetic operations

    +, plus (addition)
    −, minus (subtraction)
    ÷, obelus (division)
    ×, times (multiplication)

## Result
    Integer
    Float
    Text
    Object
    SVG
    HTML - animation step by step
    GIF - animation step by step
    
    
## TODO, create SVG representation    

## PL

kalkulator ma na celu latwe analizowanie przeliczanych wartosci
oraz debugging operacji w taki sposob, aby mozliwe bylo rzejrzyste kokreslenie
jaka operacja co zmienila.
krok po kroku jaki byl wynik


hierarchiczne

+ Nazwa klasy oznacza nazwe operacji
+ Argumenty sa kolejnymi liczbami podlegajacej takiej samej operacji

Przyklad ponizej przedstawiono kilka operacji:    
* (1+2+3+4) / (2-1) / (2*1) = 5
  



    $operation = new Obelus(
                new Plus(
                    1,
                    2,
                    3,
                    4
                )
                ,
                new Minus(
                    2,
                    1
                ),
                new Times(
                    2,
                    1
                )
            );
    
    