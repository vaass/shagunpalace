<?php /* Smarty version 2.6.18, created on 2013-03-24 06:48:27
         compiled from ../templates/default/billers/manage.tpl */ ?>
	<table class="buttons" align="center">
    <tr>
        <td>
            <a href="./index.php?module=billers&amp;view=add" class="positive">
                <img src="./images/famfam/add.png" alt="" />
                <?php echo $this->_tpl_vars['LANG']['add_new_biller']; ?>

            </a>

        </td>
    </tr>
 </table>
 
<?php if ($this->_tpl_vars['number_of_rows']['count'] == 0): ?>

	<br />
	<br />
	<span class="welcome"><?php echo $this->_tpl_vars['LANG']['no_billers']; ?>
</span>
	<br />
	<br />
	<br />
	<br />
	
<?php else: ?>

	<br />
	<table id="manageGrid" style="display:none"></table>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../modules/billers/manage.js.php', 'smarty_include_vars' => array('LANG' => $this->_tpl_vars['LANG'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php endif; ?>