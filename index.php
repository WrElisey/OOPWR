<?php
echo "Привет, мой друг";
if(isset($_GET['name']))
{
	echo "Тебя зовут $_GET['name']";
}
else
{
Echo "хм... кто же ты?";
}
?>