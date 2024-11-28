<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2><?php echo htmlspecialchars(Flux::message('Account Deal Logs')) ?></h2>



<p><?php echo $chars; ?></p>


<p><?php echo $chars[0]->char_id; ?></p>

<p><?php var_dump($presti_arr); ?></p>

<p><?php echo $presti_arr[0]; ?></p>
<p><?php echo $presti_arr[1]; ?></p>

<?php
foreach($chars as $char) {
    echo $char->char_id;
}
?>