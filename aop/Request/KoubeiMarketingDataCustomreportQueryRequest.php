<?php
/**
 * ALIPAY API: koubei.marketing.data.customreport.query request
 *
 * @author auto create
 * @since  1.0, 2018-04-25 17:30:06
 */

namespace Alipay\Request;

class KoubeiMarketingDataCustomreportQueryRequest extends AbstractAlipayRequest
{

    /**
     * 自定义数据报表数据查询接口
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
