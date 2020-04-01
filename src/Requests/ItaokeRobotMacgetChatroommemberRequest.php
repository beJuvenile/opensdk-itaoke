<?php
/**
 * API: itaoke.robot.macsend.text request 发送文本消息
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotMacgetChatroommemberRequest implements Request
{
    public $requestType = 'post';

    //机器人id
    public $robot_id;

    //发送微信好友/群id。一般wxid_开头
    public $wc_id;

    //内容
    public $content;

    public $apiParas = array();

    //机器人id
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }
    //发送微信好友/群id。一般wxid_开头
    public function setWcId($wc_id)
    {
        $this->wc_id = $wc_id;
        $this->apiParas["wc_id"] = $wc_id;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.macget.chatroommember";
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
