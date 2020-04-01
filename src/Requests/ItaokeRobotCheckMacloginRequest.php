<?php
/**
 * API: itaoke.robot.check.maclogin request 检查登录状态
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotCheckMacloginRequest implements Request
{
    public $requestType = 'post';

    //获取二维码接口返回的微信实例id
    public $uuid;

    //新增机器人接口的内部id
    public $robot_id;

    public $apiParas = array();

    //新增机器人接口的内部id
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }
    //获取二维码接口返回的微信实例id
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->apiParas["uuid"] = $uuid;
    }


	public function getApiMethodName()
	{
		return "itaoke.robot.check.maclogin";
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
