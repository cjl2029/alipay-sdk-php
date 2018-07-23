<?php
/**
 * ALIPAY API: alipay.eco.mycar.parking.config.set request
 *
 * @author auto create
 * @since  1.0, 2018-06-25 14:52:49
 */

namespace Alipay\Request;

class AlipayEcoMycarParkingConfigSetRequest extends AbstractAlipayRequest
{

    /**
     * 停车ISV系统配置接口
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
