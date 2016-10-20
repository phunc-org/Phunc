<?php

namespace Phunc;

use Exception;
use Config\InfoPath;

/**
 * Project: www
 * User: tom.sapletta.com
 * Date: 16.12.13 10:52
 */
class docTreeRender implements ValueHtml
{

    public $value;

    public $lang;

    /**
     * docTreeRender constructor.
     * @param ValueLanguage $language
     * @param $data
     */
    function __construct(ValueLanguage $language, $data)
    {
        $this->lang = new valString();
        $this->lang->setString($language->value());

        $this->render($data);
    }

    /**
     * @return mixed
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * @param $data
     */
    private function render($data)
    {
        $lang = $this->lang->getString();
        $html = '';

        $has_items = !empty($data['items']) && is_array($data['items']) && count($data['items']) > 0;
        if ($has_items) {
            $this->render($data['items']);
        } else {

            if (is_array($data) && count($data) > 0) {
                foreach ($data as $key => $item) {

                    // Validate data
                    $value = '';
                    if (isset($item['value'])) {
                        $val = new getValue($item['value'], $lang);
                        $value = $val->value();
                    }

                    $name = '';
                    if (isset($item['name'])) {
                        $val = new getValue($item['name'], $lang);
                        $name = $val->value();
                    }

                    $type = '';
                    if (isset($item['type'])) {
                        $type = $item['type'];
                    }

                    // get Values
                    if (!empty($item['values'])) {
                        if (is_array($item['values']) && count($item['values']) > 0) {
                            $values = '';
                            foreach ($item['values'] as $name2 => $value2) {
                                $type2 = $name2;

                                $val = new getValue($name2, $lang);
                                $name2 = $val->value();

                                $val = new getValue($value2, $lang);
                                $value2 = $val->value();

                                $html_val = new getValueOfType($type2, $lang, $name2, $value2);
                                $values .= $html_val->value();

                            }
                            $value = $values;
                            $type = 'values';
                        }
                    }
                    $html_val = new getValueOfType($type, $lang, $name, $value);
                    $html .= $html_val->value();
                }
            } else {
//                die('brak elementu');
            }
        }

        $this->value .= $html;
    }

} 