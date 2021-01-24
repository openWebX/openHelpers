<?php


namespace openWebX\openHelpers;


class Helpers {

    public static function findDir(string $dirName) : string {
        $dir = __DIR__;
        while ($dir != '/'){
            $folder2Find = $dir . DIRECTORY_SEPARATOR .  $dirName;
            if (file_exists($folder2Find) && is_dir($folder2Find)) {
                return $folder2Find . '/';
                break;
            } else {
                $dir .= '/../';
            }
        }
    }

}