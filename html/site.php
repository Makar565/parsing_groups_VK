<?php
function main($n,$url,$method){


if($method==61){
$python =  shell_exec('python3 auth.py '.$n." ".$method." ".$url);
#$python=explode(" ", $python);
return $python;
}
else if($method==62){
$python =  shell_exec('python3 auth.py '.$n." ".$method." ".$url);
#$python=explode(" ", $python);
return $python;
}
else if($method==3){
$python =  shell_exec('python3 auth.py '.$n." ".$method." ".$url);
$python=explode(" ", $python);
$otv=$python[0]." / ".$python[1];
return $otv;
}
else if ($method==4){
$python =  shell_exec('python3 auth.py '.$n." ".$method." ".$url);
$python=explode(" ", $python);
$otv=$python[0]." : ".$python[1];
return $otv;
}
else{
$python =  shell_exec('python3 auth.py '.$n." ".$method." ".$url);
#$python=explode(" ", $python);
return $python;
}

}

?>
<!DOCTYPE HTML>
<html lang="ru">
  <head>
  <!-- Подключаемые файлы, метатеги, название страницы -->

  <!-- Кодировка страницы-->
  <meta charset="utf-8"/> 
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Парсер Групп</title>
</head>
<body>
  <header class="head">
      <h1>Парсер Групп ВК</h1>
  </header>

	<?php
		$urls=$_POST["urls"];
		$mas_url=explode("\n",$urls);
		if(count($mas_url)!=0){
		$n=$_POST["n"];
		for ($i=0;$i<count($mas_url);$i++){
		print( '<div class="name">
            <h2 class="dataa"><a href="'.$mas_url[$i].'">'.$mas_url[$i].'</a></h2>
        </div>
        <div class="members dataa">
            <h3>Подписчиков :</h3>'.main($n,$mas_url[$i],0).'
        </div>
        <div class="views dataa">
            <h3>Отношение Подписчиков к среднему количеству просмотров  :</h3>'.main($n,$mas_url[$i],1).'</div>
		<div class="actmem dataa">
            <h3>Отношение АКТИВНЫХ Пользователей к подписчикам  :</h3>'.main($n,$mas_url[$i],2).'
        </div>
		<div class="membersLikes dataa">
            <h3>Отношение Подписчиков к лайкам  :</h3>'.main($n,$mas_url[$i],3).'
        </div>
		<div class="viewsLikes dataa">
            <h3>Соотношение количества просмотров и лайков  :</h3>'.main($n,$mas_url[$i],4).'
        </div>
		
		<div class="popular dataa">
            <h3>Самый популярный пост :<a href="'.main($n,$mas_url[$i],61).'">'.main($n,$mas_url[$i],61).'</a></h3>
			<h3>Самый НЕпопулярный пост :<a href="'.main($n,$mas_url[$i],62).'">'.main($n,$mas_url[$i],62).'</a></h3>
        </div>');
print("<hr>");
}
		
	}
		
		
?>
    
</body>
</html>
