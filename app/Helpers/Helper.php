<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;
use File;

class Helper
{
    public static function getInfo()
    {
        
    }

    public function checkTheDateDelete($expiredDate)
    {

    }

    public static function checkingCode($code)
    {

    }

    public function verifyCodeUrl($code)
    {

    }

    public function wrtDt()
    {

    }

    public function writeKey($chkAgn, $reDt)
    {

    }

    public function writeToFile($code)
    {

    }

    public function writeZeroToFile($codeType, $reDt)
    {

    }

    public static function write()
    {

    }

    public static function domain()
    {
        echo request()->getHttpHost();
    }

    public function addDate()
    {

    }

    public function connectSrv($code)
    {

    }

    public function writeUpdateDt()
    {
        $date = (new self())->addDate();
        return date_format($date, "Y-m-d");
    }

    public function pth()
    {
        return base_path('storage/app/helpers/helper.json');
    }

    public function pthBc()
    {
        return base_path('storage/app/helpers/tSKey.json');
    }

    public function writeBcKey($code)
    {

    }

    public function gtBcKey()
    {

    }
}
