<?php
/**
 * API: itaoke.robot.list.get request 机器人列表
 *
 * @author auto create
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\ITaoKe\Requests;
use OpenSDK\ITaoKe\Interfaces\Request;

class ItaokeRobotListGetRequest implements Request
{
    public $requestType = 'post';

    //每页个数
    public $pageSize;

    //页数
    public $p;

    public $apiParas = array();

    //page_size 每页个数
    public function setPageSize($page_size)
    {
        $this->page_size = $page_size;
        $this->apiParas["page_size"] = $page_size;
    }
    //p页数
    public function setPage($page)
    {
        $this->p = $page;
        $this->apiParas["p"] = $page;
    }

	public function getApiMethodName()
	{
		return "itaoke.robot.list.get";
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
