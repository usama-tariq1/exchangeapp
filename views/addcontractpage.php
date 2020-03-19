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
            <div class="box" id="box">
                <select name="item_id" id="item_id" class="txt">
                    {foreach $items as $item}
                    <option value="{$item['item_id']}"> {$item['item_name']} </option>
                    {/foreach}
                </select>

                <input type="hidden" name="country_name" value="pakistan">

                <select name="city_id" id="city_id" class="txt">
                    {foreach $cities as $city}
                    <option value="{$city['city_id']}"> {$city['city_name']} </option>
                    {/foreach}

                </select>

                <input type="text" id="firm1" name="firm1" placeholder="Seller" class="txt">



                <textarea name="firm2" id="firm2" placeholder="Buyer..." class="txt" cols="1" rows="3"></textarea>

                <div class="txt" style="height:auto; text-indent:0px; ">


                    <input checked="checked" type="radio" name="unit" value="(37.324 KG)" id="unit">
                    <label for="unit">(37.324 KG)</label></br>
                    <input type="radio" name="unit" value="(40 KG)" id="unit">
                    <label for="unit">(40 KG)</label>

                </div>


                <input type="number" placeholder="Rate" id="price" required name="price" class="txt">

                <input type="number" placeholder="Quantity" id="qty" required name="qty" class="txt" style="width:40%;float:left; margin-left:20px; ">
                <!--                 <input type="text" placeholder="Item" name="qty_unit" class="txt" style="width:30%;float:right; margin-right:20px; "> -->

                <select name="qty_unit" id="" class="txt" style="width:30%;float:right; margin-right:20px; ">
                    <option value=" ">Item</option>
                    <option value="Bale">Bale</option>
                    <option value="Bora">Bora</option>
                    <option value="Truck">Truck</option>

                </select>

                <div class="clearfix"> </div>


            </div>
        </form>

        <div class="btnholder" id="btnholder">
            <div class="btn" id="btn" onclick="addcontract()">Save</div>
        </div>

    </div>

</div>