[{$smarty.block.parent}]

[{assign var="aBasketDiscounts" value=$basketproduct->getBasketItemDiscounts() }]
[{* if $aBasketDiscounts}]
    </div>
    <div class="clearfix">
        <div class="panel panel-success">
            <div class="panel-heading">[{oxmultilang ident="vtdad_basketdiscounts"}]</div>
            <div class="panel-body">
                [{foreach from=$aBasketDiscounts item="_oDiscount" name=discounts}]
                    <div>
                        [{$_oDiscount->oxdiscount__oxtitle->value}]
                        [{if $_oDiscount->oxdiscount__oxactiveto->value != '0000-00-00 00:00:00'}]
                            <small>(gültig bis zum [{$_oDiscount->oxdiscount__oxactiveto->value}])</small>
                        [{/if}]
                        <span class="pull-right badge">
                            [{$_oDiscount->oxdiscount__oxaddsum->value}]

                            [{if $_oDiscount->oxdiscount__oxamountto->value > 0}][{oxmultilang ident="vtdad_upto"}] [{ $_oDiscount->oxdiscount__oxamountto->value }]}[{/if}]

                            [{if $_oDiscount->oxdiscount__oxaddsumtype->value == "abs"}] [{$currency-sign}]
                            [{elseif $_oDiscount->oxdiscount__oxaddsumtype->value == "%"}] [{$_oDiscount->oxdiscount__oxaddsumtype->value}][{/if}]
                        </span>
                    </div>
                [{/foreach}]
            </div>
        </div>
[{/if *}]