{var $cities=$data['cities']}
{var $items=$data['items']}
{var $firms=$data['firms']}
{var $post=$data['post']}


<div id="addpage" class="functionpage">
    <div class="topbar">
        <div class="title">
            Update Contract
        </div>
    </div>

    <div class="updatepage">
        <form action="" id="addcontractform" method="post">
            <div class="box" id="box">
                <input type="hidden" name="contract_id" value="{$post['contract_id']}">
                <select name="item_id" id="item_id" class="txt">
                    {foreach $items as $item}
                    {if $item['item_id'] == $post['item_id'] }
                    <option selected value="{$item['item_id']}"> {$item['item_name']} </option>
                    {else}
                    <option value="{$item['item_id']}"> {$item['item_name']} </option>
                    {/if}

                    {/foreach}
                </select>

                <select name="country_name" id="country_name" class="txt">
                    <option value="+92"> Pakistan </option>
                </select>

                <select name="city_id" id="city_id" class="txt">
                    <option selected value=""> {$post['city_id']} </option>
                    {foreach $cities as $city}

                    {if $city['city_id'] == $post['city_id'] }
                    <option selected value="{$city['city_id']}"> {$city['city_name']} </option>
                    {else}
                    <option value="{$city['city_id']}"> {$city['city_name']} </option>
                    {/if}
                    {/foreach}



                </select>


                <select name="firm1" id="firm1" class="txt">
                    <option value="0">Select First Firm </option>
                    {foreach $firms as $firm}

                    {if $firm['firm_name'] == $post['firm1'] }
                    <option selected value="{$firm['firm_name']}"> {$firm['firm_name']} </option>
                    {else}
                    <option value="{$firm['firm_name']}"> {$firm['firm_name']} </option>
                    {/if}
                    {/foreach}

                </select>

                <select name="firm2" id="firm2" class="txt">
                    <option value="0">Select Second Firm </option>
                    {foreach $firms as $firm}
                    {if $firm['firm_name'] == $post['firm2'] }
                    <option selected value="{$firm['firm_name']}"> {$firm['firm_name']} </option>
                    {else}
                    <option value="{$firm['firm_name']}"> {$firm['firm_name']} </option>
                    {/if}
                    {/foreach}

                </select>



                <select name="unit" id="unit" class="txt">


                    <option value="Bale">Bale </option>
                    <option value="Kg">Kg </option>
                    <option value="Grams">Grams </option>
                    <option selected value="{$post['unit']}">{$post['unit']} </option>



                </select>

                <input type="number" placeholder="Price per Unit" value="{$post['price']}" id="price" required name="price" class="txt">

                <input type="number" placeholder="Quantity" id="qty" value="{$post['qty']}" required name="qty" class="txt">


            </div>
        </form>

        <div class="btnholder" id="btnholder">
            <div class="btn" id="btn" onclick="updatecontract()">Save</div>
        </div>

    </div>

</div>