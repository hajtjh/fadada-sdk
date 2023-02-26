<?php
namespace fadadaApi\data;


/**
 * 电子文件签署线上出证专业版接口
 *
 * Class ComplianceContractReport
 */
class ComplianceContractReport extends FddDataBase {
    /**
     * 设置 appId
     * @param string $value
     **/
    public function SetAppId($value)
    {
        $this->values["appId"] = $value;
    }

    /**
     * 设置 申请出证方账号
     *
     * @param $value
     */
    public function SetAccount($value){
        $this->values["account"] = $value;
    }

    /**
     * 设置消息摘要
     * @param string $value
     **/
    public function SetMsgDigest($value)
    {
        $this->values["msgDigest"] = $value;
    }

    /**
     * 设置 合同编号
     * @param string $value
     **/
    public function SetContractNum($value)
    {
        $this->values['contractNum'] = $value;
    }

    /**
     * 判断 合同编号 是否存在
     * @return true 或 false
     **/
    public function IsContractNumSet()
    {
        return array_key_exists('contractNum', $this->values);
    }

}