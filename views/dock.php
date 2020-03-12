{var $user=$data['ud']}
<div class="dock">
    <!-- style="margin-top: -40px; width:80px; margin-right:0px; " -->
    <div class="element ">
        <div class="label"> HOME </div>
        </a>
        <div class="icon" onclick="loadfeed()"><img src="/assets/icons/homelogo.png" class="img"></div>
    </div>

    <div class="element">
        <div class="label">RATES</div>
        <div class="icon" onclick="loadpage('/ratesheet')"><img src="/assets/icons/trade2.png" class="img"></div>
    </div>

    <div class="element">
        <div class="label">ADD</div>
        <div class="icon" onclick="loadpage('/posts/types')"><img src="/assets/icons/add2.png" class="img"></div>
    </div>

    <div class="element">
        <div class="label">PROFILE</div>
        <div class="icon" onclick="loadprofile()" style="border:2px solid white; border-radius:50%; overflow:hidden; "><img src="/assets/images/{$user['u_profile']}" class="img"></div>
    </div>




</div>