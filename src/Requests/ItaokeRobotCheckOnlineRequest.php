<?php
/**
 * API: itaoke.robot.change.get request 检测用户在线状态
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotCheckOnlineRequest implements Request
{
    public $requestType = 'post';

    //robot_id
    public $robot_id;

    public $apiParas = array();

    //robot_id
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.check.online";
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
