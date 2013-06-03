<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Captcha
{

    private $_charNum = 6;
    private $_font = 'comic.ttf';
    private $_bgImage = 'imgcap.png';

    public function __construct($charNum = FALSE, $bgImage = FALSE, $font = FALSE)
    {
        if ($charNum) {
            $this->_charNum = $charNum;
        }

        if ($bgImage) {
            $this->_bgImage = $bgImage;
        }

        if ($font) {
            $this->_font = $font;
        }

    }

    public function createCaptcha()
    {
        $text = $this->_randomText($this->_charNum);
        $_SESSION['captcha'] = $text;

        $captcha = imagecreatefrompng(__DIR__ . '\\' . $this->_bgImage);
        $textColor = imagecolorallocate($captcha, 0, 0, 0);

        imagettftext($captcha, 17, 0, 38, 22, $textColor, __DIR__ . '\\' . $this->_font, $text);

        header("Content-type: image/png");
        imagepng($captcha);
    }

    private function _randomText($charNum)
    {
        $text = '';
        $chars = "1234567890abcdefghijklmnopqrstuvwxyz";

        for ($i = 0; $i < $charNum; $i++) {
            $text .= $chars[rand(0, 35)];
        }

        return $text;
    }

}