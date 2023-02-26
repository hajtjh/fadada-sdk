<?php
namespace fadadaApi\data;

/**
 * 合规化方案 实名认证类
 * Class FddCertification
 */
class FddCertification extends FddDataBase
{
    /**
     * 客户编号 注册账号时返回
     * @param $value
     */
    public function SetCustomerID($value)
    {
        $this->values['customer_id'] = $value;
    }

    /**
     *  判断 客户编号 是否存在
     * @return bool
     */
    public function IsCustomerIDSet()
    {
        return array_key_exists('customer_id', $this->values);
    }

    /**
     * 实名认证套餐类型
     * @param $value
     */
    public function SetVerifiedWay($value)
    {
        $this->values['verified_way'] = $value;
    }

    /**
     *  判断 实名认证套餐类型 是否存在
     * @return bool
     */
    public function IsVerifiedWaySet()
    {
        return array_key_exists('verified_way', $this->values);
    }

    /**
     * 管理员 实名认证套餐类型 0:三要素标准方案； 6补充三要素方案+人工审核
     * @param $value
     */
    public function SetMVerifieday($value)
    {
        $this->values['m_verified_way'] = $value;
    }

    /**
     *  判断 管理员 实名认证套餐类型 是否存在
     * @return bool
     */
    public function IsMVerifiedaySet()
    {
        return array_key_exists('m_verified_way', $this->values);
    }

    /**
     * 是否允许用户页面修改 1允许，2不允许
     * @param $value
     */
    public function SetPageModify($value)
    {
        $this->values['page_modify'] = $value;
    }

    /**
     *  判断 是否允许用户页面修改 是否存在
     * @return bool
     */
    public function IsPageModifySet()
    {
        return array_key_exists('page_modify', $this->values);
    }

    /**
     *  认证回调地址
     * @param $value
     */
    public function SetNotifyUrl($value)
    {
        $this->values['notify_url'] = $value;
    }

    /**
     *  判断 认证回调地址 是否存在
     * @return bool
     */
    public function IsNotifyUrlSet()
    {
        return array_key_exists('notify_url', $this->values);
    }

    /**
     *  认证同步通知url
     * @param $value
     */
    public function SetReturnUrl($value)
    {
        $this->values['return_url'] = $value;
    }

    /**
     *  判断 认证同步通知url 是否存在
     * @return bool
     */
    public function IsReturnUrlSet()
    {
        return array_key_exists('return_url', $this->values);
    }

    /**
     *  企业信息
     * @param $value
     */
    public function SetCompanyInfo($value)
    {
        $this->values['company_info'] = $value;
    }

    /**
     *  判断 企业信息 是否存在
     * @return bool
     */
    public function IsCompanyInfo()
    {
        return array_key_exists('company_info', $this->values);
    }

    /**
     *  对公账号信息
     * @param $value
     */
    public function SetBankInfo($value)
    {
        $this->values['bank_info'] = $value;
    }

    /**
     *  判断 对公账号信息 是否存在
     * @return bool
     */
    public function IsBankInfo()
    {
        return array_key_exists('bank_info', $this->values);
    }

    /**
     *  企业负责人身份: 1.法人，2 代理人
     * @param $value
     */
    public function SetCompanyPrincipalType($value)
    {
        $this->values['company_principal_type'] = $value;
    }

    /**
     *  判断 企业负责人身份: 1.法人，2 代理人 是否存在
     * @return bool
     */
    public function IsCompanyPrincipalType()
    {
        return array_key_exists('company_principal_type', $this->values);
    }

    /**
     *  企业负责人身份: 1.法人，2 代理人
     * @param $value
     */
    public function SetLegalnfo($value)
    {
        $this->values['legal_info'] = $value;
    }

    /**
     *  判断 企业负责人身份: 1.法人，2 代理人 是否存在
     * @return bool
     */
    public function IsLegalnfo()
    {
        return array_key_exists('legal_info', $this->values);
    }

    /**
     *  企业负责人身份: 1.法人，2 代理人
     * @param $value
     */
    public function SetAgentInfo($value)
    {
        $this->values['agent_info'] = $value;
    }

    /**
     *  判断 企业负责人身份: 1.法人，2 代理人 是否存在
     * @return bool
     */
    public function IsAgentInfo()
    {
        return array_key_exists('agent_info', $this->values);
    }

