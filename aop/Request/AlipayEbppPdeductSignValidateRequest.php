<?php
/**
 * ALIPAY API: alipay.ebpp.pdeduct.sign.validate request
 *
 * @author auto create
 * @since  1.0, 2017-08-04 11:19:34
 */

namespace Alipay\Request;

class AlipayEbppPdeductSignValidateRequest extends AbstractAlipayRequest
{

    /**
     * 缴费直连代扣签约前置校验
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
