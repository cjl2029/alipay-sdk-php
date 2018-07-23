<?php
/**
 * ALIPAY API: koubei.marketing.data.member.report.query request
 *
 * @author auto create
 * @since  1.0, 2018-04-23 14:16:19
 */

namespace Alipay\Request;

class KoubeiMarketingDataMemberReportQueryRequest extends AbstractAlipayRequest
{

    /**
     * 会员报表批量查询接口
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
