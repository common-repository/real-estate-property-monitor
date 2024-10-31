<?php include 'functions.php'; ?>
<h3>How to : </h3>
1) Place <b>[RealEstatePropertyMonitor]</b> where you want to display files that you want your users to download.(Any Post or Page)<br/>
2) Write the full link of that page in the textbox below. For example, <b>http://hiteshjoshi.com/wordpress/plugins/client </b><br/>
<form method="post" action="options.php">
    <?php settings_fields( 'rep_template-group' );?>
    <?php $post = get_option('post'); ?>
	<?php $application_type = get_option('application_type'); ?>
<input name='post' value='<?php echo $post ?>' id='post' type='text' />
<br/><br/>
Select the default document format, that user will download:-
<br/>
<select name='application_type' id='application_type'>
<option <?php if($application_type=='application/pdf') echo "selected";?> value="application/pdf">PDF</option>
<option <?php if($application_type=='application/msword') echo "selected";?> value="application/msword">Microsoft Document</option>
</select>

<br/><br/>
Select the Default role for Users you will add, you can use any Role Management Plugin for better management of Users.
<?php
       


$get_repOptions = new rep_database();
$default_role = $get_repOptions->options('default_role');
global $wp_roles;

$default_role =$wp_roles->role_names[$default_role];
echo "<table class=\"widefat\" style=width:150px>
<thead>
	<tr>
		<th>User Role</th>
		
	</tr>
</thead>
<tbody>
   <tr>
     <td>";


echo "Default role for User is <b><div class=rolename>".strtolower($default_role)."</div></b>";
echo "Change";

echo "<select id='role_change'>";
foreach($wp_roles->role_names as $role => $name):

        if($name===$default_role)
                $is_selected = "selected";
        else
            $is_selected = "";
echo "<option $is_selected value=$role>".$role."</option>";
endforeach;
echo "</select>";

echo "</td>
   </tr>
</tbody>
</table>";
?>
<br/>

<?php $content = get_option('content'); $email = get_option('email'); $show_yearly = get_option('show_yearly');

?>
<br/>
Please enter the Email address that will send email to Users.<br/>
<input name="email" id="email" value="<?php echo $email; ?>" />For Example : <b>Phil Martin &#60;phil_martin@mydomain.com&#62;</b>
<br/><br/>

<input type="checkbox" name="show_yearly" value="true" <?php if($show_yearly==true) echo "checked"; ?> /> Show Files Yearly<br/><br/>

Loading Text : <input type='text' name='loading_text' value='<?php echo get_option('loading_text'); ?>' />
<br/><br/>
Please write the content of the page where you placed <b>[RealEstatePropertyMonitor]</b>
<?php
the_editor($content, $id = 'content', $prev_id = 'title', $media_buttons = false);
?>
<br/>
Please Place <b>[FILE]</b> where you want to place the downloadable file link.<b>[FILE]</b> will be replaced with <a href="#">Download</a>
<br/>

<input class='button-primary' type='submit' value='<?php _e('Save'); ?>'  />

</form>