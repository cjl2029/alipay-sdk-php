<?php
/**
 * ALIPAY API: koubei.trade.itemorder.query request
 *
 * @author auto create
 * @since  1.0, 2018-02-08 11:32:33
 */

namespace Alipay\Request;

class KoubeiTradeItemorderQueryRequest extends AbstractAlipayRequest
{

    /**
     * 商品交易查询接口
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