    /**
     *  管理员 实名认证套餐类型
     * @param $value
     */
    public function SetMVerifiedWay($value)
    {
        $this->values['m_verified_way'] = $value;
    }

    /**
     *  判断 实名认证套餐类型 是否存在
     * @return bool
     */
    public function IsMVerifiedWay()
    {
        return array_key_exists('m_verified_way', $this->values);
    }


    /**
     * 设置代理人姓名
     * @param string $value
     **/
    public function SetAgentName($value)
    {
        $this->values['agent_name'] = $value;
    }

    /**
     * 获取代理人姓名
     * @return 值
     **/
    public function GetAgentName()
    {
        return $this->values['agent_name'];
    }

    /**
     * 判断代理人姓名是否存在
     * @return true 或 false
     **/
    public function IsAgentName()
    {
        return array_key_exists('agent_name', $this->values);
    }

    /**
     * 设置代理人身份证号码
     * @param string $value
     **/
    public function SetAgentID($value)
    {
        $this->values['agent_id'] = $value;
    }

    /**
     * 获取代理人身份证号码
     * @return 值
     **/
    public function GetAgentID()
    {
        return $this->values['agent_id'];
    }

    /**
     * 判断代理人身份证号码是否存在
     * @return true 或 false
     **/
    public function IsAgentIDSet()
    {
        return array_key_exists('agent_id', $this->values);
    }


    /**
     * 设置代理人身份证号码
     * @param string $value
     **/
    public function SetAgentMobile($value)
    {
        $this->values['agent_mobile'] = $value;
    }

    /**
     * 获取代理人身份证号码
     * @return 值
     **/
    public function GetAgentMobile()
    {
        return $this->values['agent_mobile'];
    }

    /**
     * 判断代理人身份证号码是否存在
     * @return true 或 false
     **/
    public function IsAgentMobileSet()
    {
        return array_key_exists('agent_mobile', $this->values);
    }


    /**
     * 设置代理人身份证号码
     * @param string $value
     **/
    public function SetAgentIdFrontPath($value)
    {
        $this->values['agent_id_front_path'] = $value;
    }

    /**
     * 获取代理人身份证号码
     * @return 值
     **/
    public function GetAgentIdFrontPath()
    {
        return $this->values['agent_id_front_path'];
    }

    /**
     * 判断代理人身份证号码是否存在
     * @return true 或 false
     **/
    public function IsAgentIdFrontPath()
    {
        return array_key_exists('agent_id_front_path', $this->values);
    }

    /**
     * 设置代理人姓名
     * @param string $value
     **/
    public function SetLegal_name($value)
    {
        $this->values['legal_name'] = $value;
    }

    /**
     * 获取法人姓名
     * @return 值
     **/
    public function GetLegal_name()
    {
        return $this->values['legal_name'];
    }

    /**
     * 判断法人姓名是否存在
     * @return true 或 false
     **/
    public function IsLegal_nameSet()
    {
        return array_key_exists('legal_name', $this->values);
    }

    /**
     * 设置代理人姓名
     * @param string $value
     **/
    public function SetlegaldIFrontPath($value)
    {
        $this->values['legal_id_front_path'] = $value;
    }

    /**
     * 获取法人姓名
     * @return 值
     **/
    public function GetlegaldIFrontPath()
    {
        return $this->values['legal_id_front_path'];
    }

    /**
     * 判断法人姓名是否存在
     * @return true 或 false
     **/
    public function IslegaldIFrontPath()
    {
        return array_key_exists('legal_id_front_path', $this->values);
    }

    /**
     * 设置银行名称
     * @param string $value
     **/
    public function SetBankName($value)
    {
        $this->values['bank_name'] = $value;
    }

    /**
     * 获取银行名称
     * @return
     **/
    public function GetBankName()
    {
        return $this->values['bank_name'];
    }

    /**
     * 判断银行名称是否存在
     * @return true 或 false
     **/
    public function IsBankNameSet()
    {
        return array_key_exists('bank_name', $this->values);
    }

    /**
     * 设置银行账号
     * @param string $value
     **/
    public function SetBankId($value)
    {
        $this->values['bank_id'] = $value;
    }

    /**
     * 获取银行账号
     * @return
     **/
    public function GetBankId()
    {
        return $this->values['bank_id'];
    }

    /**
     * 判断银行账号是否存在
     * @return true 或 false
     **/
    public function IsBankIdSet()
    {
        return array_key_exists('bank_id', $this->values);
    }

