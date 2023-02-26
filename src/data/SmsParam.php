<?php
namespace fadadaApi\data;

/**
 * 短信参数
 *
 * Class SmsParam
 */
class SmsParam extends GeneralParam{
    /**
     * 设置 传入url
     * @param string $value
     **/
    public function SetSource_url($value)
    {
        $this->values['source_url'] = $value;
    }

    /**
     * 判断 传入url 是否存在
     **/
    public function IsSource_urlSet()
    {
        return array_key_exists('source_url', $this->values);
    }

    /**
     * 设置 有效时间
     * @param string $value
     **/
    public function SetExpire_time($value)
    {
        $this->values['expire_time'] = $value;
    }

    /**
     * 判断 有效时间 是否存在
     */
    public function IsExpire_timeSet(){
        return array_key_exists('expire_time', $this->values);
    }

    /**
     * 设置 发送短信类型
     * @param string $value
     **/
    public function SetMessage_type($value)
    {
        $this->values['message_type'] = $value;
    }

    /**
     * 判断 发送短信类型 是否存在
     *
     * @param $value
     */
    public function IsMessage_typeSet(){
        return array_key_exists('message_type', $this->values);
    }

    /**
     * 设置 自定义短信模板内容：message_type为2时候不能为空
     * @param string $value
     **/
    public function SetMessage_content($value)
    {
        $this->values['message_content'] = $value;
    }

    /**
     * 判断 自定义短信模板内容：message_type为2时候不能为空 是否存在
     *
     * @param $value
     */
    public function IsMessage_contentSet(){
        return array_key_exists('message_content', $this->values);
    }

    /**
     * 设置 短信模板:message_type为1时候不能为空
     * @param string $value
     **/
    public function SetSms_template_type($value)
    {
        $this->values['sms_template_type'] = $value;
    }

    /**
     * 判断 短信模板:message_type为1时候不能为空 是否存在
     *
     * @param $value
     */
    public function IsSms_template_typeSet(){
        return array_key_exists('sms_template_type', $this->values);
    }

    /**
     * 设置 加密方式
     *
     * @param $value
     */
    public function SetEncrypt_type($value){
        $this->values['encrypt_type'] = $value;
    }

    /**
     * 获取 加密方式
     *
     * @return mixed
     */
    public function GetEncrypt_type(){
        return $this->values['encrypt_type'];
    }

    /**
     * 判断 加密方式 是否存在
     *
     * @return bool
     */
    public function IsEncrypt_typeSet(){
        return array_key_exists('encrypt_type', $this->values);
    }

    /**
     * 设置 验证码
     *
     * @param $value
     */
    public function SetCode($value){
        $this->values['code'] = $value;
    }

    /**
     * 判断 验证码 是否存在
     *
     * @return bool
     */
    public function IsCodeSet(){
        return array_key_exists('code', $this->values);
    }
}