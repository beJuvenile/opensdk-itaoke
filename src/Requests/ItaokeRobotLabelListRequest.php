<?php
/**
 * API: itaoke.robot.label.list request 标签列表
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotLabelListRequest implements Request
{
    public $requestType = 'post';

    //机器人id
    public $robot_id;

    public $apiParas = array();

    //机器人id
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.label.list";
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
