<?php
namespace common\components;
use yii\helpers\Html;
use yii\widgets\DetailView;
class XDetailView extends DetailView{
     /**
     * Renders the detail view.
     * This is the main entry of the whole detail view rendering.
     */

    public $ItemColumns;
    public function run()
    {
        $rows = [];
        $i = 0;
        $_arrCheck = $this->arrayChunk();
        foreach($_arrCheck as $item){
            $rows[] = $this->renderAttribute($item, $i++);
        }
        $tag = ArrayHelper::remove($this->options, 'tag', 'table');
        echo Html::tag($tag, implode("\n", $rows), $this->options);

    }

    

    protected function arrayChunk(){
        if(empty($this->ItemColumns)){
            $this->ItemColumns = 2;
        }
        $_arr = array();
        foreach($this->attributes as $item){
            array_push($_arr,$item);
        }
        $_arrCheck = array_chunk($_arr,$this->ItemColumns);
        return $_arrCheck;
    }

    /**
     * Renders a single attribute.
     * @param array $attribute the specification of the attribute to be rendered.
     * @param integer $index the zero-based index of the attribute in the [[attributes]] array
     * @return string the rendering result
     */

    protected function renderAttribute($attribute, $index)
    {
        //var_dump($this->template);exit;
        if (is_string($this->template)) {
            if(!empty($attribute)){
               $_arrNum = count($attribute);
               $_Num = count($attribute);
               $this->template = '<tr>';
               if(!empty($_arrNum) && $_arrNum>0){
                    for($_arrNum;$_arrNum>=1;$_arrNum--){
                        $_NumOffset = $_Num - $_arrNum;
                        $this->template .= "<th>{$attribute[$_NumOffset]['label']}</th><td>{$this->returnEmptyString($this->formatter->format($attribute[$_NumOffset]['value'], $attribute[$_NumOffset]['format']))}</td>";
                    }
                }
                $this->template .= '</tr>';
                return $this->template;
            }
        } else {
            return call_user_func($this->template, $attribute, $index, $this);
        }
    }
    
    /**
     * if columns is null return '';
     * @param type $param
     * @return string
     * 刚开始做判断的时候是用if($param == '(未设置)'){}做判断一直不行，打印出来也是“(未设置)”，一番折腾查看Formatter.php($nullDisplay属性)文件源码才明白
     */
    protected function returnEmptyString($param){
        if($param == '<span class="not-set">(未设置)</span>'){
            return '';
        }else{
            return $param;
        }
    }
}
?>
