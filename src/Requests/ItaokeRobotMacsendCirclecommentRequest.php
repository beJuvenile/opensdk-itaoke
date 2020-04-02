<?php
/**
 * API: itaoke.robot.macsend.circlecomment request 朋友圈评论
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotMacsendCirclecommentRequest implements Request
{
    public $requestType = 'post';

    //机器人id
    public $robot_id;
    //好友微信id，以wx_开头
    public $wx_id;
    public $content;

    //朋友圈消息id
    public $msg_id;

    public $apiParas = array();

    //机器人id
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }
    //发送微信好友/群id。一般wxid_开头
    public function setMsgId($msg_id)
    {
        $this->msg_id = $msg_id;
        $this->apiParas["msg_id"] = $msg_id;
    }
    //发送微信好友/群id。一般wxid_开头
    public function setWxId($wx_id)
    {
        $this->wx_id = $wx_id;
        $this->apiParas["wx_id"] = $wx_id;
    }
    //发送微信好友/群id。一般wxid_开头
    public function setContent($content)
    {
        $this->content = $content;
        $this->apiParas["content"] = $content;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.macsend.circlecomment";
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
