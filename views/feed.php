{var $posts=$data['posts']}
<div class="feeds" id="feeds">
    <div class="topbar">
        <div class="left"> <img src="/assets/icons/reload-icon.png" class="icon"> </div>
        <div class="right">
            <input type="text" placeholder="Search" name="search" class="searchbar">
            <img src="/assets/icons/search-icon-gray.png" for="search" class="searchicon">
        </div>
    </div>




    <div class="nullvoid" id="nullvoid"></div>





    <div class="ratecard">
        <div class="left">
            <div class="itemname">Cotton</div>
            <div class="date">25 feb 2020</div>
            <div class="province">Punjab</div>
        </div>
        <div class="right">
            <div class="currency">Rupees</div>
            <div class="universalrate"> <span><img src="/assets/icons/uperrow-icon.png" class="icon"></span> 3000</div>
            <div class="local"> <span><img src="/assets/icons/uperrow-icon.png" class="icon"></span> 3500</div>
        </div>
    </div>

    {foreach $posts as $post}
        {var $posttype = $post['post_type']}
        {if $posttype == 'contract' }
        <div class="c-card">
            <div class="c-head">
                <div class="imgholder"><img src="/assets/images/{$post['u_profile']}" class="img"></div>
                <div class="info">
                    <div class="name">{$post['u_name']}</div>
                    <div class="date">{$post['date']}</div>
                </div>
                <!-- <img src="icons/3dot.png" class="dots"> -->
                <div class="menu">
                    <img src="/assets/icons/delete-icon.png" class="menu__icon" title="Delete">
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
        <div class="c-card">
            <div class="c-head">
                <div class="imgholder"><img src="/assets/images/{$post['u_profile']}" class="img"></div>
                <div class="info">
                    <div class="name">{$post['u_name']}</div>
                    <div class="date">{$post['date']}</div>
                </div>
                <!-- <img src="icons/3dot.png" class="dots"> -->
                <div class="menu">
                    <img src="/assets/icons/delete-icon.png" class="menu__icon" title="Delete">
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