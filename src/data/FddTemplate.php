<?php
namespace fadadaApi\data;

/**
 * 合同文档模板和生成类
 * Class FddTemplate
 */
class FddTemplate extends FddDataBase
{
    /**
     * 设置 模板编号
     * @param string $value
     **/
    public function SetTemplate_id($value)
    {
        $this->values['template_id'] = $value;
    }

    /**
     * 获取 模板编号
     * @return 值
     **/
    public function GetTemplate_id()
    {
        return $this->values['template_id'];
    }

    /**
     * 判断 模板编号 是否存在
     * @return true 或 false
     **/
    public function IsTemplate_idSet()
    {
        return array_key_exists('template_id', $this->values);
    }

    /**
     * 设置 文档类型
     * @param string $value
     **/
    public function SetDoc_type($value)
    {
        $this->values['doc_type'] = $value;
    }

    /**
     * 判断 文档类型 是否存在
     * @param string $value
     **/
    public function IsDoc_typeSet()
    {
        return array_key_exists('doc_type', $this->values);
    }

    /**
     * 设置 文档地址
     * @param string $value
     **/
    public function SetDoc_url($value)
    {
        $this->values['doc_url'] = $value;
    }

    /**
     * 判断 文档地址 是否存在
     * @return true 或 false
     **/
    public function IsDoc_urlSet()
    {
        return array_key_exists('doc_url', $this->values);
    }

    /**
     * 设置 文档标题
     * @param string $value
     **/
    public function SetDoc_title($value)
    {
        $this->values['doc_title'] = $value;
    }

    /**
     * 获取 文档标题
     * @return 值
     **/
    public function GetDoc_title()
    {
        return $this->values['doc_title'];
    }

    /**
     * 判断 文档标题 是否存在
     * @return true 或 false
     **/
    public function IsDoc_titleSet()
    {
        return array_key_exists('doc_title', $this->values);
    }

    /**
     * 设置 PDF模板
     * @param string $value
     **/
    public function SetFile($value)
    {
        $this->values['file'] = $value;
    }

    /**
     * 判断 PDF模板 是否存在
     * @return true 或 false
     **/
    public function IsFileSet()
    {
        return array_key_exists('file', $this->values);
    }

    /**
     * 设置 合同编号
     * @param string $value
     **/
    public function SetContract_id($value)
    {
        $this->values['contract_id'] = $value;
    }

    /**
     * 获取 合同编号
     * @return 值
     **/
    public function GetContract_id()
    {
        return $this->values['contract_id'];
    }

    /**
     * 判断 合同编号 是否存在
     * @return true 或 false
     **/
    public function IsContract_idSet()
    {
        return array_key_exists('contract_id', $this->values);
    }

    /**
     * 设置 字体大小
     * @param string $value
     **/
    public function SetFont_size($value)
    {
        $this->values['font_size'] = $value;
    }

    /**
     * 获取 字体大小
     * @return 值
     **/
    public function GetFont_size()
    {
        return $this->values['font_size'];
    }

    /**
     * 判断 字体大小 是否存在
     * @return true 或 false
     **/
    public function IsFont_sizeSet()
    {
        return array_key_exists('font_size', $this->values);
    }

    /**
     * 设置 字体类型
     * @param string $value
     **/
    public function SetFont_type($value)
    {
        $this->values['font_type'] = $value;
    }

    /**
     * 获取 字体类型
     * @return 值
     **/
    public function GetFont_type()
    {
        return $this->values['font_type'];
    }

    /**
     * 判断 字体类型 是否存在
     * @return true 或 false
     **/
    public function IsFont_typeSet()
    {
        return array_key_exists('font_type', $this->values);
    }

    /**
     * 设置 填充内容
     * @param string $value
     **/
    public function SetParameter_map($value)
    {
        $this->values['parameter_map'] = $value;
    }

    /**
     * 获取 填充内容
     * @return 值
     **/
    public function GetParameter_map()
    {
        return $this->values['parameter_map'];
    }

    /**
     * 判断 填充内容 是否存在
     * @return true 或 false
     **/
    public function IsParameter_mapSet()
    {
        return array_key_exists('parameter_map', $this->values);
    }

    /**
     * 设置 动态表格
     * @param string $value
     **/
    public function SetDynamic_tables($value)
    {
        $this->values['dynamic_tables'] = $value;
    }

    /**
     * 获取 动态表格
     * @return 值
     **/
    public function GetDynamic_tables()
    {
        return $this->values['dynamic_tables'];
    }

    /**
     * 判断 动态表格 是否存在
     * @return true 或 false
     **/
    public function IsDynamic_tablesSet()
    {
        return array_key_exists('dynamic_tables', $this->values);
    }



    /**
     * 设置 0：pdf模板；1：在线填充模板 不填默认为0
     * @param string $value
     **/
    public function SetFill_type($value)
    {
        $this->values['fill_type'] = $value;
    }

    /**
     * 判断 0：pdf模板；1：在线填充模板 不填默认为0 是否存在
     * @return true 或 false
     **/
    public function IsFill_typeSet()
    {
        return array_key_exists('fill_type', $this->values);
    }

    /**
     * 设置 在线模板 Id
     * @param string $value
     **/
    public function SetContract_template_id($value)
    {
        $this->values['contract_template_id'] = $value;
    }

    /**
     * 判断 在线模板 Id 是否存在
     * @return true 或 false
     **/
    public function IsContract_template_idSet()
    {
        return array_key_exists('contract_template_id', $this->values);
    }

    /**
     * 设置 模板名称
     * @param string $value
     **/
    public function SetTemplate_name($value)
    {
        $this->values['template_name'] = $value;
    }

    /**
     * 判断 模板名称 是否存在
     * @return true 或 false
     **/
    public function IsTemplate_nameSet()
    {
        return array_key_exists('template_name', $this->values);
    }

    /**
     * 设置 页面跳转url（签名结果同步通知）
     * @param string $value
     **/
    public function SetReturn_url($value)
    {
        $this->values['return_url'] = $value;
    }

    /**
     * 判断 页面跳转url（签名结果同步通知） 是否存在
     **/
    public function IsReturn_urlSet()
    {
        return array_key_exists('return_url', $this->values);
    }

}