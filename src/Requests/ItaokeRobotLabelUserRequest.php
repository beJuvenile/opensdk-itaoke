<?php
/**
 * API: itaoke.robot.label.user request 标签内好友
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotLabelUserRequest implements Request
{
    public $requestType = 'post';

    //机器人id
    public $robot_id;
    //标签id
    public $label_id;

    public $apiParas = array();

    //机器人id
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }

    //机器人id
    public function setLabelId($label_id)
    {
        $this->label_id = $label_id;
        $this->apiParas["label_id"] = $label_id;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.label.user";
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
