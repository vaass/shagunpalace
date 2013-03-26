{*
* Script: add.tpl
* 	 Customers add template
*
* Last edited:
* 	 2008-08-25
*
* License:
*	 GPL v3 or above
*}

{* if customer is updated or saved.*} 

{if $smarty.post.name != "" && $smarty.post.name != null } 
	{include file="../templates/default/customers/save.tpl"}

{else}
{* if  name was inserted *} 
{if $smarty.post.id !=null} 
{*
		<div class="validation_alert"><img src="./images/common/important.png" alt="" />
		You must enter a description for the Customer</div>
		<hr />
*}
	{/if}	
<form name="frmpost" action="index.php?module=customers&amp;view=add" method="post" id="frmpost" onsubmit="return checkForm(this);">
<br />
<div style="float:left; font-size:18px; margin-bottom:30px; text-align:center; color:#069;  width:100%;">{$LANG.new_reservation}</div>
<table align="center">
	<tr>
		<td class="details_screen">{$LANG.c_name}
		<a 
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_required_field"
			title="{$LANG.Required_Field}"
		>
		<img src="./images/common/required-small.png" alt="" />
		</a>
	  </td>
		<td><input type="text" name="name" id="name" value="{$smarty.post.name|htmlsafe}" size="25" class="validate[required]" /></td>
	</tr>
	</tr>
		<td class="details_screen">{$LANG.c_father_name}
		<a
			rel="index.php?module=documentation&amp;view=view&amp;page=help_customer_contact"
			href="#"
			class="cluetip"
			title="{$LANG.customer_contact}"
		>
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="attention" value="{$smarty.post.attention|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.c_email}</td>
		<td><input type="text" name="street_address" value="{$smarty.post.street_address|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.c_address}
		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_street2"
			title="{$LANG.street2}"
		> 
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="street_address2" value="{$smarty.post.street_address2|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.c_hno}</td>
		<td><input type="text" name="city" value="{$smarty.post.city|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.c_po}</td>
		<td><input type="text" name="state" value="{$smarty.post.state|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.c_city}</td>
		<td><input type="text" name="zip_code" value="{$smarty.post.zip_code|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.c_state}</td>
		<td><input type="text" name="zip_code2" value="{$smarty.post.zip_code|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.c_country}</td>
		<td><input type="text" name="phone" value="{$smarty.post.phone|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.c_c_no}</td>
		<td><input type="text" name="mobile_phone" value="{$smarty.post.mobile_phone|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.c_c_no1}</td>
		<td><input type="text" name="fax" value="{$smarty.post.fax|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.c_c_no2}</td>
		<td><input type="text" name="email" value="{$smarty.post.email|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.purpose}</td>
		<td>
			<input
				type="text" name="credit_card_holder_name"
			 	value="{$smarty.post.credit_card_holder_name|htmlsafe}" size="25"
			 />
		</td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.booking_d}</td>
		<td>
			<input
				type="text" name="credit_card_number"
			 	value="{$smarty.post.credit_card_number|htmlsafe}" size="25"
			 />
		</td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.time_d}</td>
		<td><input
				type="text" name="credit_card_number2"
			 	value="{$smarty.post.credit_card_number|htmlsafe}" size="25"
			 /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.gathering_d}</td>
		<td><input
				type="text" name="credit_card_number3"
			 	value="{$smarty.post.credit_card_number|htmlsafe}" size="25"
			 /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.waiters_a}
 		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			title="{$LANG.Custom_Fields}">
	
		</a>
		</td>
		<td><input type="text" name="custom_field1" value="{$smarty.post.custom_field1|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.waiters_b}
		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			title="{$LANG.Custom_Fields}"
		> 
		
		</a>
		</td>
		<td><input type="text" name="custom_field2" value="{$smarty.post.custom_field2|htmlsafe}" size="25" /></td> 
	</tr>
	<tr>
		<td class="details_screen">{$LANG.flower_d}
		<a
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_custom_fields"
			title="{$LANG.Custom_Fields}"
		> 
		
		</a>
		</td>
		<td><input type="text" name="custom_field3" value="{$smarty.post.custom_field3|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.e_charge}</td>
		<td><input type="text" name="custom_field4" value="{$smarty.post.custom_field4|htmlsafe}" size="25" /></td>
	</tr>
    <tr>
		<td class="details_screen">{$LANG.anand_k}</td>
		<td><input type="text" name="custom_field4" value="{$smarty.post.custom_field4|htmlsafe}" size="25" /></td>
	</tr>
	<tr>
		<td class="details_screen">{$LANG.enabled}</td>
		<td>
			{html_options name=enabled options=$enabled selected=1}
		</td>
	</tr>
	
	{* 
		{showCustomFields categorieId="2"}
	*}

</table>
<br />
<table class="buttons" align="center">
    <tr>
        <td>
            <button type="submit" class="positive" name="id" value="{$LANG.save}">
                <img class="button_img" src="./images/common/tick.png" alt="" /> 
                {$LANG.save}
            </button>
		</td>
		<td>
            <input type="hidden" name="op" value="insert_customer" />
        
            <a href="./index.php?module=customers&amp;view=manage" class="negative">
                <img src="./images/common/cross.png" alt="" />
                {$LANG.cancel}
            </a>
    
        </td>
    </tr>
</table>
</form>
{/if}
