<?php
function listModules($type){
  if ($type=="FE"){
    return $array = ["htmlcss","javascript","jqueryFE","phpFE","wordpress","workshopFE"];
  }
  elseif($type=="BE"){
    return $array = ["phpBE", "oop", "mysql", "jqueryBE","symfony","workshopBE"];
  }
}
function githubModuleLink($module){
  $link = SERVICE_URL . "/github/" . $module;
  return $link;
}
foreach(listModules("FE") as $module=>$value){
  echo githubModuleLink("$value") . "<br>";
}
foreach(listModules("FE") as $module=>$value){
  echo githubModuleLink("$value") . "<br>";
}
?>
