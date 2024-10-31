<?php 


?><table class="widefat">
<thead>
	<tr>
		<th>Username</th>
		<th>Borrower Name</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
</thead>
<tfoot>
    <tr>
		<th>Username</th>
		<th>Borrower Name</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
</tfoot>
<tbody>
    <?php global $wpdb;
	$details = $wpdb->get_results("select username,borrower,phone,property_address from ".$wpdb->prefix."rep_mortgage limit 0,10"); 
	
	?>
	<?php foreach($details as $detail) {?><tr>
		<td><?php echo $detail->username;?></td>
		<td><?php echo $detail->borrower;?></td>
		<td><?php echo $detail->phone;?></td>
		<td><?php echo $detail->property_address;?></td>
		<td>
		
		</td>
	</tr>
	<?php } ?>
</tbody>
</table>