<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\ITaoKe\Client;
use OpenSDK\ITaoKe\Requests\ItaokeRobotMacsendCirclecommentRequest;

class ItaokeRobotMacsendCirclecommentTest
{

    private $appKey = '1093857297';

    private $appSecret = '394da7af-13d1-c653-99d3-a03554f0ccb8';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new ItaokeRobotMacsendCirclecommentRequest();
        $req->setRobotId('534');
        $req->setWxId ('wxid_2mssnz9u57rf22');
        $req->setMsgId('13302751400329556044');
        $req->setContent('牛逼');
        $c->execute($req);
        $response = $c->result();
        if(isset($response['status']) && $response['status'] == '0000'){

        }
        print_r($response);exit;
    }

}

(new ItaokeRobotMacsendCirclecommentTest())();

