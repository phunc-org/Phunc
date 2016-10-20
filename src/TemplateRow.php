<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 14.10.2016
 * Time: 15:47
 */

namespace Phunc;

/**
 * Class TemplateRow
 * @package phunc\cv
 */
class TemplateRow implements HasString, ValueHtml
{
    private $value = '';

    public function value()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value();
    }

    /**
     * TemplateRow constructor.
     *
     * @param $type_val
     * @param $lang
     * @param $type
     * @param $value
     * @param $name
     */
    public function __construct($type_val, $lang, $type, $value, $name)
    {
        switch ($type_val) {

            case 'document':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'image':
//                $html = '<img class="'.$lang.' '.$type.'" src="'.$value['url'].'" />';
                $html = '<div class="' . $lang . ' ' . $type . '" > <img src="' . $value . '" title="' . $name . '" /> </div>';
                break;
            case 'section':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div>' . $value . '</div>';
                break;
            case 'row':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'row-slim-one':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'row-slim':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'row-h50':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'line':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'row50':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'maintitle':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'values':
                $html = '<div class="' . $lang . ' ' . $type . '" >' . $value . '</div>';
                break;
            case 'company':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'date':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'position':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'responsibilities':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'projects':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'technologie':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'description':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'qualification':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'school':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'question':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'answer':
                $html = '<div class="' . $lang . ' ' . $type . '" ><div class="title">' . $name . '</div><div class="value">' . $value . '</div></div>';
                break;
            case 'blog':
                $html = '<div class="' . $lang . ' ' . $type . '" ><a class="link" href="http://' . $value . '" title="' . $value . '">' . $name . '</a></div>';
                break;
            case 'github':
                $html = '<div class="' . $lang . ' ' . $type . '" ><a class="link" href="http://github.com/' . $value . '" title="' . $value . '">' . $name . '</a></div>';
                break;
            case 'linkedin':
                $html = '<div class="' . $lang . ' ' . $type . '" ><a class="link" href="http://linkedin.com/' . $value . '" title="' . $value . '">' . $name . '</a></div>';
                break;
            case 'xing':
                $html = '<div class="' . $lang . ' ' . $type . '" ><a class="link" href="http://xing.com/' . $value . '" title="' . $value . '">' . $name . '</a></div>';
                break;
            case 'skype':
                $html = '<div class="' . $lang . ' ' . $type . '" ><a class="link" href="call:' . $value . '" title="' . $value . '">' . $name . '</a></div>';
                break;
            case 'email':
                $html = '<div class="' . $lang . ' ' . $type . '" ><a class="link" href="email:' . $value . '" title="' . $value . '">' . $name . '</a></div>';
                break;
            case 'phone':
                $html = '<div class="' . $lang . ' ' . $type . '" ><a class="link" href="call:' . $value . '" title="' . $value . '">' . $name . '</a></div>';
                break;
            default:
                $html = '';
        }
        $this->value = $html;
    }

}