<?php
/**
 * ALIPAY API: alipay.trade.create request
 *
 * @author auto create
 * @since  1.0, 2018-06-14 17:35:00
 */

namespace Alipay\Request;

class AlipayTradeCreateRequest extends AbstractAlipayRequest
{

    /**
     * 商户通过该接口进行交易的创建下单
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
