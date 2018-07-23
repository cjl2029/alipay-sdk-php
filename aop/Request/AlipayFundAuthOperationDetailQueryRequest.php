<?php
/**
 * ALIPAY API: alipay.fund.auth.operation.detail.query request
 *
 * @author auto create
 * @since  1.0, 2018-06-18 19:10:34
 */

namespace Alipay\Request;

class AlipayFundAuthOperationDetailQueryRequest extends AbstractAlipayRequest
{

    /**
     * 资金预授权单笔操作明细查询接口
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
