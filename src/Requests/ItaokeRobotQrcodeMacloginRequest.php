<?php
/**
 * API: itaoke.robot.qrcode.maclogin request 微信登录
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotQrcodeMacloginRequest implements Request
{
    public $requestType = 'post';

    //登录的微信id（首次登录不需要传，历史登录必须传） 执行登录接口返回此字段，记得保存数据库里
    public $wxId;

    public $apiParas = array();

    //微信号
    public function setWxId($wxid)
    {
        $this->wxId = $wxid;
        $this->apiParas["wxId"] = $wxid;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.qrcode.maclogin";
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
