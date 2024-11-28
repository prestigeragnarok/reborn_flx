<?php if (!defined('FLUX_ROOT')) exit; ?>

<?php
$title = Flux::message('PickLogTitle');
?>

<?php
require_once 'Flux/TemporaryTable.php';

if($server->isRenewal) {
	$fromTables = array("{$server->charMapDatabase}.item_db_re", "{$server->charMapDatabase}.item_db2_re");
} else {
	$fromTables = array("{$server->charMapDatabase}.item_db", "{$server->charMapDatabase}.item_db2");
}
$tableName = "{$server->charMapDatabase}.items";

?>


<?php
// ACC ID
if (!$accountID || $accountID == $session->account->account_id) {
	$isMine    = true;
	$accountID = $session->account->account_id;
	$account   = $session->account;
}
// ACC ID END

// CHARACTERS START
$fyck = "FUCK U";

$presti_arr = array();
$characters = array();
foreach ($session->getAthenaServerNames() as $serverName) {
	$athena = $session->getAthenaServer($serverName);

	$sql  = "SELECT `char_id` FROM {$server->charMapDatabase}.char WHERE account_id = 2000000";
	$sth  = $server->connection->getStatement($sql);
	$sth->execute();

	$chars = $sth->fetchAll();
	//$characters[$athena->serverName] = $chars;
}


foreach($chars as $char) {
    $presti_arr[] = $char->char_id;
}
/* $sql  = "SELECT `char_id` FROM {$server->charMapDatabase}.char WHERE account_id = 2000000";
$sth  = $server->connection->getStatement($sql);

$chars = $sth->execute();

$chars = $sth->fetchAll(); */


// CHARACTERS END
?>



?>