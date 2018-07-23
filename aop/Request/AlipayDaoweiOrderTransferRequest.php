<?php
/**
 * ALIPAY API: alipay.daowei.order.transfer request
 *
 * @author auto create
 * @since  1.0, 2018-03-23 13:22:57
 */

namespace Alipay\Request;

class AlipayDaoweiOrderTransferRequest extends AbstractAlipayRequest
{

    /**
     * 订单状态推进接口
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
