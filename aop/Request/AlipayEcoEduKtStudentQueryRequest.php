<?php
/**
 * ALIPAY API: alipay.eco.edu.kt.student.query request
 *
 * @author auto create
 * @since  1.0, 2017-08-14 11:04:55
 */

namespace Alipay\Request;

class AlipayEcoEduKtStudentQueryRequest extends AbstractAlipayRequest
{

    /**
     * 学生信息查询
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
