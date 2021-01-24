<?php


namespace openWebX\openHelpers;


/**
 * Class Helpers
 *
 * @package openWebX\openHelpers
 */
class Helpers {

    /**
     * @param string $dirName
     * @return string|null
     */
    public static function findDir(string $dirName) : ?string {
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
        return null;
    }

}