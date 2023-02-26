<?php
namespace fadadaApi\data;

/**
 * 骑缝章签署参数
 *
 * Class DocusignAcrosspage
 */
class DocusignAcrosspage extends FddSignContract{
    /**
     * 设置 骑缝章id
     * @param string $value
     **/
    public function SetAcross_signature_id($value)
    {
        $this->values['across_signature_id'] = $value;
    }

    /**
     * 判断 骑缝章id 是否存在
     * @return true 或 false
     **/
    public function IsAcross_signature_idSet()
    {
        return array_key_exists('across_signature_id', $this->values);
    }
}
?>