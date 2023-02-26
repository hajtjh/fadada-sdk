<?php
namespace fadadaApi\data;


/**
 * 数据对象基础类，该类中定义数据类最基本的行为，包括：
 * 计算/设置/获取签名、输出xml格式的参数、从xml读取数据对象等
 * @author widyhu
 */
class FddDataBase
{
    protected $values = array();

    /**
     * 输出xml字符
     * @throws FddException
     **/
    public function ToXml()
    {
        if (!is_array($this->values) || count($this->values) <= 0) {
            throw new FddException("数组数据异常！");
        }

        $xml = "<xml>";
        foreach ($this->values as $key => $val) {
            if (is_numeric($val)) {
                $xml .= "<" . $key . ">" . $val . "<" . $key . ">";
            } else {
                $xml .= "<" . $key . "><![CDATA[" . $val . "]]><" . $key . ">";
            }
        }
        $xml .= "</xml>";
        return $xml;
    }

    /**
     * 将xml转为array
     * @param string $xml
     * @return  $this->value
     * @throws FddException
     */
    public function FromXml($xml)
    {
        if (!$xml) {
            throw new FddException("xml数据异常！");
        }
        //将XML转为array
        //禁止引用外部xml实体
        libxml_disable_entity_loader(true);
        $this->values = json_decode(json_encode(simplexml_load_string($xml, "SimpleXMLElement", LIBXML_NOCDATA)), true);
        return $this->values;
    }

    /**
     * 格式化参数格式化成url参数
     */
    public function ToUrlParams()
    {
        $buff = "";
        foreach ($this->values as $k => $v) {
            if ($k != "sign" && $v != "" && !is_array($v)) {
                $buff .= $k . "=" . $v . "&";
            }
        }

        $buff = trim($buff, "&");
        return $buff;
    }

    /**
     * 设置AppID
     * @param string $value
     **/
    public function SetApp_id($value)
    {
        $this->values["app_id"] = $value;
    }

    /**
     * 获取AppId
     * @return 值
     **/
    public function GetApp_id()
    {
        return $this->values["app_id"];
    }

    /**
     * 判断AppId是否存在
     * @return true 或 false
     **/
    public function IsApp_idSet()
    {
        return array_key_exists("organization", $this->values);
    }

    /**
     * 设置请求时间
     * @param string $value
     **/
    public function SetTimestamp($value)
    {
        $this->values["timestamp"] = $value;
    }

    /**
     * 获取请求时间
     * @return 值
     **/
    public function GetTimestamp()
    {
        return $this->values["timestamp"];
    }

    /**
     * 判断请求时间是否存在
     * @return true 或 false
     **/
    public function IsTimestampSet()
    {
        return array_key_exists("timestamp", $this->values);
    }

    /**
     * 设置版本号
     * @param string $value
     **/
    public function SetV($value)
    {
        $this->values["v"] = $value;
    }

    /**
     * 获取版本号
     * @return 值
     **/
    public function GetV()
    {
        return $this->values["v"];
    }

    /**
     * 判断版本号是否存在
     * @return true 或 false
     **/
    public function IsVSet()
    {
        return array_key_exists("v", $this->values);
    }

    /**
     * 设置消息摘要
     * @param string $value
     **/
    public function SetMsg_digest($value)
    {
        $this->values["msg_digest"] = $value;
    }

    /**
     * 获取消息摘要
     * @return 值
     **/
    public function GetMsg_digest()
    {
        return $this->values["msg_digest"];
    }

    /**
     * 判断消息摘要是否存在
     * @return true 或 false
     **/
    public function IsMsg_digestSet()
    {
        return array_key_exists("msg_digest", $this->values);
    }

    /**
     * 获取设置的值
     */
    public function GetValues()
    {
        return $this->values;
    }
}