    /**
     * 设置开户支行名称
     * @param string $value
     **/
    public function SetSubbranchName($value)
    {
        $this->values['subbranch_name'] = $value;
    }

    /**
     * 获取开户支行名称
     * @return
     **/
    public function GetSubbranchName()
    {
        return $this->values['subbranch_name'];
    }

    /**
     * 判断开户支行名称是否存在
     * @return true 或 false
     **/
    public function IsSubbranchNameSet()
    {
        return array_key_exists('subbranch_name', $this->values);
    }

    /**
     * 设置企业名称
     * @param string $value
     **/
    public function SetCompanyName($value)
    {
        $this->values['company_name'] = $value;
    }

    /**
     * 获取企业名称
     * @return
     **/
    public function GetCompanyName()
    {
        return $this->values['company_name'];
    }

    /**
     * 判断企业名称是否存在
     * @return true 或 false
     **/
    public function IsCompanyNameSet()
    {
        return array_key_exists('company_name', $this->values);
    }

    /**
     * 设置统一社会信用代码
     * @param string $value
     **/
    public function SetCreditNo($value)
    {
        $this->values['credit_no'] = $value;
    }

    /**
     * 获取统一社会信用代码
     * @return
     **/
    public function GetCreditNo()
    {
        return $this->values['credit_no'];
    }

    /**
     * 判断统一社会信用代码是否存在
     * @return true 或 false
     **/
    public function IsCreditNoSet()
    {
        return array_key_exists('credit_no', $this->values);
    }

    /**
     * 设置统一社会信用代码证件照路径
     * @param string $value
     **/
    public function SetCreditImagePath($value)
    {
        $this->values['credit_image_path'] = $value;
    }

    /**
     * 获取统一社会信用代码证件照路径
     * @return
     **/
    public function GetCreditImagePath()
    {
        return $this->values['credit_image_path'];
    }

    /**
     * 判断统一社会信用代码证件照路径是否存在
     * @return true 或 false
     **/
    public function IsCreditImagePathSet()
    {
        return array_key_exists('credit_image_path', $this->values);
    }

    /**
     * 设置法人姓名
     * @param string $value
     **/
    public function SetLegalName($value)
    {
        $this->values['legal_name'] = $value;
    }

    /**
     * 获取法人姓名
     * @return
     **/
    public function GetLegalName()
    {
        return $this->values['legal_name'];
    }

    /**
     * 判断法人姓名是否存在
     * @return true 或 false
     **/
    public function IsLegalNameSet()
    {
        return array_key_exists('legal_name', $this->values);
    }

    /**
     * 设置法人证件号（身份证）
     * @param string $value
     **/
    public function SetLegalId($value)
    {
        $this->values['legal_id'] = $value;
    }

    /**
     * 获取法人证件号（身份证）
     * @return
     **/
    public function GetLegalId()
    {
        return $this->values['legal_id'];
    }

    /**
     * 判断法人证件号（身份证）是否存在
     * @return true 或 false
     **/
    public function IsLegalIdSet()
    {
        return array_key_exists('legal_id', $this->values);
    }

    /**
     * 设置法人手机号（仅支持国内运营商）
     * @param string $value
     **/
    public function SetlegalMobile($value)
    {
        $this->values['legal_mobile'] = $value;
    }

    /**
     * 获取法人手机号（仅支持国内运营商）
     * @return
     **/
    public function GetlegalMobile()
    {
        return $this->values['legal_mobile'];
    }

    /**
     * 判断法人手机号（仅支持国内运营商）是否存在
     * @return true 或 false
     **/
    public function IslegalMobileSet()
    {
        return array_key_exists('legal_mobile', $this->values);
    }

    /**
     * 设置姓名
     * @param string $value
     **/
    public function SetCustomerName($value)
    {
        $this->values['customer_name'] = $value;
    }

    /**
     * 获取姓名
     * @return
     **/
    public function GetCustomerName()
    {
        return $this->values['customer_name'];
    }

    /**
     * 判断姓名 是否存在
     * @return true 或 false
     **/
    public function IsCustomerName()
    {
        return array_key_exists('customer_name', $this->values);
    }

    /**
     * 设置证件类型 目前仅支持身份证-0
     * @param string $value
     **/
    public function SetCustomerIdentType($value)
    {
        $this->values['customer_ident_type'] = $value;
    }

    /**
     * 获取证件类型
     * @return
     **/
    public function GetCustomerIdentType()
    {
        return $this->values['customer_ident_type'];
    }

