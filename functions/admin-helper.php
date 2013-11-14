<?php
function harmony_admin_head(){
?>
<link rel='stylesheet' id='harmony-admin-css' href='<?php echo HARMONY_THEME_DIR; ?>/functions/css/admin.css' type='text/css' media='all' />
<link rel='stylesheet' id='harmony-admin-css' href='<?php echo HARMONY_THEME_DIR; ?>/functions/css/checkbox.css' type='text/css' media='all' />
<link rel='stylesheet' id='harmony-prettyphoto-css' href='<?php echo HARMONY_THEME_DIR; ?>/functions/scripts/prettyPhoto/css/prettyPhoto.css' type='text/css' media='all' />


<script type="text/javascript" src="<?php echo HARMONY_THEME_DIR; ?>/functions/scripts/jquery.checkbox.min.js"></script>
<script type="text/javascript" src="<?php echo HARMONY_THEME_DIR; ?>/functions/scripts/ajaxupload.js"></script>
<script type="text/javascript" src="<?php echo HARMONY_THEME_DIR; ?>/functions/scripts/rotator.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.cube_super_check').checkbox({empty:'<?php echo HARMONY_THEME_DIR; ?>/functions/css/empty.png'});
				
		//Check if element exists
		jQuery.fn.exists = function(){return jQuery(this).length;}
	});	
</script>
<?php
}
?>