
<div class="row-fluid">
	<!-- Widget 1 -->
	<div class="span4">
		<?php if ($hasfooterleft) {
        echo $OUTPUT->blocks_for_region('footer-left');
        } ?>
	</div>
      
      
    <!-- widget 2 -->
	<div class="span4">
    	<?php if ($hasfootermiddle) {
        echo $OUTPUT->blocks_for_region('footer-middle');
        } ?>
    </div>
	
	<!-- Widget 3 -->
    <div class="span4">
    	<?php if ($hasfooterright) {
        echo $OUTPUT->blocks_for_region('footer-right');
        } ?>
    </div>
</div>
      

<div class="row-fluid">
		<hr>
      	<p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
      	<p class="copy">©<?php echo date("Y"); echo " "; echo $PAGE->theme->settings->copyright; ?></p>
</div>