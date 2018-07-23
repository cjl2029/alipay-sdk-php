<?php
/**
 * ALIPAY API: alipay.commerce.cityfacilitator.voucher.refund request
 *
 * @author auto create
 * @since  1.0, 2016-08-03 16:10:56
 */

namespace Alipay\Request;

class AlipayCommerceCityfacilitatorVoucherRefundRequest extends AbstractAlipayRequest
{

    /**
     * 地铁购票发码退款
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
