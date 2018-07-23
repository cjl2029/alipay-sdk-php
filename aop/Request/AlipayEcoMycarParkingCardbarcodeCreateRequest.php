<?php
/**
 * ALIPAY API: alipay.eco.mycar.parking.cardbarcode.create request
 *
 * @author auto create
 * @since  1.0, 2017-08-25 17:10:39
 */

namespace Alipay\Request;

class AlipayEcoMycarParkingCardbarcodeCreateRequest extends AbstractAlipayRequest
{

    /**
     * 停车卡生成二维码
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
