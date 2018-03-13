[{$smarty.block.parent}]
[{oxhasrights ident="SHOWARTICLEPRICE"}]
[{assign var="aArticleDiscounts" value=$oDetailsProduct->getArticleDiscounts() }]
[{if $aArticleDiscounts || $aBasketDiscounts}]
    <div class="panel panel-success">
        <div class="panel-heading">[{oxmultilang ident="vtdad_activediscounts"}] <small>([{oxmultilang ident="vtdad_alreadyinprice"}])</small></div>
        <div class="panel-body">

            [{foreach from=$aArticleDiscounts item="_oDiscount" name=discounts}]
                <div>
                    [{$_oDiscount->oxdiscount__oxtitle->value}]
                    [{if $_oDiscount->oxdiscount__oxactiveto->value != '0000-00-00 00:00:00'}]
                        <small>(gültig bis zum [{$_oDiscount->oxdiscount__oxactiveto->value|date_format:'%d.%m.%Y'}])</small>
                    [{/if}]
                    <span class="pull-right badge">[{oxmultilang ident="vtdad_yousave"}] [{$_oDiscount->getAbsValue($oDetailsProduct->getBasePrice())}] [{$currency->sign }]</span>
                </div>
            [{/foreach}]
        </div>
    </div>
[{/if}]
[{/oxhasrights}]