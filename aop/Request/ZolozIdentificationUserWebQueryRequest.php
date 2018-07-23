<?php
/**
 * ALIPAY API: zoloz.identification.user.web.query request
 *
 * @author auto create
 * @since  1.0, 2018-03-05 11:34:47
 */

namespace Alipay\Request;

class ZolozIdentificationUserWebQueryRequest extends AbstractAlipayRequest
{

    /**
     * H5刷脸认证查询
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
