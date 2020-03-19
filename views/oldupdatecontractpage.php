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



            <div class="c-cardedit" id="{$post_id}">

                <div class="clearfix"></div>

                <div class="body">
                    <div class="rate-update">
                        <div class="title">
                            <div class="rate-of">
                                <select name="item_id" id="item_id" class="txt">
                                    {foreach $items as $item}
                                    {if $item['item_id'] == $post['item_id'] }
                                    <option selected value="{$item['item_id']}"> {$item['item_name']} </option>
                                    {else}
                                    <option value="{$item['item_id']}"> {$item['item_name']} </option>
                                    {/if}

                                    {/foreach}
                                </select>
                            </div>
                            <div class="city">
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
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="contract">
                        <div class="company">
                            <div class="bar"></div>
                            <label for=""> Seller</label>
                            <div class="company-name"><input type="text" name="firm1" class="txt" value="{$post['firm1']}"> </div>
                            <label for=""> Buyer</label>
                            <div class="company-name"><input type="text" name="firm2" class="txt" value="{$post['firm2']}"> </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="rate">Rate : <span>
                                <input type="number" placeholder="Rate" value="{$post['price']}" id="price" required name="price" class="txt">

                                <span>
                                    <select name="unit" id="unit" class="txt">


                                        <option value="(40KG)"> 40 KG </option>
                                        <option value="(37.324)">37.324 Kg </option>

                                        <option selected value="{$post['unit']}">{$post['unit']} </option>



                                    </select>
                                </span> </span></div>
                        <div class="qty">Qty : <span>
                                <input type="number" placeholder="Quantity" id="qty" value="{$post['qty']}" required name="qty" class="txt">
                                <span>
                                    <select name="qty_unit" id="" class="txt">
                                        <option value=" ">Item</option>
                                        <option value="Bale">Bale</option>
                                        <option value="Bora">Bora</option>
                                        <option value="Truck">Truck</option>
                                        <option selected value="{$post['qty_unit']}">{$post['qty_unit']} </option>

                                    </select>
                                </span> </span></div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div><!-- c-card ends here -->



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