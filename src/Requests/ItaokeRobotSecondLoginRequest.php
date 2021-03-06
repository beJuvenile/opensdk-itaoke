<?php
/**
 * API: itaoke.robot.second.login request 二次登录接口
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotSecondLoginRequest implements Request
{
    public $requestType = 'post';

    //登录的微信id（首次登录不需要传，历史登录必须传） 执行登录接口返回此字段，记得保存数据库里
    public $wx_id;

    public $apiParas = array();

    //微信号
    public function setWxId($wxid)
    {
        $this->wx_id = $wxid;
        $this->apiParas["wx_id"] = $wxid;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.second.login";
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
