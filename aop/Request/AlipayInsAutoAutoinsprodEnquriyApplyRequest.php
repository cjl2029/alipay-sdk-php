<?php
/**
 * ALIPAY API: alipay.ins.auto.autoinsprod.enquriy.apply request
 *
 * @author auto create
 * @since  1.0, 2018-01-09 11:59:57
 */

namespace Alipay\Request;

class AlipayInsAutoAutoinsprodEnquriyApplyRequest extends AbstractAlipayRequest
{

    /**
     * 询价接口
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
