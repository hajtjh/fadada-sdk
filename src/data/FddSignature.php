<?php
namespace fadadaApi\data;

/**
 * 合规化方案 印章
 * Class FddAccount
 */
class FddSignature extends FddDataBase
{

    /**
     * 设置 客户编号
     * @param string $value
     **/
    public function SetCustomerId($value)
    {
        $this->values['customer_id'] = $value;
    }

    /**
     * 判断 客户编号 是否存在
     * @return true 或 false
     **/
    public function IsCustomerId()
    {
        return array_key_exists('customer_id', $this->values);
    }

    /**
     * @param string $value
     **/
    public function SetSignatureImgBase64($value)
    {
        $this->values['signature_img_base64'] = $value;
    }

    /**
     * @return true 或 false
     **/
    public function IsSignatureImgBase64()
    {
        return array_key_exists('signature_img_base64', $this->values);
    }

    /**
     * 设置 企业客户编号
     * @param string $value
     **/
    public function SetCompany_id($value)
    {
        $this->values['company_id'] = $value;
    }

    /**
     * 判断 企业客户编号 是否存在
     * @return true 或 false
     **/
    public function IsCompany_id()
    {
        return array_key_exists('company_id', $this->values);
    }

    /**
     * 设置 个人客户编号
     * @param string $value
     **/
    public function SetPerson_id($value)
    {
        $this->values['person_id'] = $value;
    }

    /**
     * 判断 个人客户编号 是否存在
     * @return true 或 false
     **/
    public function IsPerson_id()
    {
        return array_key_exists('person_id', $this->values);
    }

    /**
     * 设置 操作类型
     * @param string $value
     **/
    public function SetOperate_type($value)
    {
        $this->values['operate_type'] = $value;
    }

    /**
     * 判断 操作类型 是否存在
     * @return true 或 false
     **/
    public function IsOperate_type()
    {
        return array_key_exists('operate_type', $this->values);
    }

    /**
     * 设置 签章Id
     * @param string $value
     **/
    public function SetSignature_id($value)
    {
        $this->values['signature_id'] = $value;
    }

    /**
     * 判断 签章Id 是否存在
     * @return true 或 false
     **/
    public function IsSignature_id()
    {
        return array_key_exists('signature_id', $this->values);
    }

    /**
     * 设置 查询类型,1查授权关系 2查印章持有人 3查印章所属，此时传客户编号
     * @param string $value
     **/
    public function SetType($value)
    {
        $this->values['type'] = $value;
    }

    /**
     * 判断 查询类型,1查授权关系 2查印章持有人 3查印章所属，此时传客户编号 是否存在
     * @return true 或 false
     **/
    public function IsTypeSet()
    {
        return array_key_exists('type', $this->values);
    }
}
