<?php

namespace AppBundle\Upload;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class Uploader
{
    private $dir;

    public function __construct($dir)
    {
        $this->dir = $dir;
    }

    public function upload(UploadedFile $file = null, $currentFilename = null)
    {
        if (null !== $file) {
            if (null === $currentFilename) {
                $filename = md5(uniqid()) . '.' . $file->guessExtension();
            } else {
                $filename = basename($this->dir . '/' . $currentFilename);
            }

            $file->move($this->dir, $filename);

            if (false !== $realpath = realpath($this->dir . '/' . $filename)) {
                return basename($realpath);
            }

            return null;
        }

        return $currentFilename;
    }
}
