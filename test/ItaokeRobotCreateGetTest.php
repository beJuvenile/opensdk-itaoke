<?php
/**
 * Created by PhpStorm.
 * User: Ken.Zhang
 * Date: 2019/9/23
 * Time: 11:46
 */
require '../vendor/autoload.php';

use OpenSDK\ITaoKe\Client;
use OpenSDK\ITaoKe\Requests\ItaokeRobotCreateGetRequest;

class ItaokeRobotCreateGetTest
{

    private $appKey = '1068747778';

    private $appSecret = '4bdf8268-3648-7c95-8940-d11e71cd1f2d';

    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $req = new ItaokeRobotCreateGetRequest();
        //月数, 插入要购买的机器人时长
        $req->setMonth(1);
        //robot_type 机器人类型 1 发单机器人 2转发机器人 3 返利机器人 4全能机器人 5小型机器人 6发圈机器人
        $req->setRobotType(4);
        $req->setWxId('tkjidi001');
        $c->execute($req);
        $response = $c->result();
        if(isset($response['status']) && $response['status'] == '0000'){

        }
        print_r($response);exit;

    }

}

(new ItaokeRobotCreateGetTest())();

