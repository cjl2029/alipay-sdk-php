<?php
/**
 * ALIPAY API: zhima.customer.certification.certify request
 *
 * @author auto create
 * @since  1.0, 2017-12-19 13:54:18
 */

namespace Alipay\Request;

class ZhimaCustomerCertificationCertifyRequest extends AbstractAlipayRequest
{

    /**
     * 芝麻认证开始认证
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