    /**
     * 判断证件类型 是否存在
     * @return true 或 false
     **/
    public function IsCustomerIdentType()
    {
        return array_key_exists('customer_ident_type', $this->values);
    }


    /**
     * 设置证件类型 目前仅支持身份证-0
     * @param string $value
     **/
    public function SetCustomerIdentNo($value)
    {
        $this->values['customer_ident_no'] = $value;
    }

    /**
     * 获取证件类型
     * @return
     **/
    public function GetCustomerIdentNo()
    {
        return $this->values['customer_ident_no'];
    }

    /**
     * 判断证件类型 是否存在
     * @return true 或 false
     **/
    public function IsCustomerIdentNo()
    {
        return array_key_exists('customer_ident_no', $this->values);
    }

    /**
     * 设置 手机号码
     * @param string $value
     **/
    public function SetMobile($value)
    {
        $this->values['mobile'] = $value;
    }

    /**
     * 获取 手机号码
     * @return
     **/
    public function GetMobile()
    {
        return $this->values['mobile'];
    }

    /**
     * 判断 手机号码 是否存在
     * @return true 或 false
     **/
    public function IsMobile()
    {
        return array_key_exists('mobile', $this->values);
    }

    /**
     * 设置 证件正面照下载地址
     * @param string $value
     **/
    public function SetIdentFrontPath($value)
    {
        $this->values['ident_front_path'] = $value;
    }

    /**
     * 获取 证件正面照下载地址
     * @return
     **/
    public function GetIdentFrontPath()
    {
        return $this->values['ident_front_path'];
    }

    /**
     * 判断 证件正面照下载地址  是否存在
     * @return true 或 false
     **/
    public function IsIdentFrontPath()
    {
        return array_key_exists('ident_front_path', $this->values);
    }




    /**
     * 设置 实名认证序列号
     * @param string $value
     **/
    public function SetVerifiedVSerialNo($value)
    {
        $this->values['verified_serialno'] = $value;
    }

    /**
     * 获取 实名认证序列号
     * @return
     **/
    public function GetVerifiedVSerialNo()
    {
        return $this->values['verified_serialno'];
    }

    /**
     * 判断 实名认证序列号  是否存在
     * @return true 或 false
     **/
    public function IsVerifiedSerialNo()
    {
        return array_key_exists('verified_serialno', $this->values);
    }

    /**
     * 设置 uuid 查询认证结果时返回
     * @param string $value
     **/
    public function SetUUID($value)
    {
        $this->values['uuid'] = $value;
    }

    /**
     * 获取 uuid 查询认证结果时返回
     * @return
     **/
    public function GetUUID()
    {
        return $this->values['uuid'];
    }

    /**
     * 判断uuid 查询认证结果时返回  是否存在
     * @return true 或 false
     **/
    public function IsUUID()
    {
        return array_key_exists('uuid', $this->values);
    }

    public function SetResultType($value)
    {
        $this->values['result_type'] = $value;
    }

    public function IsResultTypeSet()
    {
        return array_key_exists('result_type', $this->values);
    }

    public function SetCertFlag($value)
    {
        $this->values['cert_flag'] = $value;
    }

    public function IsCertFlagSet()
    {
        return array_key_exists('cert_flag', $this->values);
    }

    public function SetOption($value)
    {
        $this->values['option'] = $value;
    }

    public function IsOptionSet()
    {
        return array_key_exists('option', $this->values);
    }

    public function SetAuthorizationFile($value)
    {
        $this->values['authorization_file'] = $value;
    }

    public function IsAuthorizationFileSet()
    {
        return array_key_exists('authorization_file', $this->values);
    }

    public function SetLang($value)
    {
        $this->values['lang'] = $value;
    }

    public function IsLangSet()
    {
        return array_key_exists('lang', $this->values);
    }

    public function SetIdPhotoOptional($value)
    {
        $this->values['id_photo_optional'] = $value;
    }

    public function IsIdPhotoOptionalSet()
    {
        return array_key_exists('id_photo_optional', $this->values);
    }

    public function SetOrganizationType($value)
    {
        $this->values['organization_type'] = $value;
    }

    public function IsOrganizationTypeSet()
    {
        return array_key_exists('organization_type', $this->values);
    }

    public function SetEncryption($value)
    {
        $this->values['encryption'] = $value;
    }

    public function IsEncryptionSet()
    {
        return array_key_exists('encryption', $this->values);
    }

