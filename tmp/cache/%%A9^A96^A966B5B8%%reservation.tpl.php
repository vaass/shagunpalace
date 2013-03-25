<?php /* Smarty version 2.6.18, created on 2013-03-24 07:28:02
         compiled from ../templates/default/customers/reservation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlsafe', '../templates/default/customers/reservation.tpl', 40, false),array('modifier', 'outhtml', '../templates/default/customers/reservation.tpl', 194, false),array('function', 'html_options', '../templates/default/customers/reservation.tpl', 199, false),)), $this); ?>

 

<?php if ($_POST['name'] != "" && $_POST['name'] != null): ?> 
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../templates/default/customers/save.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php else: ?>
 
<?php if ($_POST['id'] != null): ?> 
	<?php endif; ?>	
<form name="frmpost" action="index.php?module=customers&amp;view=add" method="post" id="frmpost" onsubmit="return checkForm(this);">
<br />
<table align="center">
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['customer_name']; ?>

		<a 
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_required_field"
			title="<?php echo $this->_tpl_vars['LANG']['Required_Field']; ?>
"
		>
		<img src="./images/common/required-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="name" id="name" value="<?php echo ((is_array($_tmp=$_POST['name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" class="validate[required]" /></td>
	</tr>
	</tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['customer_contact']; ?>

		<a
			rel="index.php?module=documentation&amp;view=view&amp;page=help_customer_contact"
			href="#"
			class="cluetip"
			title="<?php echo $this->_tpl_vars['LANG']['customer_contact']; ?>
"
		>
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="attention" value="<?php echo ((is_array($_tmp=$_POST['attention'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street']; ?>
</td>
		<td><input type="text" name="street_address" value="<?php echo ((is_array($_tmp=$_POST['street_address'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['street2']; ?>

		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_street2"
			title="<?php echo $this->_tpl_vars['LANG']['street2']; ?>
"
		> 
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="street_address2" value="<?php echo ((is_array($_tmp=$_POST['street_address2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['city']; ?>
</td>
		<td><input type="text" name="city" value="<?php echo ((is_array($_tmp=$_POST['city'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['state']; ?>
</td>
		<td><input type="text" name="state" value="<?php echo ((is_array($_tmp=$_POST['state'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['zip']; ?>
</td>
		<td><input type="text" name="zip_code" value="<?php echo ((is_array($_tmp=$_POST['zip_code'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['country']; ?>
</td>
		<td><input type="text" name="country" value="<?php echo ((is_array($_tmp=$_POST['country'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="50" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['phone']; ?>
</td>
		<td><input type="text" name="phone" value="<?php echo ((is_array($_tmp=$_POST['phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['mobile_phone']; ?>
</td>
		<td><input type="text" name="mobile_phone" value="<?php echo ((is_array($_tmp=$_POST['mobile_phone'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['fax']; ?>
</td>
		<td><input type="text" name="fax" value="<?php echo ((is_array($_tmp=$_POST['fax'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['email']; ?>
</td>
		<td><input type="text" name="email" value="<?php echo ((is_array($_tmp=$_POST['email'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_holder_name']; ?>
</td>
		<td>
			<input
				type="text" name="credit_card_holder_name"
			 	value="<?php echo ((is_array($_tmp=$_POST['credit_card_holder_name'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25"
			 />
		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_number']; ?>
</td>
		<td>
			<input
				type="text" name="credit_card_number"
			 	value="<?php echo ((is_array($_tmp=$_POST['credit_card_number'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25"
			 />
		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_expiry_month']; ?>
</td>
		<td>
			<input
				type="text" name="credit_card_expiry_month"
			 	value="<?php echo ((is_array($_tmp=$_POST['credit_card_expiry_month'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="5"
			 />
		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['credit_card_expiry_year']; ?>
</td>
		<td>
			<input
				type="text" name="credit_card_expiry_year"
			 	value="<?php echo ((is_array($_tmp=$_POST['credit_card_expiry_year'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="5"
			 />
		</td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

 		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
		>
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="custom_field1" value="<?php echo ((is_array($_tmp=$_POST['custom_field1'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
		> 
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="custom_field2" value="<?php echo ((is_array($_tmp=$_POST['custom_field2'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td> 
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
		> 
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="custom_field3" value="<?php echo ((is_array($_tmp=$_POST['custom_field3'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo ((is_array($_tmp=$this->_tpl_vars['customFieldLabel']['customer_cf4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>

		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			title="<?php echo $this->_tpl_vars['LANG']['Custom_Fields']; ?>
"
		> 
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="custom_field4" value="<?php echo ((is_array($_tmp=$_POST['custom_field4'])) ? $this->_run_mod_handler('htmlsafe', true, $_tmp) : htmlsafe($_tmp)); ?>
" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['notes']; ?>
</td>
		<td><textarea  name="notes" class="editor" rows="8" cols="50"><?php echo ((is_array($_tmp=$_POST['notes'])) ? $this->_run_mod_handler('outhtml', true, $_tmp) : outhtml($_tmp)); ?>
</textarea></td>
	</tr>
	<tr>
		<td class="details_screen"><?php echo $this->_tpl_vars['LANG']['enabled']; ?>
</td>
		<td>
			<?php echo smarty_function_html_options(array('name' => 'enabled','options' => $this->_tpl_vars['enabled'],'selected' => 1), $this);?>

		</td>
	</tr>
	
	
</table>
<br />
<table class="buttons" align="center">
    <tr>
        <td>
            <button type="submit" class="positive" name="id" value="<?php echo $this->_tpl_vars['LANG']['save']; ?>
">
                <img class="button_img" src="./images/common/tick.png" alt="" /> 
                <?php echo $this->_tpl_vars['LANG']['save']; ?>

            </button>
		</td>
		<td>
            <input type="hidden" name="op" value="insert_customer" />
        
            <a href="./index.php?module=customers&amp;view=manage" class="negative">
                <img src="./images/common/cross.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['cancel']; ?>

            </a>
    
        </td>
    </tr>
</table>
</form>
<?php endif; ?>