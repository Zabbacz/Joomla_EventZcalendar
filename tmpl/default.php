<?php
// No direct access
defined('_JEXEC') or die;
JHtml::stylesheet($root.'./modules/mod_zcalendar/css/styl.css')    ;
?>
<?php foreach($next_actions as $row){ 
			 $datum_dmr = new JDate($row->datum);?>
				<p class="datum"><?= $datum_dmr ->format('d-m-Y') ?></p> 
				<p class="nazev"><?= $row->nazev ?></p>
				<p class="odkaz"><?= $row->akce_odkaz ?></p>
			<hr> 
<?php } ?>
