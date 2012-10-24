[{assign var="aDiscounts" value=$article->getAllDiscounts() }]
[{assign var="currency" value=$oView->getActCurrency()}]
<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border:1px solid green;">
	<tr style="color:white;background: green;font-size:125%;"><td>&nbsp;</td><td><strong>[{oxmultilang ident="vtdad_activediscounts"}]</strong></td><th>[{oxmultilang ident="vtdad_yousave"}]</th></tr>
	[{foreach from=$aDiscounts item="_oDiscount" name=discounts}]
		<tr style="background: [{if $smarty.foreach.discounts.iteration is even }]#dfdfdf[{else}]white[{/if}];">
			<td>&nbsp;[{$smarty.foreach.discounts.iteration}]:&nbsp;</td>
			<td>[{$_oDiscount->oxdiscount__oxtitle->value}]</td>
			<th>[{$_oDiscount->getAbsValue($article->getBasePrice())}] [{$currency->sign }]</th>
		</tr>
	[{/foreach}]
</table>