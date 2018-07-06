# Units #

## Goals

   *    All is Object
   *    Strong typing, by Kommentar
   
## Wie die Einheiten funktionieren

Jetzt die Einheiten sind zu dem BASE Einheite Konvertiert und danach zu die neue Einheit:
in Zeit, base sind Sekunde.
 
    new Hour( new Minute(60) );
    Minute -> Sekunden -> Stunden

## Modules
  
Unit is Global Abstract Klass, welche gibt setter und getter für label und value
Currency is abhangig von Unit
und gibt noch mehr Methoden
am ende das geht zu der Einheit
  
und man kann alles nutzen in Einhet
 ich nutze Interface für prufung
 Interface kann auch sagen über lokalen specification

#### Beispiel
    $zehn_usd = new Usd(10);
    $euro = new Eur($zehn_usd );
    echo $euro; 
    // 10,xx
    echo $euro->getValue();
    // 10,xx
    echo $euro->getLabel();
    // EUR / €

## Installations

### Install Composer

    composer install


    
## Input Daten
    
### Es gibt 2 Möglichketien mit Input Daten
    +   sind als einfach Typen: string, integer
    +   sind Objekten
    
### Besipiel
    
input integer
    
    new Day(1);
    
input object        
    
    $24h = new Hour(24);
    new Day( $24h );
    
### Das macht der Konstructor in der Unit Klasse
    
    public function __construct($value, \DateTime $date = null, $label = null)
        {
            if ($value instanceof \Worktime\Unit) {
                $this->setValueFromUnit($value);
                $this->setLabelFromUnit($value);
                $this->setDateFromUnit($value);
            } else if (is_float($value) OR is_int($value) OR is_string($value)) {
    
                $this->setValue((float)$value);
    
                if (is_string($label)) {
                    $this->setLabel($label);
                }
    
                $this->setDate($date);
    
            } else {
                throw new \InvalidArgumentException('Value is Incorrect');
            }
        }
        
## Manual unit tests mit CMD

### Windows xampp

    C:\xampp\php\php.exe C:\xampp\htdocs\units\phpunit.phar --no-configuration C:\xampp\htdocs\units\Tests

### Linux

    ./vendor/bin/phpunit Tests

## SKELETON is Unit test generator 
Mit dem skeleton library man kann die PhuncTests automatisch generieren: 

    php phpunit-skelgen.phar generate-test --bootstrap "vendor/autoload.php" Worktime\Unit\Month
    
    php phpunit-skelgen.phar generate-test --bootstrap "vendor/autoload.php" -- Worktime\Worktime src\Worktime\Worktime.php WorktimeTest Tests\WorktimeTest.php
    
    php phpunit-skelgen.phar generate-test --bootstrap "vendor/autoload.php"  -- Worktime\Unit\Year src\Worktime\Unit\Year.php WorktimeUnitYearTest Test\WorktimeUnitYearTest.php

### Continuous Integration mit Pipeline
Automatisiertes Kompilieren der App und starten von Tests mit Unittest
Das ist Repository mit Continuous Development (CD) mit Pipeline von Bitbucket
 
+   Continuous Integration: **Automatisiertes Kompilieren der App und starten von Tests**
+   Continuous Deployment: Automatisiertes Deploy der App
+   Continuous Testing: Automatisiertes Testen der Production

#### docker package
es gibt docker repository, wo ist alles für laravel testing 
[image: phpunit/phpunit:5.7.5](https://hub.docker.com/r/phpunit/phpunit/)
+ composer
 
#### bitbucket-pipelines.yml

    image: phpunit/phpunit:5.7.5
    
    pipelines:
      default:
        - step:
            script:
              - composer install
              - ./vendor/bin/phpunit tests
