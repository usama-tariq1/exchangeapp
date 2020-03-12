{var $cities=$data['cities']}
{var $items=$data['items']}
{var $post=$data['post']}


<div id="addpage" class="functionpage">
    <div class="topbar">
        <div class="title">
            Add Rate Update
        </div>
    </div>

    <div class="updatepage">
        <form action="" id="addrateupdateform" method="post">
            <div class="box" id="box">
                <input type="hidden" name="rateupdate_id" value="{$post['rateupdate_id']}">
                <select name="item_id" id="item_id" class="txt">
                    {foreach $items as $item}
                    {if $item['item_id'] == $post['item_id'] }
                    <option selected value="{$item['item_id']}"> {$item['item_name']} </option>
                    {else}
                    <option value="{$item['item_id']}"> {$item['item_name']} </option>
                    {/if}

                    {/foreach}
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





                <input type="number" value="{$post['uprate']}" placeholder="Up Rate" id="uprate" required name="uprate" class="txt">

                <input type="number" value="{$post['downrate']}" placeholder="Down Rate" id="downrate" required name="downrate" class="txt">


            </div>
        </form>

        <div class="btnholder" id="btnholder">
            <div class="btn" id="btn" onclick="editrateupdate()">Save</div>
        </div>

    </div>

</div>