<?php
/**
 * API: itaoke.robot.delete.get request 删除机器人
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotDeleteGetRequest implements Request
{
    public $requestType = 'post';

    //机器人id
    public $robot_id;

    public $apiParas = array();

    //page_size 每页个数
    public function setRobotId($robot_id)
    {
        $this->robot_id = $robot_id;
        $this->apiParas["robot_id"] = $robot_id;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.delete.get";
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
