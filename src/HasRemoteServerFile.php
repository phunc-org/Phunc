<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 15.10.2016
 * Time: 07:52
 */
namespace Phunc;

/**
 * Class HasRemoteServerFile
 * @package phunc
 */
class HasRemoteServerFile
{

    /**
     * HasRemoteServerFile constructor.
     * check if file exist
     *
     * @param $url
     */
    public function __construct($url)
    {
        $context = stream_context_create(array('http' => array('method' => 'HEAD')));
        $fd = @fopen($url, 'rb', false, $context);
        if ($fd !== false) {
            fclose($fd);
            new addDebugError('FILE_REMOTE_EXIST', $url);
            return true;
        }
        new addDebugError('FILE_REMOTE_NOT_EXIST', $url);
        return false;
    }
}