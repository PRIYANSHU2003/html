<!-- <?php
function hello(){
    echo "hello everybody.<br>";
}
hello();
?> -->

<!-- 
<?php
function hi($name)
{
    $b="hello $name.<br>";
    return $b;
}
$a=hi("yahoo baba ji.");
 echo $a;
?> -->

<?php
function sum($maths,$physics,$chemistry)
{
    $s=$maths+$physics+$chemistry;
    return $s;
function per($st){
    $p=$st/3;
    echo $p;
}
}
$total=sum(55,95,80);
per($total);
echo $total;
?>