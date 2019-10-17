<?php
	foreach ($users as $value)
	{
		echo $value->firstname;
		echo '<br>';
		echo $value->lastname;
		echo '<br>';
		echo $value->address;
		echo '<br>';
		echo $value->contact;
		echo '<br>';
		echo '<br>';
	}
?>