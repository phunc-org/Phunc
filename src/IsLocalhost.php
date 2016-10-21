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
class IsLocalhost implements ValueText
{
    /**
     * IsLocalhost constructor.
     *
     * @param $server_array
     */
    public function __construct($server_array)
    {

        $server_name = $server_array['HTTP_HOST'];// || $server_array['SERVER_NAME'];
        if ($server_name === 'gigabyte' OR $server_name === 'localhost' OR $server_name === 'neptun') {
            $this->value = true;
            return;
        }

        if (!empty($server_array['HTTP_HOST'])) {
            $server_name = (string)new getUrl($server_array);

            // Split existing port
            $path_list = explode(':', $server_name);

            if (!empty($path_list[0])) {
                $server_name = $path_list[0];
            }
            if (!empty($path_list[1])) {
                $server_name = $path_list[1];
            }

        } else if (!empty($server_array['SERVER_NAME'])) {
            $server_name = $server_array['SERVER_NAME'];
        }

        $this->value = ($server_name === 'gigabyte' OR $server_name === 'localhost' OR $server_name === 'neptun');
    }

    /**
     * @var string
     */
    public $value = '';

    /**
     * @return string
     */
    public function value()
    {
        return $this->value;
    }
}