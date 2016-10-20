<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 15.10.2016
 * Time: 07:46
 */
namespace Phunc;

/**
 * Class getPathToDownloadedFile
 * @package phunc
 */
class getPathToDownloadedFile implements HasString, ValueText
{
    private $value = null;

    public function __construct($filename, $cache_dir, $url_data)
    {
        $pathdir = $cache_dir . $url_data;

        // when not exist path, creati path to source
        $executing = new executeCreatePath($pathdir);
        if ($executing->value()) {
            $pathfile = $pathdir . $filename;

            if (!is_readable($url_data . $filename)) {
                $url = 'http://' . $url_data . $filename;
                new HasRemoteServerFile($url);
//                if (!$this->isFileRemote($url)) {
//                    return false;
//                }

                // TODO rozbicie na małe części
                $filedata = file_get_contents($url);
                if (empty($filedata)) {
                    new addDebugError('FILE_DATA_IS_EMPTY', $url);
                    return false;
                }
                // $cache_dir_real = realpath($cache_dir);
                file_put_contents($pathfile, $filedata);
            }

            // Everything for owner, read and execute for others
            new executeChmodTree($pathfile);

            $this->value = $pathfile;
        }
    }

    /**
     * @return mixed|string
     */
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

}