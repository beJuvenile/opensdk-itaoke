<?php
/**
 * API: itaoke.robot.macsend.card request 发送卡片?消息
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotMacsendCardRequest implements Request
{
    public $requestType = 'post';

    //机器人id
    public $robot_id;

    //发送微信好友/群id。一般wxid_开头
    public $wx_id;

    //标题
    public $title;
    //链接
    public $url;
    //描述
    public $description;
    //图片
    public $thumbUrl;

    public $apiParas = array();

    //机器人id
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }
    //发送微信好友/群id。一般wxid_开头
    public function setWxId($wx_id)
    {
        $this->wx_id = $wx_id;
        $this->apiParas["wx_id"] = $wx_id;
    }
    //标题
    public function setTitle($title)
    {
        $this->content = $title;
        $this->apiParas["title"] = $title;
    }
    //链接
    public function setUrl($url)
    {
        $this->url = $url;
        $this->apiParas["url"] = $url;
    }
    //描述
    public function setDescription($description)
    {
        $this->description = $description;
        $this->apiParas["description"] = $description;
    }
    //图片
    public function setThumbUrl($thumbUrl)
    {
        $this->thumbUrl = $thumbUrl;
        $this->apiParas["thumbUrl"] = $thumbUrl;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.macsend.card";
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
