<?php

/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    PlusPort_Academy
 * @subpackage PlusPort_Academy/admin/partials
 */

function print_options_page()
{
	$notice_update = false;

	if (isset($_POST['plusport-academy-settings']) && check_admin_referer('plusport-academy-settings'))
	{
		update_option('academy_username', $_POST['academy_username'], true);
		update_option('academy_password', $_POST['academy_password'], true);
		update_option('academy_portal_guid', $_POST['academy_portal_guid'], true);
		update_option('academy_portal_id', $_POST['academy_portal_id'], true);
		update_option('academy_environment', $_POST['academy_environment'], true);
		$notice_update = true;
	}

	if ($notice_update == true) {
		echo '<div id="message" class="updated fade"><p><strong>'.__('Settings saved.','plusport-academy').'</strong></p></div>';
	}
?>
	<div class="wrap" id="plusport-academy-settings">
		<h2>PlusPort Academy</h2>
		<div id="poststuff">
			<div id="post-body" class="metabox-holder">
				<div id="post-body-content">
					<form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
						<div id="namediv" class="stuffbox">
						<h3 class="hndle"><?php _e('Webuser','plusport-academy-settings'); ?></h3>
							<div class="inside">
								<table class="form-table">
									<tr valign="top">
										<th scope="row" class="th-full">
											<label for="academy_username"><?php _e('Username','plusport-academy'); ?></label>
										</th>
										<td>
											<input name="academy_username" type="text" id="academy_username" value="<?php echo esc_attr(get_option('academy_username')); ?>" class="regular-text code" />
										</td>
									</tr>
									<tr valign="top">
										<th scope="row" class="th-full">
											<label for="academy_password"><?php _e('Password','plusport-academy'); ?></label>
										</th>
										<td>
											<input name="academy_password" type="password" id="academy_password" value="<?php echo esc_attr(get_option('academy_password')); ?>" class="regular-text code" />
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div id="namediv" class="stuffbox">
							<h3 class="hndle"><?php _e('Portal','plusport-academy-settings'); ?></h3>
							<div class="inside">
								<table class="form-table">
									<tr valign="top">
										<th scope="row" class="th-full">
											<label for="academy_portal_guid"><?php _e('Portal GUID','plusport-academy'); ?></label>
										</th>
										<td>
											<input name="academy_portal_guid" type="text" id="academy_portal_guid" value="<?php echo esc_attr(get_option('academy_portal_guid')); ?>" class="regular-text code" />
										</td>
									</tr>
									<tr valign="top">
										<th scope="row" class="th-full">
											<label for="academy_portal_id"><?php _e('Portal ID','plusport-academy'); ?></label>
										</th>
										<td>
											<input name="academy_portal_id" type="text" id="academy_portal_id" value="<?php echo esc_attr(get_option('academy_portal_id')); ?>" class="regular-text code" />
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div id="namediv" class="stuffbox">
							<h3 class="hndle"><?php _e('Omgeving','plusport-academy-settings'); ?></h3>
							<div class="inside">
								<table class="form-table">
									<tr valign="top">
										<th scope="row" class="th-full">
											<label for="academy_portal_guid"><?php _e('Omgeving','plusport-academy'); ?></label>
										</th>
										<td>
											<select name="academy_environment" id="academy_environment" class="regular-text code">
												<option <?php if(esc_attr(get_option('academy_environment')) == 'live'){ echo "selected"; } ?> value="live">Live</option>
												<option <?php if(esc_attr(get_option('academy_environment')) == 'staging'){ echo "selected"; } ?> value="staging">Staging</option>
												<option <?php if(esc_attr(get_option('academy_environment')) == 'test'){ echo "selected"; } ?> value="test">Test</option>
											</select>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div id="validation">
							<?php wp_nonce_field('plusport-academy-settings');?>
							<input type="submit" value="<?php _e('Update','plusport-academy');?>" class="button-primary button" name="plusport-academy-settings"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php
}
?>
