jQuery(document).ready(function(){
	
				
				
			 var newitem='<tr>';
				newitem+=	'<td>';				
				
				newitem+=		'<label>Image URL (*):</label>';
				newitem+=		'<input type="text" name="cube_slider[image][]" />';
				newitem+=		'<div class="clearfix"></div>';
				
				newitem+=		'<label>Link:</label>';
				newitem+=		'<input type="text" name="cube_slider[link][]" />';
				newitem+=		'<div class="clearfix"></div>';
				
				newitem+=		'<label>Title:</label>';
				newitem+=		'<input type="text" name="cube_slider[title][]" />';
				newitem+=		'<div class="clearfix"></div>';
					
				newitem+=	'</td>';
				
				newitem+=	'<td>';
				newitem+=		'<textarea name="cube_slider[desc][]" /></textarea>';
				newitem+=	'</td>';
				
				newitem+=	'<td>';
				newitem+=		'<input type="button" class="button add-above" value="Add above" /><br />';
				newitem+=		'<input type="button" class="button add-below" value="Add below" /><br />';
				newitem+=		'<input type="button" class="button-primary delete-item" value="Delete item" /><br />';	
				newitem+=	'</td>';
				
				newitem+='</tr>';
	
		jQuery('.add-above').live('click', function(){		
			jQuery(this).parent().parent().before(newitem);	
		});
		
		jQuery('.add-below').live('click', function(){		
			jQuery(this).parent().parent().after(newitem);	
		});
		
		jQuery('.delete-item').live('click', function(){
			jQuery(this).parent().parent().animate({ backgroundColor: "#ff0000" }, 400, function(){
											jQuery(this).remove();
									});
		});
		
		jQuery('.add-new-top').click(function(){		
			jQuery(this).next('form').children('table').children('tbody').append(newitem);	
		});
	
	
	});
	