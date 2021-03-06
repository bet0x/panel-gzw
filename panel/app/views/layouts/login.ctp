<?php
/*Panel-GZW is a web hosting panel for Unix/Linux platforms.
Copyright (C) 2005 - 2011  GoldZone Web - gaetan.trellu@goldzoneweb.info

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * Display the doctype.
 */
echo $html->docType('xhtml-strict');
?>
	
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
		/**
		 * Display the charset.
		 */
		echo $html->charset();

		/**
		 * Select the CCS sheet.
		 */
		echo $html->css('login.css');

		/**
		 * Display a favicon.
		 */
		echo $html->meta('icon', $html->url('/img/favicon.ico'));
	?>
	<title><?php __d('core', 'Login to Panel GZW'); ?></title>
</head>

<body>
	<div align="center">
		<div id="encadrement">
			<div id="header">
				<div class="logo"><?php echo $html->image('/img/logo.png', array('alt' => __d('core', 'Logo', true))); ?></div>
			</div>
			<div id="centre">

				<?php
					/**
					 * Create the login form.
					 */	
					echo $form->create('User', array('action' => 'login'));
				?>

				<table>
					<tr>
						<td><?php __d('core', 'User ID')?></td>
						<td><?php echo $form->input('User.name', array('label' => false, 'type' => 'text', 'size' => '31')); ?></td>
					</tr>
					<tr>
						<td><?php __d('core','Password')?></td>
						<td><?php echo $form->input('User.password', array('label' => false, 'type' => 'password', 'size' => '31')); ?></td>
					</tr>
					<tr>
						<td align="right" colspan="2">
						<?php
							/**
							 * Check if "HTTPS" protocol is used.
							 */
							if ($_SERVER['HTTPS'] == 'on') {

								/**
								 * Display an image and text.
								 * @var string
								 */
								$ssl = $html->image('ssl.png', array('alt' => 'SSL Enabled'));
								echo $ssl . '&#160;' . __d('core', 'SSL enabled', true);

							} else {

								/**
								 * Display an image and text.
								 * @var string
								 */
								$noSsl = $html->image('no_ssl.png', array('alt' => 'SSL Disabled'));
								echo $noSsl . '&#160;' . __d('core', 'SSL disabled', true);

							}

							/**
							 * Close the login form (button).
							 */
							echo $form->end(__d('core', 'Login', true));

						?>
						</td>
					</tr>
				</table>
	
				<div id="footer">
					<?php echo $html->link('Panel GZW', 'http://www.panel-gzw.com'); ?><br/>
					<?php echo $html->link(__d('core', 'Under GPL license', true), 'http://www.gnu.org/licenses/gpl-3.0.html'); ?><br/>
					<?php echo $html->link('GoldZone Web', 'http://www.goldzoneweb.info'); ?><br/>
					2005 - 2011
				</div>

			</div>
		</div>
	</div>
</body>
</html>