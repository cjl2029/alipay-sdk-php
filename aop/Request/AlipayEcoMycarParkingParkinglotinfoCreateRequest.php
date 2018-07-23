<?php
/**
 * ALIPAY API: alipay.eco.mycar.parking.parkinglotinfo.create request
 *
 * @author auto create
 * @since  1.0, 2018-06-28 10:44:06
 */

namespace Alipay\Request;

class AlipayEcoMycarParkingParkinglotinfoCreateRequest extends AbstractAlipayRequest
{

    /**
     * 车生活停车平台录入停车场信息
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
