<?php
/**
 * API: itaoke.robot.macsend.text request 发送文本消息
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotMacsendTextRequest implements Request
{
    public $requestType = 'post';

    //机器人id
    public $robot_id;

    //发送微信好友/群id。一般wxid_开头
    public $toWxId;

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
    public function setToWxId($toWxId)
    {
        $this->toWxId = $toWxId;
        $this->apiParas["toWxId"] = $toWxId;
    }
    //内容
    public function setContent($content)
    {
        $this->content = $content;
        $this->apiParas["content"] = $content;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.macsend.text";
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
