<?php

/**
 *
 * Created by tom-sapletta-com
 * Date: 15.10.2016
 * Time: 07:57
 */

namespace Phunc\Cmd;

DEFINE('FTP_USER', 'yourUser');
DEFINE('FTP_PASS', 'yourPassword');


/**
 * Class ExecuteCreatePath
 */
class CreatePath// implements ValueBoolean
{
    private $value = '';
    private $recursive = '';
    private $context = '';
    private $text = '';

    private $result = '';
    private $path = '';
    private $mode = '';

    /**
     * CreatePath constructor.
     * @param $path
     * @param int $mode
     */
    public function __construct($path, $mode = 0777)
    {
        $this->value = is_dir($path);
        if ($this->value) {
            return true;
        }
        // You should change access for folder by admin, when is permission denied for mkdir()
        //        $this->value = mkdir($path, $mode, true);
        $my_file = new \SplFileInfo('path/to/file.txt');

        // get path from file
        $parent = $my_file->getPathInfo();

        // check if path is directory or not
        if ($parent->isDir()) {
            // create / open file.txt file
        } else {
            // if path/to does not exists, create the directory recursively
            // THIS WON'T WORK because $parent is a SplFileInfo object.
            !@mkdir($parent, 0755, true);



            // instead, get the path as a string
//            $path = $parent->getPathname();

//            !@mkdir($path, 0755, true); // THIS WILL WORK
        }
    }

    /**
     * @return mixed|string
     */
    public function value()
    {
        return $this->value;
    }


    public function mkDirFix($path)
    {
        $path = explode("/", $path);
        $conn_id = @ftp_connect("localhost");
        if (!$conn_id) {
            return false;
        }
        if (@ftp_login($conn_id, FTP_USER, FTP_PASS)) {

            $currPath = "";

            foreach ($path as $dir) {
                if (!$dir) {
                    continue;
                }
                $currPath .= "/" . trim($dir);
                if (!@ftp_chdir($conn_id, $currPath)) {
                    if (!@ftp_mkdir($conn_id, $currPath)) {
                        @ftp_close($conn_id);
                        return false;
                    }
                    @ftp_chmod($conn_id, 0777, $currPath);
                }
            }
        }
        @ftp_close($conn_id);
        return $currPath;
    }

}