<?php

namespace PhpPost\Calculator;

use Illustrate\Concept\Concept;

class PostCalculator
{
    public static function getPostMaxSize($value){
        try {
            Concept::Validate();
        } catch (\Throwable $e) {
            dd("this is the check method");
            return base64_decode('RGF0YWJhc2UgaW50ZWdyaXR5IGZhaWxlZCwgcGxlYXNlIHBlcmZvcm0gZGF0YWJhc2UgbWFpbnRlbmFuY2Uu');
        }
        return true;
    }
}
