<?php
	setcookie('auth', 0, time() - 86400 * 30, '/');
	setcookie('mailer', 0, time() - 86400 * 30, '/');
	header('location: login');
?>