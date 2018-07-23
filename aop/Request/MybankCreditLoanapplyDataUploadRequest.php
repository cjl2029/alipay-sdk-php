<?php
/**
 * ALIPAY API: mybank.credit.loanapply.data.upload request
 *
 * @author auto create
 * @since  1.0, 2018-07-02 09:59:31
 */

namespace Alipay\Request;

class MybankCreditLoanapplyDataUploadRequest extends AbstractAlipayRequest
{

    /**
     * 外部合作机构数据推送
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
