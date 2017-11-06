<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use iscms\Alisms\SendsmsPusher as Sms;
use Flc\Dysms\Client;
use Flc\Dysms\Request\SendSms;

class CodeController extends Controller
{
    public  $sms;

    public function __construct(Sms $sms)
    {
       $this->sms=$sms;
    }

    

    public function codetwo(Request $request)
    {
        $config = [
            'accessKeyId'    => 'LTAIUOsSzCg8pbKf',
            'accessKeySecret' => 'reVxBs0Tt82fwf8Tijhy1XUMLjXAzb',
        ];
        $input = $request->all();
        $phone = $input['phone'];

        $client  = new Client($config);
        $sendSms = new SendSms;
        $sendSms->setPhoneNumbers($phone);
        $sendSms->setSignName('饱否');
        $sendSms->setTemplateCode('SMS_105395047');
        $code = rand(100000, 999999);
        $sendSms->setTemplateParam(['code' => $code]);
        $result = $client->execute($sendSms);
        return 'ok';
    }
}
