<?php
	$body = "This is a sentence and it has to find chetan@gmail.com in it";

	$email = explode(" ",$body);
	foreach ($email as $key => $value) {
		if(filter_var($value, FILTER_VALIDATE_EMAIL))
		{
				echo $value;
		}
	}

	echo "<br>";
	echo $str = preg_replace('/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})/', '<a href="mailto:$1">$1</a>', $body);

?>