<?php
/**
 * Created by PhpStorm.
 * User: tomaszsapletta
 * Date: 13.08.2018
 * Time: 17:01
 */

namespace Phunc\Localisation;


class Country
{

    /**
     * @param string $file
     * @return array
     *
     * @throws \Exception
     */
    public function csvToTranslateArray($file = '/Country/translate.csv')
    {
        // CSV
//    https://www.colanguage.com/de/l%C3%A4nder-sprachen-und-nationalit%C3%A4ten-auf-englisch
        $csv_string = __DIR__ . $file;
        echo $csv_string;
//    $csv = file_get_contents($csv_string);

        $translate = [];
        if (($handle = fopen($csv_string, "r")) !== FALSE) {
//        echo 'OPENED';
            while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE) {
                $en = rtrim(ltrim($data[1]));
                $de = rtrim(ltrim($data[0]));
                $translate[$en] = $de;
//            next($data);
            }
            fclose($handle);
        } else {
            throw new \Exception('File Not Exist');
        }
        return $translate;
    }


    /**
     * @return array
     * @throws \Exception
     */
    public function convertFromIso($iso = '3166-1')
    {
        $translate = $this->csvToTranslateArray('/Country/translate.csv');

//    var_dump($translate);
//    foreach ($translate as $k => $v) {
//        echo '-' . $k .'-' . $v . '-' . '<br>';
//    }

//        echo $translate['germany'];
//    echo $translate['hungary'];

        // JSON
        $json_string = 'https://raw.githubusercontent.com/sokil/php-isocodes/master/databases/iso_3166-1.json';
        $jsondata = file_get_contents($json_string);
        $obj = json_decode($jsondata, true);
        $array = $obj[$iso];

        $result = [];
        foreach ($array as $k => $v) {

            $key = strtolower($v['alpha_2']);
            $value_en = $v['name'];
            $value_de = $translate[$value_en];

            $result[$key] = [
                'en' => $value_en,
                'de' => $value_de,
            ];
        }
        return $result;

    }

    public function country($shortcode)
    {
        $jsondata = __DIR__ . '/countries.json';
        $jsondata = file_get_contents($jsondata);
//    var_dump($jsondata);
        $obj = json_decode($jsondata, true);
//    var_dump($obj);

        return $obj[$shortcode]['de'];
//    return $obj[$shortcode];
    }


    public function test(string $country)
    {
        $result = $this->convertFromIso();

//    var_dump($country);
        $country = country($country);
        var_dump($country);

    }


    /**
     * @param string $iso
     * @return string
     *
     * @throws \Exception
     */
    public function fromIsoToCountry(string $iso)
    {
        switch ($iso) {
            case "pl":
                $country = "Polen";

                break;
            case "de":
                $country = "Deutschland";

                break;
            case "au":
                $country = "Österreich";
                break;

            case "it":
                $country = "Italien";
                break;

            case "un":
                $country = "Ungarn";
                break;

            default:
                throw new \Exception('Country Not Exist, Iso = ' . $iso);
        }

        return $country;
    }


}