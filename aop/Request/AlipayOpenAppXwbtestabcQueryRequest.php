<?php
/**
 * ALIPAY API: alipay.open.app.xwbtestabc.query request
 *
 * @author auto create
 * @since  1.0, 2017-12-04 17:55:09
 */

namespace Alipay\Request;

class AlipayOpenAppXwbtestabcQueryRequest extends AbstractAlipayRequest
{

    /**
     * xuweibo测试用
     **/
    private $bizContent;

    private $apiParas = array();
    
    
    
    
    
    
    

    
    public function setBizContent($bizContent)
    {
        $this->bizContent = $bizContent;
        $this->apiParas["biz_content"] = $bizContent;
    }

    public function getBizContent()
    {
        return $this->bizContent;
    }

    

    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }




}
