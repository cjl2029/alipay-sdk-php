<?php
/**
 * ALIPAY API: alipay.eco.cplife.bill.sync request
 *
 * @author auto create
 * @since  1.0, 2018-06-09 20:10:28
 */

namespace Alipay\Request;

class AlipayEcoCplifeBillSyncRequest extends AbstractAlipayRequest
{

    /**
     * 物业费账单数据同步
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
