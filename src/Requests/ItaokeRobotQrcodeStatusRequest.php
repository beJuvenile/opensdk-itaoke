<?php
/**
 * API: itaoke.robot.qrcode.status request 检查是否扫码
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotQrcodeStatusRequest implements Request
{
    public $requestType = 'post';

    //获取二维码接口返回的微信实例id
    public $uuid;

    public $apiParas = array();

    //获取二维码接口返回的微信实例id
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->apiParas["uuid"] = $uuid;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.qrcode.status";
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
