<?php

use Illuminate\Validation;
use Illuminate\Filesystem;
use Illuminate\Translation;

require_once '../vendor/autoload.php';

/**
 * @param $data
 * @param $rules
 * @param $messages
 * @return Validation\Validator
 */
function getValidator($data, $rules, $messages): Validation\Validator
{
    $filesystem = new Filesystem\Filesystem();
    $fileLoader = new Translation\FileLoader($filesystem, '');
    $translator = new Translation\Translator($fileLoader, 'en_US');
    $factory = new Validation\Factory($translator);
    return $factory->make($data, $rules, $messages);
}


