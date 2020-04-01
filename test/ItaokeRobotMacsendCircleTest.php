<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\ITaoKe\Client;
use OpenSDK\ITaoKe\Requests\ItaokeRobotMacsendCircleRequest;

class ItaokeRobotMacsendCircleTest
{

    private $appKey = '1093857297';

    private $appSecret = '394da7af-13d1-c653-99d3-a03554f0ccb8';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new ItaokeRobotMacsendCircleRequest();
        $req->setRobotId('517');
        $req->setPicUrl('https://ss0.bdstatic.com/94oJfD_bAAcT8t7mm9GUKT-xh_/timg?image&quality=100&size=b4000_4000&sec=1585642366&di=78f1db3455fc78dab6a150cd0e08f18d&src=http://a0.att.hudong.com/78/52/01200000123847134434529793168.jpg');
        $req->setContent('喜羊羊与灰太狼之古古怪界大作战');
        $c->execute($req);
        $response = $c->result();
        if(isset($response['status']) && $response['status'] == '0000'){

        }
        print_r($response);exit;
    }

}

(new ItaokeRobotMacsendCircleTest())();

