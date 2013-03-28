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
<div style="float:left; font-size:18px; margin-bottom:30px; text-align:center; color:#069;  width:100%;">{$LANG.search_dt}</div>
<table align="center">
	<tr>
		<td class="details_screen">{$LANG.enter_d}
		<a 
			class="cluetip"
			href="#"
			rel="index.php?module=documentation&amp;view=view&amp;page=help_required_field"
			title="{$LANG.Required_Field}"
		>
		<img src="./images/common/required-small.png" alt="" />
		</a>
		</td>
		<td width="200"> <input 
				type="text" 
				class="validate[required,custom[date],length[0,10]] date-picker" 
				size="10" 
				name="date" 
				id="date1" 
				{if $smarty.get.date}
				    value="{$smarty.get.date}"
				{else}
                                    value='{$smarty.now|date_format:"%Y-%m-%d"}' 
                                {/if}
			    />   </td>
	</tr>
	</tr>
		<td class="details_screen">{$LANG.enter_time}
		<a
			rel="index.php?module=documentation&amp;view=view&amp;page=help_customer_contact"
			href="#"
			class="cluetip"
			title="{$LANG.customer_contact}"
		>
		<img src="./images/common/help-small.png" alt="" />
		</a>
		</td>
		<td><input type="text" name="city" value="{$smarty.post.city|htmlsafe}" size="25" /></td>
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
                {$LANG.search}
            </button>
		</td>
		
    </tr>
</table>
</form>
{/if}
