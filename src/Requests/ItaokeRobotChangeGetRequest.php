<?php
/**
 * API: itaoke.robot.change.get request 修改机器人
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotChangeGetRequest implements Request
{
    public $requestType = 'post';

    //续费请传月份
    public $month;

    //robot_id
    public $robot_id;

    //微信号 更换的时候修改
    public $wechatrobot;

    public $apiParas = array();

    //月数, 插入要购买的机器人时长
    public function setMonth($month)
    {
        $this->month = $month;
        $this->apiParas["month"] = $month;
    }

    //robot_id
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }

    //微信号
    public function setWxId($wxid)
    {
        $this->wechatrobot = $wxid;
        $this->apiParas["wechatrobot"] = $wxid;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.change.get";
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
