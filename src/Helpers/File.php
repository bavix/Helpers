<?php

namespace Bavix\Helpers;

class File
{

    /**
     * @param string $filename
     * @param mixed  $contents
     *
     * @return bool|int
     */
    public static function put($filename, $contents)
    {
        return \file_put_contents($filename, $contents);
    }

    /**
     * @param string $source
     * @param string $mode
     *
     * @return bool|resource
     */
    public static function open($source, $mode = 'r')
    {
        return @\fopen($source, $mode . 'b');
    }

    /**
     * @param resource $handle
     *
     * @return bool
     */
    public static function close($handle)
    {
        return \fclose($handle);
    }

    /**
     * @param string $path
     * @param int    $time
     * @param int    $accessTime
     *
     * @return bool
     */
    public static function touch($path, $time = null, $accessTime = null)
    {
        return @\touch($path, $time, $accessTime);
    }

    /**
     * @param string $path
     *
     * @return bool|string
     */
    public static function real($path)
    {
        return \realpath($path);
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    public static function remove($path)
    {
        return \unlink($path);
    }

    /**
     * @param string $path
     *
     * @return int
     */
    public static function size($path)
    {
        return \filesize($path);
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    public static function exists($path)
    {
        return \file_exists($path);
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    public static function isWritable($path)
    {
        return \is_writable($path);
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    public static function isReadable($path)
    {
        return \is_readable($path);
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    public static function isFile($path)
    {
        return \is_file($path);
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    public static function isLink($path)
    {
        return \is_link($path);
    }

    /**
     * @param string $path
     * @param string $link
     *
     * @return bool
     */
    public static function symlink($path, $link)
    {
        return \symlink($path, $link);
    }

}
