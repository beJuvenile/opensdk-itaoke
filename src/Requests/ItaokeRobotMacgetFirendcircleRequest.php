<?php
/**
 * API: itaoke.robot.macget.firendcircle request 获取好友朋友圈
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotMacgetFirendcircleRequest implements Request
{
    public $requestType = 'post';

    //机器人id
    public $robot_id;
    //好友微信id，以wx_开头
    public $wx_id;

    //获取首页的话传0，获取下一页的话，传上一页的最后一条朋友圈id
    public $status_id = 0;

    public $apiParas = array();

    //机器人id
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }
    //发送微信好友/群id。一般wxid_开头
    public function setStatusId($status_id)
    {
        $this->status_id = $status_id;
        $this->apiParas["status_id"] = $status_id;
    }
    //发送微信好友/群id。一般wxid_开头
    public function setWxId($wx_id)
    {
        $this->wx_id = $wx_id;
        $this->apiParas["wx_id"] = $wx_id;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.macget.firendcircle";
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
