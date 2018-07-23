<?php
/**
 * ALIPAY API: alipay.eco.cplife.community.details.query request
 *
 * @author auto create
 * @since  1.0, 2018-06-09 20:14:02
 */

namespace Alipay\Request;

class AlipayEcoCplifeCommunityDetailsQueryRequest extends AbstractAlipayRequest
{

    /**
     * 查询单个物业小区信息
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
