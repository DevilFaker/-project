/**
 * 得到所有分类
 * @return array
 */
<?php
function getAllCate(){
    $sql="select id,username from user_detail";
    $rows=fetchAll($sql);
    return $rows;
}
?>