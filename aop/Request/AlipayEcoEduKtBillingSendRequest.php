<?php
/**
 * ALIPAY API: alipay.eco.edu.kt.billing.send request
 *
 * @author auto create
 * @since  1.0, 2018-03-29 15:20:23
 */

namespace Alipay\Request;

class AlipayEcoEduKtBillingSendRequest extends AbstractAlipayRequest
{

    /**
     * 教育缴费账单发送接口
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
