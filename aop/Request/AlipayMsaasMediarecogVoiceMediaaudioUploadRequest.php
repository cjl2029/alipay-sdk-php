<?php
/**
 * ALIPAY API: alipay.msaas.mediarecog.voice.mediaaudio.upload request
 *
 * @author auto create
 * @since  1.0, 2016-05-28 22:41:09
 */

namespace Alipay\Request;

class AlipayMsaasMediarecogVoiceMediaaudioUploadRequest extends AbstractAlipayRequest
{

    /**
     * 媒体实时上传音频流接口
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
