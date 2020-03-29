{var $cities=$data['cities']}
{var $items=$data['items']}
{var $firms=$data['firms']}

<div id="addpage" class="functionpage">
    <div class="topbar">
        <div class="title">
            Add Contract
        </div>
    </div>

    <div class="updatepage">
        <form action="" id="addcontractform" method="post">


            <input type="hidden" name="country_name" value=" ">

            <div class="c-cardedit" id="box">

                <div class="clearfix"></div>

                <div class="body">
                    <div class="rate-update">
                        <div class="title">
                            <div class="rate-of">
                                <select name="item_id" id="item_id" class="txt">
                                    {foreach $items as $item}
                                    <option value="{$item['item_id']}"> {$item['item_name']} </option>
                                    {/foreach}
                                </select>
                            </div>
                            <div class="city">
                                <select name="city_id" id="city_id" class="txt">
                                    {foreach $cities as $city }
                                    <option value="{$city['city_id']}"> {$city['city_name']} </option>
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
                            <div class="company-name"><input type="text" placeholder="Seller" name="firm1" class="txt"> </div>
                            <label for=""> Buyer</label>
                            <div class="company-name"><textarea name="firm2" placeholder="Buyers..." class="txt" rows="2" cols="10"></textarea> </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="rate">Rate : <span>
                                <input type="number" placeholder="Rate" id="price" required name="price" class="txt">

                                <span>
                                    <select name="unit" id="unit" class="txt">


                                        <option value="(40 KG)"> 40 KG </option>
                                        <option value="(37.324 KG)">37.324 Kg </option>





                                    </select>
                                </span> </span>
                        </div>
                        <div class="qty">Qty : <span>
                                <input type="number" placeholder="Quantity" id="qty" required name="qty" class="txt">
                                <span>
                                    <select name="qty_unit" id="" class="txt">
                                        <option value=" ">Item</option>
                                        <option value="Bales">Bales</option>
                                        <option value="Bag">Bag</option>



                                    </select>
                                </span> </span>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div><!-- c-card ends here -->

        </form>

        <div class="btnholder" id="btnholder">
            <div class="btn" id="btn" onclick="addcontract()">Save</div>
        </div>

    </div>

</div>