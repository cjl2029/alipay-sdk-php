<?php
/**
 * ALIPAY API: alipay.security.prod.facerepo.add request
 *
 * @author auto create
 * @since  1.0, 2016-06-30 08:29:39
 */

namespace Alipay\Request;

class AlipaySecurityProdFacerepoAddRequest extends AbstractAlipayRequest
{

    /**
     * 人脸1:N服务入库接口
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
