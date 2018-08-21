<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/rise19/.php/global.php';

if (isset($_POST) &&
    strlen($_POST['name']) >= 2 &&
    strlen($_POST['tel']) >= 5 &&
    strlen($_POST['email']) >= 5) {
	$p = $_POST;
	$url = $p['type'];
	$subj = "Заявка с Rise19";

	$data = [
		'Name' => $p['name'],
		'Company' => $p['company'],
		'Phone' => $p['tel'],
		'E-mail' => $p['email'],
	];
	if (isset($p['message'])) $data += ['Message' => $p['message']];

	sendTestMail($url, $subj, $data);
	echo "ok";
}