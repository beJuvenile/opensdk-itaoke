<?php
/**
 * 客户端
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 20:54
 */
namespace OpenSDK\ITaoKe;

use OpenSDK\ITaoKe\Libs\Http;
use OpenSDK\ITaoKe\Interfaces\Request;

class Client
{

    /**
     * 接口地址
     *
     * @var string
     */
    public $gatewayUrl = 'http://router.itaoke.org/api';

    /**
     * AppKey
     *
     * @var string
     */
    public $appKey;

    /**
     * AppSecret
     *
     * @var string
     */
    public $appSecret;

    /**
     * 数据类型
     *
     * @var string
     */
    public $format = 'json';

    /**
     * request对象
     * 
     * @var object
     */
    public $request;

    /**
     * result对象
     *
     * @var object
     */
    public $result = [];

    /**
     * 签名方式
     *
     * @var object
     */
    public $signMethod = 'md5';

    /**
     * apiVersion
     *
     * @var object
     */
    public $apiVersion = '1.0';

    public $sdkVersion = 'top-sdk-php-20190618';

    public function __construct($appKey='', $appSecret='')
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
    }
    
    //执行
    public function execute($request, $session = null){

        $this->request = $request;
        //组装系统参数
        $sysParams["app_key"] = $this->appKey;
        $sysParams["v"] = $this->apiVersion;
        $sysParams["format"] = $this->format;
        $sysParams["sign_method"] = $this->signMethod;
        $sysParams["method"] = $request->getApiMethodName();
        $sysParams["timestamp"] = time();
        $sysParams["domain"] = $_SERVER['SERVER_NAME'];
        $sysParams["client"] = $this->getip();
        $sysParams["partner_id"] = $this->sdkVersion;

//        if (null != $session){
//            $sysParams["session"] = $session;
//        }
        //获取业务参数
        $apiParams = $request->getApiParas();
        //签名
        $sysParams["sign"] = $this->generateSign(array_merge($apiParams, $sysParams));

        //发起HTTP请求
        try{
            //系统参数放入GET请求串
            $requestUrl = $this->gatewayUrl. "?";

            foreach ($sysParams as $sysParamKey => $sysParamValue){
                $requestUrl .= "$sysParamKey=" . urlencode($sysParamValue) . "&";
            }
            $requestUrl = substr($requestUrl, 0, -1);

            if (strtolower($request->requestType)=='post') {
                $resp = Http::post($requestUrl, $apiParams);
            } else {
                $resp = Http::get($requestUrl, $apiParams);
            }
            //解析TOP返回结果
            if ("json" == $this->format){
                $respObject = json_decode($resp,true);
            }else if("xml" == $this->format){
                $respObject = @simplexml_load_string($resp);
            }
            $this->result = $respObject;

        }catch (\Exception $e){
            return $e->getMessage();

        }

    }

    //生成签名
    public function generateSign($params){
        ksort($params);
        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v)
        {
            if("@" != substr($v, 0, 1))
            {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;
        return strtoupper(md5($stringToBeSigned));
    }

    //获取真实ip
    public function getip() {
        $unknown = 'unknown';
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        /*
        处理多层代理的情况
        或者使用正则方式：$ip = preg_match("/[\d\.]{7,15}/", $ip, $matches) ? $matches[0] : $unknown;
        */
        if (false !== strpos($ip, ',')) $ip = reset(explode(',', $ip));
        return $ip;
    }


    /**
     * 获取执行结果
     *
     * @return  mixed
     */
    public function result()
    {
        return $this->request->getResult($this->result);
    }

}