<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 11.10.2016
 * Time: 11:02
 */

namespace Phunc;
use Exception;

/**
 * Class getValueOfType
 */
class getValueOfType implements ValuePath, ValueHtml
{
    public $value = '';

    public function __construct($type = '', $lang = '', $name = '', $value = '')
    {
//        $html = '';
//        echo ":$type:";
//        echo $name;
        // Profile

//        $value = str_replace([", \n", ",\n", "; \n", ";\n"], '<br/>', $value);
//        try {
//            $valid = new ValidString($value);
//        } catch (Exception $e) {
//            $this->addLog(__CLASS__, $e);
//            $this->value = '';
//            return;
//        }

        $type_val = $type;
        $type_arr = [];
        try {
            $value = new replacingInText($value);
            $arr = new TextToArray($type);
            $type_arr = $arr->value();

        } catch (Exception $e) {
            new addDebugError(__CLASS__, $e);
            $value = '';
//            return;
        }


        if (count($type_arr) > 1) {
//            var_dump($type_arr[1]);
            $type_val = $type_arr[0];

            if ($type_arr[1] == 'base64') {
                $value = base64_encode($value);
            } else if ($type_arr[1] == 'url') {
                $value = '<a href="http://' . $value . '">' . $value . '</a>';
            }
//            var_dump( $value );
        }

        $this->value = new TemplateRow($type_val, $lang, $type, $value, $name) . "\n";
    }

    /**
     * @return string
     */
    public function value()
    {
        return $this->value;
    }

}