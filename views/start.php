
<div class="screen">

    <div class="screen__header">
        <div class="screen__header__left">
            <img src="/assets/icons/install-icon.png" class="icon">
        </div>
        <div class="screen__header__right">
            
            <div class="btn" onclick="loadpage('/signout')"> SignOut </div>
        </div>
    </div>
    <div class="screen__body">
        <div class="clearfix"></div>
        <div class="imgholder">
            <img src="/assets/images/{$data['u_profile']}" class="img">
        </div>
        <div class="title"> {$data['u_name']} </div>
        <div class="subtitle"> {$data['city_name']} </div>
        <div class="btnholder">

            <img src="/assets/icons/start-icon.png" onclick="loadfeed()" class="startbtn">
        </div>

    </div>
    <div class="screen__footer">
        <div class="left">
            <img src="/assets/icons/exchange-circle-icon.png" class="icon">
        </div>
        <div class="right">
            <!-- <div class="btn">Start </div> -->
        </div>
    </div>

</div>