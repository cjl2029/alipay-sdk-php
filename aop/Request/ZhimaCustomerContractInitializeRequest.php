<?php
/**
 * ALIPAY API: zhima.customer.contract.initialize request
 *
 * @author auto create
 * @since  1.0, 2017-12-19 13:55:57
 */

namespace Alipay\Request;

class ZhimaCustomerContractInitializeRequest extends AbstractAlipayRequest
{

    /**
     * 芝麻可信电子合约初始化
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
