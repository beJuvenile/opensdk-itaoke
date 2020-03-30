# opensdk-itaoke

### 介绍
本类库是对itaoke云发单API的封装  


#### 使用示例
~~~php
require 'vendor/autoload.php';

use OpenSDK\PinDuoDuo\Client;
use OpenSDK\PinDuoDuo\Requests\DdkCmsPromUrlGenerateRequest;

$c = new Client();
$c->appKey = 'You are appKey';
$c->appSecret = 'You are appSecret';
$req = new DdkCmsPromUrlGenerateRequest();
$req->setWeAppWebViewShortUrl(true);
$req->setWeAppWebViewUrl(true);
$req->setPidList(['xxxx_xxxxx']);
$c->setRequest($req);
$result = $c->execute();

var_dump($result);
~~~