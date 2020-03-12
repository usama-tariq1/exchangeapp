<div id="addpage" class="functionpage">
    <div class="topbar">
        <div class="title">
            Add City
        </div>
    </div>

    <div class="updatepage">

        <div class="box" id="box">

            <form action="" id="addcityform" method="post">
                <input type="text" placeholder="City Name" name="city_name" required class="txt" id="cityname">

                <select name="city_state" id="citystate" class="txt">

                    <option value="Punjan"> Punjab </option>
                    <option value="Sindh"> Sindh </option>
                    <option value="Gilgit"> Gilgit </option>
                    <option value="Khybar Phaktoon ">Khybar Phaktoon </option>
                    <option value="Kashmir ">Kashmir</option>
                    <option value="Balochistan">Balochistan</option>


                </select>
            </form>


        </div>

        <div class="btnholder">
            <div class="btn" onclick="addcity()">Save</div>
        </div>

    </div>

</div>