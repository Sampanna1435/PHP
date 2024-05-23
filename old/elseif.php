<?php
$age=23;
if ($age<20){
    echo"購入できません";

}else if ($age <=25){
    echo"年齢確認が必要です。";
}else{
    echo "購入できます。";
}
<hr>
?>
<?php
if ($age>=20){
    echo '20歳以上';
}else if ($age >=10){
    echo '10歳以上';
}
?>
<hr>
<?php
if ($age>=30){
    echo '30歳以上';
}else if ($age >=20){
    echo '20歳以上';
}
?>
<hr>
<pre>
p 85
Q1: Ans 2014年2月12日20時56分30秒
<?php
$blog = mktime(20, 56, 30, 2, 12, 2014);
echo date("Y年n月j日G時i分s秒", $blog);
?>
</pre>
<hr>
<pre>
Q2
    <?php
if ($age>=30){
    echo '30歳以上';
}else if ($age >=10){
    echo '10歳以上';
}
?>
</pre>
