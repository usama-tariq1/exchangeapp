{var $cities=$data['cities']}
<div class="sscreen">
    <div class="sscreen__header">
        <div class="sscreen__header__left">
            <!-- <img src="icons/install-icon.png" class="icon"> -->
            <div class="txt">Already Have an Account? </div>
        </div>
        <div class="sscreen__header__right">
            <div class="btn" onclick="loadpage('/login')"> Sign In </div>
        </div>
    </div>
    <div class="sscreen__body">
        <div class="clearfix"></div>
        <div class="imgholder" id="imgholder">
            <img src="assets/icons/avatar-icon.png" class="img">
        </div>

        <form action="#" id="uploadprofile" method="POST" enctype="multipart/form-data">

            <div class="editbtn">
                <img src="assets/icons/edit-icon.png" class="icon">
                <input type="file" id="profile-img" name="profile-img" onchange="uploadprofile()">

            </div>

        </form>

        <form action="/adduser" id="signupform" method="post" enctype="multipart/form-data">


            <div class="box" id="box">
                <input type="hidden" id="profile" name="profile">
                <input type="text" id="name" name="name" placeholder="Name" required class="txt">
                <input type="text" id="cell" name="cell" placeholder="Phone No" pattern="[0-9]{11}" required title="Match format (03001234567)" class="txt">
                <select name="cityid" id="cityid" class="txt">
                    <option value="0"> Select City </option>
                    {foreach $cities as $city}
                    <option value="{$city['city_id']}"> {$city['city_name']} </option>
                    {/foreach}
                </select>
                <input type="password" id="password" required name="password" placeholder="Password" class="txt">
            </div>
            <div class="btnholder" id="btnholder">
                <div id="holder"></div>
                <img onclick="adduser()" src="assets/icons/save-icon.png" id="btn" class="startbtn">

            </div>
        </form>

    </div>
    <div class="sscreen__footer">
        <div class="left">
            <img src="assets/icons/exchange-circle-icon.png" class="icon">
        </div>
        <div class="right">

        </div>
    </div>

</div>