<?php
/**
 * ALIPAY API: alipay.eco.mycar.parking.order.update request
 *
 * @author auto create
 * @since  1.0, 2017-08-25 17:09:49
 */

namespace Alipay\Request;

class AlipayEcoMycarParkingOrderUpdateRequest extends AbstractAlipayRequest
{

    /**
     * 订单更新接口
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
