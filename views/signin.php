<div class="sscreen">
    <div class="sscreen__header">
        <div class="sscreen__header__left">
            <!-- <img src="icons/install-icon.png" class="icon"> -->
            <div class="txt">Don't Have An Account ?</div>
        </div>
        <div class="sscreen__header__right">
            <div class="btn" onclick="loadpage('/signup')"> SignUp </div>
        </div>
    </div>
    <div class="sscreen__body">
        <div class="clearfix"></div>
        <div class="imgholder">
            <img src="assets/icons/avatar-icon.png" class="img">
        </div>

        <form action="" id="signinform" method="post">
            <div class="box">
                <input type="text" placeholder="Phone No" id="cell" name="cell" class="txt" pattern="[0-9]{11}" required>
                <input type="text" placeholder="Password" id="password" name="password" class="txt" required>
            </div>
            <div id="msg"></div>
            <div id="errmsg"></div>
            <div class="btnholder">

                <img src="assets/icons/login-icon.png" onclick="authorizeuser()" class="startbtn">
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