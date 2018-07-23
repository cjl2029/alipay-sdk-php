<?php
/**
 * ALIPAY API: alipay.commerce.cityfacilitator.deposit.query request
 *
 * @author auto create
 * @since  1.0, 2015-12-15 11:37:56
 */

namespace Alipay\Request;

class AlipayCommerceCityfacilitatorDepositQueryRequest extends AbstractAlipayRequest
{

    /**
     * 商户查询用户的充值转账记录
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
