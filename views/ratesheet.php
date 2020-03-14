{var $apirates= $data['apirates']}
{var $type = $data['type']}
<div class="ratesheet">
    <div class="topbar">
        <div class="left"> <img src="/assets/icons/reload-icon.png" onclick="loadpage('/ratesheet')" class="icon"> </div>
        <div class="right">
            <select name="selector" onchange="ratesof(this.value)" id="typeselector" class="selector">
                {if $type == 'all'}
                <option selected value="0"> Currency | Commodities </option>
                <option value="1"> Currency </option>
                <option value="2"> Commodities </option>
                {elseif $type == 'currency'}
                <option value="0"> Currency | Commodities </option>
                <option selected value="1"> Currency </option>
                <option value="2"> Commodities </option>
                {elseif $type == 'commodity'}
                <option value="0"> Currency | Commodities </option>
                <option value="1"> Currency </option>
                <option selected value="2"> Commodities </option>
                {else}
                <option value="0"> Commodities </option>
                <option value="1"> Commodities </option>
                <option value="2"> Commodities </option>
                {/if}

            </select>
        </div>
    </div>

    <div class="ratecontent" id="ratecontent">
        {foreach $apirates as $rate }
        <div class="ratecard">
            <div class="left">
                <div class="itemname">{$rate['name']}</div>
                <div class="date">{$rate['date']}</div>
                <div class="province">Pakistan</div>
            </div>
            <div class="right">
                <div class="currency">Rupees</div>
                <div class="universalrate"> <span><i class="fa fa-chevron-up" aria-hidden="true"></i></span> {$rate['uprate'] |number:2}</div>
                <div class="local" style="color:red;"> <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span> {$rate['downrate'] |number:2}</div>
            </div>
        </div>
        {/foreach}
    </div>

    <div class="scrollspace" id="scrollspace"></div>

</div>