<?php

namespace App\Outputs;

use App\Outputs\HTMLFormat;
use App\Outputs\PDFFormat;
use App\Outputs\TextFormat;

class DisplayFactory
{
    public static function getInstance($format = 'text')
    {
        switch($format) {
            case 'text':
                return new TextFormat();
                break;
            
            case 'html':
                return new HTMLFormat();
                break;
            
            case 'pdf':
                return new PDFFormat();
                break;
            
            default:
                return null;
        }
    }
}
