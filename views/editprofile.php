{var $ud=$data['ud']}
{var $cities=$data['cities']}
<div class="sscreen">
    <div class="sscreen__header">
        <div class="sscreen__header__left">
            <!-- <img src="icons/install-icon.png" class="icon"> -->
            <div class="txt" onclick="loadprofile()">
                < <span> Profile </span>
            </div>
        </div>
        <div class="sscreen__header__right">
            <div class="btn" onclick="updateuser()"> Save </div>
        </div>
    </div>
    <div class="sscreen__body">
        <div class="clearfix"></div>
        <div class="imgholder" id="imgholder">
            <img src="assets/images/{$ud['u_profile']}" class="img">
        </div>

        <form action="#" id="uploadprofile" method="POST" enctype="multipart/form-data">

            <div class="editbtn">
                <img src="assets/icons/edit-icon.png" class="icon">
                <input type="file" id="profile-img" name="profile-img" accept="image/*" onchange="uploadprofile()">

            </div>

        </form>

        <form action="" id="updateform" method="post" enctype="multipart/form-data">


            <div class="box" id="box">
                <input type="hidden" id="profile" name="profile">
                <input type="hidden" id="oldprofile" value="{$ud['u_profile']}" name="oldprofile">

                <input type="text" id="name" name="name" value="{$ud['u_name']}" placeholder="Name" required class="txt">
                <input type="text" id="cell" name="cell" value="{$ud['u_cell']}" placeholder="Phone No" pattern="[0-9]{11}" required title="Match format (03001234567)" class="txt">
                <select name="cityid" id="cityid" class="txt">
                    <option value="0"> Select City </option>
                    {foreach $cities as $city}
                    {if $city["city_name"] == $ud['city_name'] }
                    <option selected value="{$city['city_id']}"> {$city['city_name']} </option>
                    {else}
                    <option value="{$city['city_id']}"> {$city['city_name']} </option>
                    {/if}
                    {/foreach}
                </select>
                <input type="password" id="password" value="{$ud['u_password']}" required name="password" placeholder="Password" class="txt">
            </div>
            <div id="msg"></div>
            <div id="errmsg"></div>

            <div class="btnholder" id="btnholder">
                <div id="holder"></div>
                <img onclick="updateuser()" src="assets/icons/save-icon.png" id="btn" class="startbtn">

            </div>
        </form>

    </div>


</div>