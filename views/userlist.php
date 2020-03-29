{var $userlist =$data['userlist']}

{foreach $userlist as $user}


{var $u_id= $user['u_id']}
<div class="row" onclick="loadpage('/user?id='+{$u_id})">
    <div class="imgholder"><img src="/assets/images/{$user['u_profile']}" class="img"></div>
    <div class="userinfo">
        <div class="name">{$user['u_name']}</div>
        <div class="city">{$user['city_name']} , {$user['city_state']}</div>
    </div>
    <div class="clearfix"></div>
</div>

{/foreach}