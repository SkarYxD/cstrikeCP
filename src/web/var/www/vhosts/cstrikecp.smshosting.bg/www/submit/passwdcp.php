<?php

session_start();
require_once('../../includes/core.php');

$old_rcon = trim($_POST['oldrcon']);
$new_rcon = trim($_POST['newrcon']);
$renewrcon = trim($_POST['renewrcon']);
$status = 0;

if (!empty($new_rcon)) {
	if (isValidPasswd($new_rcon)) {
		if ($new_rcon == $renewrcon) {
			$rcon_check = $DB->GetOne('SELECT `passwd_cp` FROM `servers` WHERE `id` = ? AND `passwd_cp` = ?', array($_SESSION['id'], $old_rcon));
			if (!empty($rcon_check)) {
				$DB->Execute('UPDATE `servers` SET `passwd_cp` = ? WHERE `id` = ?', array($new_rcon, $_SESSION['id']));
				
				$login_ssh2->exec('/usr/local/cstrike/ftp.sh ' . $_SESSION['id'] . ' ' . escapeshellarg(crypt($new_rcon)));

				$_SESSION['passwd_cp'] = $new_rcon;
				serverRestart();
				$status = 1;
				$msg = $returnedData_msg['request'];
			}
			else {
				$msg = 'Грешка: грешна административна парола';
			}	
		}
		else {
			$msg = 'Грешка: двете пароли не съвпадат !';
		}
	}
	else {
		$msg = 'Паролата трябва да е минимум 6 символа и да съдържа букви и цифри.';
	}
}
else {
	$msg = 'Грешка: паролата не може да бъде празна.';
}
echo json_encode(
	array(
		'status' => $status,
		'msg' => $msg,
	)
);
?>