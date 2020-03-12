{var $cities=$data['cities']}
{var $items=$data['items']}


<div id="addpage" class="functionpage">
    <div class="topbar">
        <div class="title">
            Add Rate Update
        </div>
    </div>

    <div class="updatepage">
        <form action="" id="addrateupdateform" method="post">
            <div class="box" id="box">
                <select name="item_id" id="item_id" class="txt">
                    {foreach $items as $item}
                    <option value="{$item['item_id']}"> {$item['item_name']} </option>
                    {/foreach}
                </select>



                <select name="city_id" id="city_id" class="txt">

                    {foreach $cities as $city}
                    <option value="{$city['city_id']}"> {$city['city_name']} </option>
                    {/foreach}

                </select>





                <input type="number" placeholder="Up Rate" id="uprate" required name="uprate" class="txt">

                <input type="number" placeholder="Down Rate" id="downrate" required name="downrate" class="txt">


            </div>
        </form>

        <div class="btnholder" id="btnholder">
            <div class="btn" id="btn" onclick="addrateupdate()">Save</div>
        </div>

    </div>

</div>