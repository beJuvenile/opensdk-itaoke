<?php
/**
 * API: itaoke.robot.create.get request 机器人创建
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotCreateGetRequest implements Request
{
    public $requestType = 'post';

    //月数, 插入要购买的机器人时长
    public $month;

    //robot_type 机器人类型 1 发单机器人 2转发机器人 3 返利机器人 4全能机器人 5小型机器人 6发圈机器人
    public $robot_type;

    //微信号
    public $wechatrobot;

    public $apiParas = array();

    //月数, 插入要购买的机器人时长
    public function setMonth($month)
    {
        $this->month = $month;
        $this->apiParas["month"] = $month;
    }

    //robot_type 机器人类型 1 发单机器人 2转发机器人 3 返利机器人 4全能机器人 5小型机器人 6发圈机器人
    public function setRobotType($robot_type)
    {
        $this->robot_type = $robot_type;
        $this->apiParas["robot_type"] = $robot_type;
    }

    //微信号
    public function setWxId($wxid)
    {
        $this->wechatrobot = $wxid;
        $this->apiParas["wechatrobot"] = $wxid;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.create.get";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

	}

    /**
     * 解析结果
     *
     * @param   $response   array
     * @return  array
     */
    public function getResult($response)
    {
        return $response;
    }

}
