
<?php
/*
 * @Author: your name
 * @Date: 2020-03-09 21:54:02
 * @LastEditTime: 2020-03-17 21:56:25
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \blog\app\helpers.php
 */

/**
 * 弹出信息提示框 
 * @param {type} $msg 要在网页上显示的提示信息
 * @param string $type success/danger
 * @return: 
 */
function alert($msg,$type='success'){
    session()->flash($type,$msg);
    
}