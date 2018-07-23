<?php
/**
 * ALIPAY API: alipay.open.public.menu.data.batchquery request
 *
 * @author auto create
 * @since  1.0, 2018-01-05 15:07:28
 */

namespace Alipay\Request;

class AlipayOpenPublicMenuDataBatchqueryRequest extends AbstractAlipayRequest
{

    /**
     * 菜单分析数据查询
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
