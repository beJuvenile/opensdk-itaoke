<?php
/**
 * API: itaoke.robot.force.offline request 强制下线
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotForceOfflineRequest implements Request
{
    public $requestType = 'post';

    //机器人id
    public $robot_id;

    public $apiParas = array();

    //p页数
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.force.offline";
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
