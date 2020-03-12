{var $ud=$data['ud']}
{var $posts=$data['posts']}
<div class="profile">

    <div class="profilehold">
        <!-- <img src="icons/3dot.png" class="dots"> -->
        <div class="pimg">
            <img src="/assets/images/{$ud['u_profile']}" class="img">

        </div>
        <div class="bio">
            <div class="name">{$ud['u_name']} </div>
            <div class="contact"> <i style="color:red" class="fa fa-phone" aria-hidden="true"></i> {$ud['u_cell']}</div>
            <div class="city"> <i style="color:red" class="fa fa-map-marker" aria-hidden="true"></i> {$ud['city_name']},{$ud['city_state']} </div>
            <div class="editbtn" onclick="loadpage('user/updateform')"> Edit Profile </div>
            <!-- <div class="editmenu">

</div> -->
        </div>
    </div>

    <div class="nullvoid" id="nullvoid"></div>
    {foreach $posts as $post}
    {var $posttype = $post['post_type']}
    {var $post_id= $post['post_id']}
    {if $posttype == 'contract' }

    <div class="c-card" id="{$post_id}">
        <div class="c-head">
            <div class="imgholder"><img src="/assets/images/{$post['u_profile']}" class="img"></div>
            <div class="info">
                <div class="name">{$post['u_name']}</div>
                <div class="date">{$post['date']}</div>
            </div>
            <!-- <img src="icons/3dot.png" class="dots"> -->

            <div class="menu" id="menu{$post_id}">
                <img src="/assets/icons/delete-icon.png" class="menu__icon" onclick="removeItem({$post_id})" title="Delete">
                <img src="/assets/icons/edit-icon.png" class="menu__icon" title="Edit">

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="body">
            <div class="rate-update">
                <div class="title">
                    <div class="rate-of"> {$post['item_name']} </div>
                    <div class="city">{$post['city_name']}</div>
                </div>
                <div class="clearfix"></div>

            </div>
            <div class="contract">
                <div class="company">
                    <div class="bar"></div>
                    <div class="company-name">{$post['firm1']} </div>
                    <div class="company-name">{$post['firm2']} </div>
                </div>
                <div class="clearfix"></div>

                <div class="rate">Rate : <span>{$post['price']}<span> /{$post['unit']}</span> </span></div>
                <div class="qty">Qty : <span>{$post['qty']} <span> {$post['unit']}</span> </span></div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div><!-- c-card ends here -->

    {elseif $posttype == 'rateupdate' }


    <div class="c-card" id="{$post_id}">
        <div class="c-head">
            <div class="imgholder"><img src="/assets/images/{$post['u_profile']}" class="img"></div>
            <div class="info">
                <div class="name">{$post['u_name']}</div>
                <div class="date">{$post['date']}</div>
            </div>
            <!-- <img src="icons/3dot.png" class="dots"> -->

            <div class="menu">
                <img src="/assets/icons/delete-icon.png" class="menu__icon" onclick="removeItem({$post_id})" title="Delete">
                <img src="/assets/icons/edit-icon.png" class="menu__icon" title="Edit">

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="body">
            <div class="rate-update">
                <div class="title">
                    <div class="rate-of"> {$post['item_name']} </div>
                    <div class="city">{$post['city_name']}</div>
                </div>

                <div class="info">
                    <div class="up-rate"> <span><i class="fa fa-chevron-up" aria-hidden="true"></i></span> {$post['uprate']}</div>
                    <div class="down-rate"> <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span> {$post['downrate']} </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>

        <div class="clearfix"></div>
    </div><!-- c-card ends here -->
    {/if}
    {/foreach}


    <div class="scrollspace" id="scrollspace"></div>



</div>
<?php //include 'dock.php'; 
?>