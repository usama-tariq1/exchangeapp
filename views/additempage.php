{var $types = $data['types']}
<div id="addpage" class="functionpage">
    <div class="topbar">
        <div class="title">
            Add Item
        </div>
    </div>

    <div class="updatepage">

        <div class="box" id="box">

            <form action="" id="additemform" method="post">
                <input type="text" placeholder="Item Name" name="item_name" required class="txt" id="itemname">

                <select name="type_id" id="typeid" class="txt">

                    {foreach $types as $type }
                    <option value="{$type['type_id']}"> {$type['type_name']} </option>
                    {/foreach}

                </select>
            </form>


        </div>

        <div class="btnholder">
            <div class="btn" onclick="additem()">Save</div>
        </div>

    </div>

</div>