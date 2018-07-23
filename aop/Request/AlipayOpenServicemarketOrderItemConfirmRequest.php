<?php
/**
 * ALIPAY API: alipay.open.servicemarket.order.item.confirm request
 *
 * @author auto create
 * @since  1.0, 2018-02-05 17:44:40
 */

namespace Alipay\Request;

class AlipayOpenServicemarketOrderItemConfirmRequest extends AbstractAlipayRequest
{

    /**
     * 服务商代商家确认完成
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
