<?php
/**
 * ALIPAY API: ant.merchant.expand.mapplyorder.query request
 *
 * @author auto create
 * @since  1.0, 2016-07-28 23:35:07
 */

namespace Alipay\Request;

class AntMerchantExpandMapplyorderQueryRequest extends AbstractAlipayRequest
{

    /**
     * 商户入驻单查询接口
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
