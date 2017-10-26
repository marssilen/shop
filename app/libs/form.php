<?php
class Form
{
private $_postData=array();
public function __construct(){}
public function post($field){
$this->_postData[$field]=$_POST[$field];
}
public function val()
{
}
public static function chpost($var){
  if(isset($_POST[$var])){
    if($_POST[$var]!=''){
      return TRUE;
    }
  }
  return FALSE;
}
public static function check($post,$data,$hardmode=FALSE){
if($hardmode){
if(sizeof($post)!=  sizeof($data)){
return FALSE;
}
}
if(empty($post) || empty($data)){
return FALSE;
}
foreach($data as $item){
if(!isset($post[$item])){
return FALSE;
}
}
return TRUE;
}
public static function check_type($format,$post=array()){
if(strlen($format)!= sizeof($post)){
//throw new Exception("parameters length miss matched");
return FALSE;
}
$i=0;
foreach ($post as $var){
switch ($format[$i]){
case 'i':
if(filter_var($var, FILTER_VALIDATE_INT)=== FALSE)return FALSE;
break;
case 'b':
$str=strtolower(trim($var));
return ($str=== "true"||$str==="false") ? TRUE : FALSE;
break;
case 'f':
if(filter_var($var, FILTER_VALIDATE_FLOAT)=== FALSE)return FALSE;
break;
case 'c'://char
if(is_numeric($var))return FALSE;
break;
case 'n'://number
if(!is_numeric($var))return FALSE;
break;
case 's':
break;
}
$i++;
}
return TRUE;
}
}
