<?php
	$data = '123456';

	$echo = bcrypt($data);

	echo $echo;