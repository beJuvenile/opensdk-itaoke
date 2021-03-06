<?php
/**
 * API: itaoke.robot.macsend.circle request 发送朋友圈
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotMacsendCircleRequest implements Request
{
    public $requestType = 'post';

    //机器人id
    public $robot_id;

    //发送微信好友/群id。一般wxid_开头
    public $pic_url;

    //内容
    public $content;
    //对谁可见，多个用;隔开
    public $group_user;
    //对谁不可见，多个用;隔开
    public $black_list;

    public $apiParas = array();

    //机器人id
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }
    //发送微信好友/群id。一般wxid_开头
    public function setPicUrl($pic_url)
    {
        $this->pic_url = $pic_url;
        $this->apiParas["pic_url"] = $pic_url;
    }
    //发送微信好友/群id。一般wxid_开头
    public function setGroupUser($group_user)
    {
        $this->group_user = $group_user;
        $this->apiParas["group_user"] = $group_user;
    }
    //发送微信好友/群id。一般wxid_开头
    public function setBlackList($black_list)
    {
        $this->black_list = $black_list;
        $this->apiParas["black_list"] = $black_list;
    }
    //内容
    public function setContent($content)
    {
        $this->content = $content;
        $this->apiParas["content"] = $content;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.macsend.circle";
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
