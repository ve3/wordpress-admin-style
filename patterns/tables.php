<h2><?php esc_attr_e( 'Tables', 'WpAdminStyle' ); ?></h2>

<p><strong>Table with class <code>form-table</code></strong></p>
<table class="form-table" role="presentation">
	<tr>
		<th scope="row"><label for="blogname">Site Title</label></th>
		<td><input name="blogname" type="text" id="blogname" value="WordPress" class="regular-text" /></td>
	</tr>
	<tr class="form-invalid form-required">
		<th scope="row"><label for="forminvalid-example">Form invalid (<code>form-invalid</code>) with <code>form-required</code> on table row</label></th>
		<td><input name="forminvalid-example" type="text" id="forminvalid-example" aria-describedby="tagline-description" value="" class="regular-text" /></td>
	</tr>
	<tr class="form-invalid">
		<th scope="row"><label for="forminvalid-example2">Form invalid on table row, <code>form-required</code> on the input</label></th>
		<td><input name="forminvalid-example" type="text" id="forminvalid-example2" aria-describedby="tagline-description" value="" class="regular-text form-required" /></td>
	</tr>
	<tr class="form-invalid form-required">
		<th scope="row"><label for="forminvalid-example3">Form invalid (<code>form-invalid</code>) with <code>form-required</code> on table row</label></th>
		<td><select id="forminvalid-example3"><option value="">Select an option</option></select></td>
	</tr>
	<tr class="form-invalid">
		<th scope="row"><label for="forminvalid-example4">Form invalid on table row, <code>form-required</code> on the select box</label></th>
		<td><select id="forminvalid-example4" class="form-required"><option value="">Select an option</option></select></td>
	</tr>
</table>

<br class="clear" />

<p><strong>Table with class <code>widefat</code></strong></p>
<table class="widefat">
	<tr>
		<th class="row-title"><?php esc_attr_e( 'Table header cell #1', 'WpAdminStyle' ); ?></th>
		<th><?php esc_attr_e( 'Table header cell #2', 'WpAdminStyle' ); ?></th>
	</tr>
	<tr>
		<td class="row-title"><label for="tablecell"><?php esc_attr_e(
					'Table Cell #1, with label', 'WpAdminStyle'
				); ?></label></td>
		<td><?php esc_attr_e( 'Table Cell #2', 'WpAdminStyle' ); ?></td>
	</tr>
	<tr class="alternate">
		<td class="row-title"><label for="tablecell"><?php esc_attr_e(
					'Table Cell #3, with label and class', 'WpAdminStyle'
				); ?> <code>alternate</code></label></td>
		<td><?php esc_attr_e( 'Table Cell #4', 'WpAdminStyle' ); ?></td>
	</tr>
	<tr>
		<td class="row-title"><?php esc_attr_e( 'Table Cell #5, without label', 'WpAdminStyle' ); ?></td>
		<td><?php esc_attr_e( 'Table Cell #6', 'WpAdminStyle' ); ?></td>
	</tr>
</table>

<br class="clear" />
<p><strong>Table with class <code>widefat</code></strong></p>
<table class="widefat">
	<thead>
	<tr>
		<th class="row-title"><?php esc_attr_e( 'Table header cell #1', 'WpAdminStyle' ); ?></th>
		<th><?php esc_attr_e( 'Table header cell #2', 'WpAdminStyle' ); ?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td class="row-title"><label for="tablecell"><?php esc_attr_e(
					'Table Cell #1, with label', 'WpAdminStyle'
				); ?></label></td>
		<td><?php esc_attr_e( 'Table Cell #2', 'WpAdminStyle' ); ?></td>
	</tr>
	<tr class="alternate">
		<td class="row-title"><label for="tablecell"><?php esc_attr_e(
					'Table Cell #3, with label and class', 'WpAdminStyle'
				); ?> <code>alternate</code></label></td>
		<td><?php esc_attr_e( 'Table Cell #4', 'WpAdminStyle' ); ?></td>
	</tr>
	<tr>
		<td class="row-title"><?php esc_attr_e( 'Table Cell #5, without label', 'WpAdminStyle' ); ?></td>
		<td><?php esc_attr_e( 'Table Cell #6', 'WpAdminStyle' ); ?></td>
	</tr>
	<tr class="alt">
		<td class="row-title"><?php esc_attr_e(
				'Table Cell #7, without label and with class', 'WpAdminStyle'
			); ?> <code>alt</code></td>
		<td><?php esc_attr_e( 'Table Cell #8', 'WpAdminStyle' ); ?></td>
	</tr>
	<tr class="form-invalid">
		<td class="row-title"><?php esc_attr_e(
				'Table Cell #9, without label and with class', 'WpAdminStyle'
			); ?> <code>form-invalid</code></td>
		<td><?php esc_attr_e( 'Table Cell #10', 'WpAdminStyle' ); ?></td>
	</tr>
	</tbody>
	<tfoot>
	<tr>
		<th class="row-title"><?php esc_attr_e( 'Table header cell #1', 'WpAdminStyle' ); ?></th>
		<th><?php esc_attr_e( 'Table header cell #2', 'WpAdminStyle' ); ?></th>
	</tr>
	</tfoot>
</table>
