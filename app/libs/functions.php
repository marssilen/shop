<?php
function menu($menus,$parent){
    if($parent!=0) {
        $str = '<ul style="padding: 10px">';
    }
    else{
        $str = '<ul style="padding: 0px">';
    }
    $count=0;
    foreach ($menus as $menu){
        if($menu['parent']==$parent){
            $count++;
            $str.='<li><a class="w3-button w3-right-align" style="display: block;">'.$menu['menu'].'</a>'.menu($menus,$menu['id']).'</li>';
        }
    }
    $str.='</ul>';
    if($count!=0)
    return $str;
    else return '';
}
function display($msg){
  echo htmlentities($msg);
}
function thumb($source,$width=150,$height=150){
  $detail=getimagesize($source);
  $res=imagecreatefromjpeg($source);
  $thumb=imagecreatetruecolor($width,$height);
  imagecopyresampled($thumb,$res,0,0,0,0,$width,$height,$detail[0],$detail[1]);

  $name=basename($source);
  $suc=imagejpeg($thumb,'public\th\\'.$name.'.jpg',100);
  imagedestroy($res);
  imagedestroy($thumb);
  return $suc;
}
// thumb('C:\web\xampp\htdocs\golbon\public\w3.css');
// 	$files=new DirectoryIterator('public/th/');
// 	foreach ($files as $file) {
// 	  if($file=='.'||$file=='..')
// 	  continue;
// 	  echo('<div class="w3-col l2 m3 s6" style="padding:16px"><div style="padding:6px" class="mycard w3-card-2 w3-round"><img style="width:100%" src="'.URL.'public/th/'.$file.'" >'.$file.'</div></div>');
// 	}
function create_pview($href,$pages=10,$after=''){
$view='<ul class="pagination">';
for($i=1;$i<=$pages;$i++){
    $view.='<li>'.'<a href="'.$href.'/'.$i.'/'.$after.'" >'.$i.'</a></li>';
 }
$view.='</ul>';
return $view;
}
function isAdmin(){
  $logged=Session::get('role');
  if($logged!='admin'){
    Session::destroy();
    header('location: '.URL.'login');
    die();
  }
  return true;
}
function convert_to_shamsi($str,$toLetters=true){
  $time  = strtotime($str);
  $a   = date('d',$time);
  $b = date('m',$time);
  $c  = date('Y',$time);
	$x=$y=$z=0;

	/*
            a->day
            b->month
            c->year
            x->rooz
            y->mah
            z->sal
    */
	if($c<1 || $a<1 || $b<1 || $a>31 || $b>12)
    {
        echo("Error!");
        return;

    }
	if($c%4==0)
    {
            if($b==2 && $a>29)
            {
                echo("Error!");
                return;

            }
            if($b==4 || $b==6 || $b==9 || $b==11)
                if($a>30)
                {
                    echo("Error!");
                    return;

                }

    }
	if($b==10)
        $x=$a+9;
        if($b==4)
            $x=$a+12;
        if($b==2 || $b== 5 || $b==6)
            $x=$a+11;
        if($b==1 || $b==3 || $b==7 || $b==8 || $b==9 || $b== 11 || $b==12)
            $x=$a+10;
        if($c%4==1 && $b<3)
        {
            $x++;
            $a++;

        }
		if($c%4==1 || $c%4==2 || $c%4==3)
            if($b==3)
                $a--;
        if($c%4==1 || $c%4==2 || $c%4==3)
            if($b>3)
            {
                $x--;
                $a--;

            }
        if($b>1 && $b<5 && $a<20)
            $y=$b+9;
        if($b>1 && $b<5 && $a>19)
        {
            $x=$a-19;
            $y=$b+10;

        }
        if($b>6 && $b<11 && $a<22)
            $y=$b+9;
        if($b>6 && $b<11)
            if($a>21)
            {
                $x=$a-21;
                $y=$b+10;

            }
        if($b==1 || $b==5 || $b==6 || $b==11 || $b==12)
            if($a<21)
                $y=$b+9;
        if($b==1 || $b==5 ||$b==6 || $b==11 || $b==12)
            if($a>20)
            {
                $x=$a-20;
                $y=$b+10;

            }
        if($b<4 && $a<20 || $b<3)
            $z=$c-622;
        else
            $z=$c-621;
        if($y>12)
            $y=$y-12;
		if($toLetters)
		switch($y){
			case 1:
				$y="فروردین";
				break;
			case 2:
				$y="اردیبهشت";
				break;
			case 3:
				$y="خرداد";
				break;
			case 4:
				$y="تیر";
				break;
			case 5:
				$y="مرداد";
				break;
			case 6:
				$y="شهریور";
				break;
			case 7:
				$y="مهر";
				break;
			case 8:
				$y="آبان";
				break;
			case 9:
				$y="آذر";
				break;
			case 10:
				$y="دی";
				break;
			case 11:
				$y="بهمن";
				break;
			case 12:
				$y="اسفند";
				break;
		}
        return($x." ".$y." ".$z);
}
function msg($msg,$href=''){?>
         <?php
        require_once 'app/views/head.php';
        ?>
    <body>
    <div class="msg">
        <?=$msg?>
        <br><a href="<?=$href?>">بازگشت</a>
    </div>
    </body>
    </html>
<?php
    die();
}