    public function SetBankCardNo($value)
    {
        $this->values['bank_card_no'] = $value;
    }

    public function IsBankCardNoSet()
    {
        return array_key_exists('bank_card_no', $this->values);
    }

    public function SetCertType($value)
    {
        $this->values['cert_type'] = $value;
    }

    public function IsCertTypeSet()
    {
        return array_key_exists('cert_type', $this->values);
    }

    public function SetIsMiniProgram($value)
    {
        $this->values['is_mini_program'] = $value;
    }

    public function IsIsMiniProgramSet()
    {
        return array_key_exists('is_mini_program', $this->values);
    }

    public function SetAreaCode($value)
    {
        $this->values['area_code'] = $value;
    }

    public function IsAreaCodeSet()
    {
        return array_key_exists('area_code', $this->values);
    }

    /**
     * 设置 指定管理员为"法人"身份下，允许的认证方式∶
    1.法人身份认证;
    2.对公打款认证;
    3.纸质材料认证;
     *
     * @param $value
     */
    public function SetLegal_allow_company_verify_way($value)
    {
        $this->values['legal_allow_company_verify_way'] = $value;
    }

    /**
     * 设置 指定管理员为"代理人"身份下，允许的认证方式∶
    1.法人授权认证;
    2.对公打款认证;
    3.纸质材料认证;
     *
     * @param $value
     */
    public function SetAgent_allow_company_verify_way($value)
    {
        $this->values['agent_allow_company_verify_way'] = $value;
    }

    /**
     * 设置 代理人证件正面照
     *
     * @param $value
     */
    public function SetAgent_id_front_img($value)
    {
        $this->values['agent_id_front_img'] = $value;
    }

    /**
     * 设置 法人证件正面照
     *
     * @param $value
     */
    public function SetLegal_id_front_img($value)
    {
        $this->values['legal_id_front_img'] = $value;
    }

    /**
     * 设置 银行所在省份
     *
     * @param $value
     */
    public function SetBank_province_name($value)
    {
        $this->values['bank_province_name'] = $value;
    }

    /**
     * 设置 银行所在市
     *
     * @param $value
     */
    public function SetBank_city_name($value)
    {
        $this->values['bank_city_name'] = $value;
    }

    /**
     * 设置 法人授权手机号
     *
     * @param $value
     */
    public function SetLegal_authorized_mobile($value)
    {
        $this->values['legal_authorized_mobile'] = $value;
    }

    /**
     * 设置 银行卡号
     *
     * @param $value
     */
    public function SetBank_card_no($value)
    {
        $this->values['bank_card_no'] = $value;
    }

    /**
     * 获取 银行卡号
     *
     * @return mixed
     */
    public function getBank_card_no(){
        return $this->values['bank_card_no'];
    }

    /**
     * 设置 证件正面照图片文件
    cert_type=0:身份证正面
    cert_type=1:护照带人像图片
    cert_type=B:港澳居民来往内地通行证照带人像图片
    cert_type=C:台湾居民来往大陆通行证照带人像图片
     *
     * @param $value
     */
    public function SetIdent_front_img($value)
    {
        $this->values['ident_front_img'] = $value;
    }

    /**
     * 设置 证件反面照图片文件
    cert_type=0:身份证反面
    cert_type=1:护照封图片
    cert_type=B:港澳居民来往内地通行证照封图图片
    cert_type=C:台湾居民来往大陆通行证照封图图片
     *
     * @param $value
     */
    public function SetIdent_back_img($value)
    {
        $this->values['ident_back_img'] = $value;
    }

    /**
     * 设置 海外用户是否支持银行卡认证：0-否，1-是，
    当接口中该参数传入有值时，以接口传入的配置为准，否则则取运营后台配置；
     *
     * @param $value
     */
    public function SetIs_allow_overseas_bank_card_auth($value)
    {
        $this->values['is_allow_overseas_bank_card_auth'] = $value;
    }

    /**
     * 设置 0：图片（默认图片）
    1：pdf (仅支持企业申请表模板)
     * @param string $value
     **/
    public function SetDoc_type($value)
    {
        $this->values['doc_type'] = $value;
    }

    /**
     * 判断 0：图片（默认图片）
    1：pdf (仅支持企业申请表模板) 是否存在
     * @param string $value
     **/
    public function IsDoc_typeSet()
    {
        return array_key_exists('doc_type', $this->values);
    }
}