<?php

namespace fadadaApi\data;



/**
 * 模板填充的动态表格参数实体
 */
class FddTemplateDynamicTable {

    /**
     * @var 动态表格插入方式:0：新建页面添加table（默认） 1：在某个关键字后添加table
     */
    var $insertWay=0;

    /**
     * @var 关键字方式插入动态表格:1. 当insertWay为1时，必填
     *                          2. 要求该关键字后（当前页）必须不包含内容，否则会被覆盖
     *                          3. 若关键字为多个 ，则取第一个关键字，在此关键字后插入table
     */
    var $keyword;

    /**
     * @var 表格需要插入的页数:1. 当insertWay为0时，必填
     *                       2. 表示从第几页开始插入表格，如要从末尾插入table,则pageBegin为pdf总页数加1
     *                       3. 多个表格指定相同pageBegin，则多个表格按顺序插入，一个表格新起一页
     *                       4. pageBegin为-1时，则从pdf末尾插入table
     */
    var $pageBegin;

    /**
     * @var table是否有边框:true：有（默认）   false：无边框
     */
    var $borderFlag=true;

    /**
     * @var 正文行高（表头不受影响）:单位：pt，即point，等于1/72英寸
     */
    var $cellHeight;

    /**
     * @var Table中每个单元的水平对齐方式:0：居左；1：居中；2：居右  默认为0
     */
    var $cellHorizontalAlignment=0;

    /**
     * @var Table中每个单元的垂直对齐方式: (4：居上；5：居中；6：居下)   默认为4
     */
    var $cellVerticalAlignment=4;

    /**
     * @var 表头上方的一级标题
     */
    var $theFirstHeader;

    /**
     * @var 表头信息: 类型是 Array[String]
     */
    var $headers;

    /**
     * @var 表头对齐方式:(0居左；1居中；2居右)   默认0
     */
    var $headersAlignment=0;

    /**
     * @var 正文: 类型是 Array[Array[String]]。(外层表示行，内层表示列)
     */
    var $datas;

    /**
     * @var 各列宽度比例: 类型是 Array[Integer]。 默认值：各列1:1
     */
    var $colWidthPercent=array();

    /**
     * @var table的水平对齐方式: (0居左，1居中，2居右) 默认1
     */
    var $tableHorizontalAlignment=1;

    /**
     * @var table宽度的百分比: (0<tableWidthPercentage<=100) 默认为100.0
     */
    var $tableWidthPercentage=100.0;

    /**
     * @var 设置table居左居中居右后的水平偏移量: (向右偏移值为正数，向左偏移值为负数)默认为0.0，单位px(像素)
     */
    var $tableHorizontalOffset=0.0;


    function SetInsertWay($value){
        $this->insertWay = $value;
    }

    function GetInsertWay(){
        return $this->insertWay;
    }

    function SetKeyword($value){
        $this->keyword = $value;
    }

    function GetKeyword(){
        return $this -> keyword;
    }

    function SetPageBegin($value){
        $this->pageBegin = $value;
    }

    function GetPageBegin(){
        return $this -> pageBegin;
    }

    function SetBorderFlag($value){
        $this-> borderFlag = $value;
    }

    function GetBorderFlag(){
        return $this -> borderFlag;
    }

    function SetCellHeight($value){
        $this-> cellHeight = $value;
    }

    function GetCellHeight(){
        return $this -> cellHeight;
    }

    function SetCellHorizontalAlignment($value){
        $this-> cellHorizontalAlignment = $value;
    }

    function GetCellHorizontalAlignment(){
        return $this -> cellHorizontalAlignment;
    }

    function SetCellVerticalAlignment($value){
        $this-> cellVerticalAlignment = $value;
    }

    function GetCellVerticalAlignment(){
        return $this -> cellVerticalAlignment;
    }

    function SetTheFirstHeader($value){
        $this-> theFirstHeader = $value;
    }

    function GetTheFirstHeader(){
        return $this -> theFirstHeader;
    }

    function SetHeaders($value){
        $this-> headers = $value;
    }

    function GetHeaders(){
        return $this -> headers;
    }

    function SetHeadersAlignment($value){
        $this-> headersAlignment = $value;
    }

    function GetHeadersAlignment(){
        return $this -> headersAlignment;
    }

    function SetDatas($value){
        $this-> datas = $value;
    }

    function GetDatas(){
        return $this -> datas;
    }

    function SetColWidthPercent($value){
        $this-> colWidthPercent = $value;
    }

    function GetColWidthPercent(){
        return $this -> colWidthPercent;
    }

    function SetTableHorizontalAlignment($value){
        $this-> tableHorizontalAlignment = $value;
    }

    function GetTableHorizontalAlignment(){
        return $this -> tableHorizontalAlignment;
    }

    function SetTableWidthPercentage($value){
        $this-> tableWidthPercentage = $value;
    }

    function GetTableWidthPercentage(){
        return $this -> tableWidthPercentage;
    }

    function SetTableHorizontalOffset($value){
        $this-> tableHorizontalOffset = $value;
    }

    function GetTableHorizontalOffset(){
        return $this -> tableHorizontalOffset;
    }
}
