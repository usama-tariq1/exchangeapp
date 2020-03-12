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

                <select name="country_name" id="country_name" class="txt">
                    <option value="+92"> Pakistan </option>
                </select>

                <select name="city_id" id="city_id" class="txt">
                    {foreach $cities as $city}
                    <option value="{$city['city_id']}"> {$city['city_name']} </option>
                    {/foreach}

                </select>

                <select name="firm1" id="firm1" class="txt">
                    <option value="0">Select First Firm </option>
                    {foreach $firms as $firm}
                    <option value="{$firm['firm_name']}"> {$firm['firm_name']} </option>
                    {/foreach}

                </select>

                <select name="firm2" id="firm2" class="txt">
                    <option value="0">Select Second Firm </option>
                    {foreach $firms as $firm}
                    <option value="{$firm['firm_name']}"> {$firm['firm_name']} </option>
                    {/foreach}

                </select>



                <select name="unit" id="unit" class="txt">

                    <option value="Bale">Bale </option>
                    <option value="Kg">Kg </option>
                    <option value="Grams">Grams </option>



                </select>

                <input type="number" placeholder="Price per Unit" id="price" required name="price" class="txt">

                <input type="number" placeholder="Quantity" id="qty" required name="qty" class="txt">


            </div>
        </form>

        <div class="btnholder" id="btnholder">
            <div class="btn" id="btn" onclick="addcontract()">Save</div>
        </div>

    </div>

</div>