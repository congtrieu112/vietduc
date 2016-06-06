<?php 
	if(($_SERVER['REQUEST_METHOD'] == 'POST')):

	
	update_option( 'mylove_twitter', $_POST['mylove_twitter'] );
	update_option( 'mylove_googleplus', $_POST['mylove_googleplus'] );
	update_option( 'mylove_facebook', $_POST['mylove_facebook'] );
	update_option( 'mylove_address', $_POST['mylove_address'] );
	update_option( 'mylove_phone', $_POST['mylove_phone'] );
	update_option( 'mylove_email', $_POST['mylove_email'] );

	update_option( 'mylove_latit', $_POST['mylove_latit'] );
	update_option( 'mylove_longit', $_POST['mylove_longit'] );
	update_option( 'mylove_content', $_POST['mylove_content'] );

	update_option( 'mylove_ss', $_POST['mylove_ss'] );
	update_option( 'mylove_fax', $_POST['mylove_fax'] );



	
	endif;
?>
<div class="wrap">
<div id="icon-options-general" class="icon32"><br></div><h2>Tùy chỉnh</h2>
<form method="post" action="">
<h3 class="title">Cập nhật tùy chỉnh</h3>
<table class="form-table">
<tbody>


<tr valign="top">
<th scope="row">Twitter</th>
<td><input name="mylove_twitter" type="text" id="mylove_twitter" value="<?php $value = get_option('mylove_twitter'); echo !empty($value) ? get_option('mylove_twitter') : ''; ?>" class="regular-text ltr"></td>
</tr>
<tr valign="top">
<th scope="row">pinterest</th>
<td><input name="mylove_googleplus" type="text" id="mylove_googleplus" value="<?php $value = get_option('mylove_googleplus'); echo !empty($value) ? get_option('mylove_googleplus') : ''; ?>" class="regular-text ltr"></td>
</tr>

<tr valign="top">
<th scope="row">FaceBook</th>
<td><input name="mylove_facebook" type="text" id="mylove_facebook" value="<?php $value = get_option('mylove_facebook'); echo !empty($value) ? get_option('mylove_facebook') : ''; ?>" class="regular-text ltr"></td>
</tr>


<hr />
<tr valign="top">
<th scope="row"> <?php _e("Địa chỉ","vuonxa"); ?></th>
<td><input name="mylove_address" type="text" id="mylove_address" value="<?php $value = get_option('mylove_address'); echo !empty($value) ? get_option('mylove_address') : ''; ?>" class="regular-text ltr"></td>
</tr>


<tr valign="top">
<th scope="row"><?php _e("Địện thoại","vuonxa"); ?> </th>
<td><input name="mylove_phone" type="text" id="mylove_phone" value="<?php $value = get_option('mylove_phone'); echo !empty($value) ? get_option('mylove_phone') : ''; ?>" class="regular-text ltr"></td>
</tr>



<tr valign="top">
<th scope="row">Email</th>
<td><input name="mylove_email" type="text" id="mylove_email" value="<?php $value = get_option('mylove_email'); echo !empty($value) ? get_option('mylove_email') : ''; ?>" class="regular-text ltr"></td>
</tr>

<tr valign="top">
<th scope="row">Mã số thuế</th>
<td><input name="mylove_ss" type="text" id="mylove_ss" value="<?php $value = get_option('mylove_ss'); echo !empty($value) ? get_option('mylove_ss') : ''; ?>" class="regular-text ltr"></td>
</tr>

<tr valign="top">
<th scope="row">Fax</th>
<td><input name="mylove_fax" type="text" id="mylove_fax" value="<?php $value = get_option('mylove_fax'); echo !empty($value) ? get_option('mylove_fax') : ''; ?>" class="regular-text ltr"></td>
</tr>


<tr valign="top">
<th scope="row">LATIT</th>
<td><input name="mylove_latit" type="text" id="mylove_latit" value="<?php $value = get_option('mylove_latit'); echo !empty($value) ? get_option('mylove_latit') : ''; ?>" class="regular-text ltr"></td>
</tr>

<tr valign="top">
<th scope="row">LONGIT</th>
<td><input name="mylove_longit" type="text" id="mylove_longit" value="<?php $value = get_option('mylove_longit'); echo !empty($value) ? get_option('mylove_longit') : ''; ?>" class="regular-text ltr"></td>
</tr>

<tr valign="top">
<th scope="row"><?php _e('Nội dụng footer','vuonxa' ); ?></th>
<td><textarea name="mylove_content" id="mylove_content" style="width:38%;min-height:130px"><?php $value = get_option('mylove_content'); echo !empty($value) ? get_option('mylove_content') : ''; ?></textarea></td>
</tr>

</tbody></table>
<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Cập nhật"></p></form>
</div>
<div class="clear"></div>