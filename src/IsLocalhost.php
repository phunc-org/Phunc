<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 10.10.2016
 * Time: 21:03
 */

namespace Phunc;

/**
 * Class IsLocalhost
 */
class IsLocalhost implements ValueBoolean
{
    /**
     * IsLocalhost constructor.
     *
     * @param $server_array
     */
    public function __construct($server_array)
    {
        if (!empty($server_array['HTTP_HOST'])) {
            $server_name = (string) new getUrl();
            // Split existing port

            $path_list = explode(':', $server_name);
//        $path_list_count = count($path_list);
            if (!empty($path_list[0])) {
                $server_name = $path_list[0];
            } else if (!empty($path_list[1])) {
                $server_name = $path_list[1];
            }

        } else {
            $server_name = $server_array['SERVER_NAME'];
        }

//        $server_name = strtolower($server_name);
//        $find = '\\';
//        $replace = '';
//        $server_name = str_replace($find , $replace, $server_name);


//        var_dump($server_name == 'gigabyte' OR $server_name == 'localhost' OR $server_name == 'neptun');
//        var_dump($server_array);
//die;
//

        $this->value = ($server_name == 'gigabyte' OR $server_name == 'localhost' OR $server_name == 'neptun');

    }

    /**
     * @var bool
     */
    public $value = false;

    /**
     * @return bool
     */
    public function value()
    {
        return $this->value;
    }
}