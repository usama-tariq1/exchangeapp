var fullScreen = false;
var dock = false;
var preloader =
    "<img src='/assets/icons/loader3.gif' style='height:50px; display:block; margin:0 auto;'  >";

$(document).ready(function () {
    $.ajaxSetup({
        cache: false
    });

    // var elem = document.body;
    // requestFullScreen(elem);

    appstart();
    // loadpage("/start");
    // loaddock();

    $(window).on('popstate', function () {
        loadpage(window.location.pathname);
    });

    // $(window).bind('beforeunload', function (event) {
    //     // alert("reload");
    //     window.history.pushState("object or string", "Home", "/");
    //     window.location = window.location.href;
    //     // return false;
    // });


});



function searchthis(st) {
    var value = st.toLowerCase();
    $("#myTable #tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });

    var data = '';

    $.ajax({
        data: data,
        type: "post",
        url: "search/user?u_name=" + value + "",
        contentType: false,
        processData: false,

        success: function (data) {
            $('#searchedas').html(data);
            // console.log(data);
        }
    });

}


// $(document).ready(function () {
//     $("#myInput").on("keyup", function () {
//         var value = $(this).val().toLowerCase();
//         $("#myTable #tr").filter(function () {
//             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//         });
//     });
// });


// PullToRefresh.init({
//     mainElement: '#contentbox',
//     onRefresh: function () {
//         alert('refresh')
//     }
// });

function loadfeed() {
    var gifloader = preloader;
    var content = "/posts";

    $("#contentbox")
        .html(gifloader)
        .load(content);

    setTimeout(() => {
        loaddock();
    }, 1000);

    // window.location.replace(content);
    window.history.pushState("object or string", "Home", content);

    // counter();
}

function loadprofile() {
    // var gifloader = preloader;
    var content = "/profile";

    $("#contentbox")
        .html(preloader)
        .load(content);

    window.history.pushState("object or string", "Home", content);




    // counter();
}


function loadwelcome() {
    var gifloader =
        "<img src='./icons/loader3.gif' style='height:50px; display:block; margin:0 auto;'  >";
    var content = "welcome.php";

    $("#contentbox")
        .html(gifloader)
        .load(content);
}

function loadpage(page) {
    var gifloader = preloader;
    var content = page;

    $("#contentbox")
        .html(gifloader)
        .load(content);

    window.history.pushState("object or string", "Home", content);

}

function counter() {
    // x = 1;
    // y = 0;
    // setInterval(() => {
    //     x = x + 1;
    //     if (x == 60) {
    //         y = y + 1;
    //         x = 0;
    //     }
    //     $('#counter').html(y + " : " + x);
    // }, 1000);
}

function requestFullScreen(element) {
    if (fullScreen == false) {
        fullScreen = true;
        // Supports most browsers and their versions.
        var requestMethod =
            element.requestFullScreen ||
            element.webkitRequestFullScreen ||
            element.mozRequestFullScreen ||
            element.msRequestFullScreen;

        if (requestMethod) {
            // Native full screen.
            requestMethod.call(element);
        } else if (typeof window.ActiveXObject !== "undefined") {
            // Older IE.
            var wscript = new ActiveXObject("WScript.Shell");
            if (wscript !== null) {
                wscript.SendKeys("{F11}");
            }
        }
    }
}

function adduser() {

    var err = validatesignup('#signupform');
    if (err === 0) {

        // $("#btn").style.display = "none";
        $("#btnholder").html(preloader);
        var data = new FormData($("#signupform")[0]);
        $.ajax({
            data: data,
            type: "post",
            url: "/user/create",
            contentType: false,
            processData: false,

            success: function (data) {
                if (data > 0) {
                    loadpage("/login");
                    setTimeout(() => {
                        $("#msg").html("Registered Successfully Signin Now");
                    }, 1000);
                }
                console.log(data);
            }
        });
    }
}

function updateuser() {

    var err = validatesignup('#updateform');
    if (err === 0) {

        // $("#btn").style.display = "none";
        $("#btnholder").html(preloader);
        var data = new FormData($("#updateform")[0]);
        $.ajax({
            data: data,
            type: "post",
            url: "/user/update",
            contentType: false,
            processData: false,

            success: function (data) {
                var jsond = JSON.parse(data);
                var r = jsond['r'];
                console.log(r);
                // console.log(data);
                if (r > 0) {

                    setTimeout(() => {
                        $("#msg").html("Saved !");
                        $("#btnholder").html(" <img onclick='updateuser()' src='assets/icons/save-icon.png' id='btn' class='startbtn'> ");
                    }, 1000);
                } else {
                    setTimeout(() => {
                        $("#msg").html("<div id='errmsg'>Unable to Update!</div>");
                        $("#btnholder").html(" <img onclick='updateuser()' src='assets/icons/save-icon.png' id='btn' class='startbtn'> ");
                    }, 1000);
                }
                // console.log(data);
            }
        });
    }
}

function addel() {
    var data = "";
    $.ajax({
        data: data,
        type: "post",
        url: "snip.php",

        success: function (data) {
            $("#nullvoid").after(data);
        }
    });
}

function loaddock() {
    if (dock == false) {
        var data = "";
        $.ajax({
            data: data,
            type: "post",
            url: "/module/dock",

            success: function (data) {
                $("#contentbox").after(data);
            }
        });
        dock = true;
    }
}

function uploadprofile() {


    var fd = new FormData($("#uploadprofile")[0]);
    // var files = $('#profile_img')[0].files[0];
    // fd.append('profile_img', files);


    // console.log(formData);
    // var data = $('#profile-img').val();
    $.ajax({
        data: fd,
        type: "post",
        url: "/user/uploadimg",
        contentType: false,
        processData: false,

        success: function (data) {
            // console.log(data);
            if (data !== 0) {
                $('#imgholder').html("<img src='/assets/images/" + data + "' class='img'  >");
                $('#profile').attr('value', data);
                console.log($('#profile').val());
            } else {
                console.log("not Uploded");
            }
        }
    });
    // console.log(data);

}

// $('#uploadprofile').submit(function ($) {
//     $.fn.serializeFiles = function () {
//         var form = $(this),
//             formData = new FormData()
//         formParams = form.serializeArray();

//         $.each(form.find('input[type="file"]'), function (i, tag) {
//             $.each($(tag)[0].files, function (i, file) {
//                 formData.append(tag.name, file);
//             });
//         });

//         $.each(formParams, function (i, val) {
//             formData.append(val.name, val.value);
//         });

//         // return formData;
//         console.log(formData);
//     };
// })(jQuery);



// $(document).on('change', '#profile_img', function () {
//     // var fd = new FormData($("#uploadprofile")[0]);
//     // var files = $('#profile_img')[0].files[0];
//     // fd.append('profile_img', files);


//     // console.log(formData);
//     // var data = $('#profile-img').val();
//     $.ajax({
//         data: new FormData($("#uploadprofile")[0]),
//         type: "post",
//         url: "/user/uploadimg",
//         contentType: false,
//         processData: false,

//         success: function (data) {
//             console.log(data);
//         }
//     });
// });


function validatesignup(id) {

    var validator = $(id).validate();
    var name = $(id).find('#name').val();
    var cell = $(id).find('#cell').val();
    var cityid = $(id).find('#cityid').val();
    var password = $(id).find('#password').val();

    var err = 0;

    if (name.length == 0) {
        err = err + 1;
        validator.element("#name");
    }
    if (cell.length != 11) {
        err = err + 1;
        validator.element("#cell");

    }
    if (cityid === 0) {
        err = err + 1;
        validator.element("#cityid");

    }
    if (password.length === 0) {
        err = err + 1;
        validator.element("#password");


    }


    return err;


}


function validatesignin(id) {

    var validator = $(id).validate();
    var cell = $(id).find('#cell').val();

    var password = $(id).find('#password').val();

    var err = 0;

    if (cell.length === 0) {
        err = err + 1;
        validator.element("#cell");
    }
    if (password.length === 0) {
        err = err + 1;
        validator.element("#password");


    }


    return err;


}

function authorizeuser() {
    var err = validatesignin('#signinform');
    if (err === 0) {

        // $("#btn").style.display = "none";
        // $("#btnholder").html(preloader);
        var data = $("#signinform").serialize();
        $.ajax({
            data: data,
            type: "post",
            url: "/user/authorize",

            success: function (data) {
                var r = data;

                // console.log(userdata);
                if (r == 1) {
                    appstart();
                } else {
                    setTimeout(() => {
                        $("#errmsg").html("Incorrect Cell No or Password");
                    }, 1000);
                }


            }
        });
    }
}

function appstart() {
    var url = '/start';
    $('#contentbox').html(preloader).load(url);
    // window.location.replace(url);
    window.history.pushState("object or string", "Welcome", url);

}


function addcity() {
    var cityname = $('#cityname').val();
    if (cityname.length > 0) {
        $('#msg').html('');
        var data = $("#addcityform").serialize();
        $.ajax({
            data: data,
            type: "post",
            url: "/city/create",

            success: function (data) {
                var r = data;

                // console.log(data);

                if (r > 0) {
                    $('#box').after("<div id='msg' sytle='color:green;' > City Added </div>");
                    $('#addcityform')[0].reset();
                } else {
                    $('#box').after("<div id='msg' style='color:red;' > Already Exist </div>");
                    $('#addcityform')[0].reset();

                }


            }
        });
    } else {
        $('#cityname').after("<div id='errmsg'> CityName Can not be empty !</div>");
    }
}


function addfirm() {
    var firmname = $('#firmname').val();
    if (firmname.length > 0) {
        $('#msg').html('');
        var data = $("#addfirmform").serialize();
        $.ajax({
            data: data,
            type: "post",
            url: "/firm/create",

            success: function (data) {
                var r = data;

                // console.log(data);

                if (r > 0) {
                    $('#box').after("<div id='msg' sytle='color:green;' > Firm Added </div>");
                    $('#addfirmform')[0].reset();
                } else {
                    $('#box').after("<div id='msg' style='color:red;' > Already Exist </div>");
                    $('#addfirmform')[0].reset();

                }


            }
        });
    } else {
        $('#firmname').after("<div id='errmsg'> Firm Name Can not be empty !</div>");
    }
}

function additem() {
    var itemname = $('#itemname').val();
    var typeid = $('#typeid').children("option:selected").val();
    var err = 0;
    if (itemname.length === 0) {
        err = err + 1;
        $('#itemname').after("<div id='errmsg'> Item Name can't be empty! </div>");
    }
    if (typeid === 0) {
        err = err + 1;
        $('#typeid').after("<div id='errmsg'>  Please Select A Type </div>");
    }
    if (err === 0) {
        $('#msg').html('');
        $('#errmsg').html('');
        var data = $("#additemform").serialize();
        $.ajax({
            data: data,
            type: "post",
            url: "/item/create",

            success: function (data) {
                var r = data;

                // console.log(data);

                if (r > 0) {
                    $('#box').after("<div id='msg' sytle='color:green;' > Item Added !</div>");
                    $('#additemform')[0].reset();
                } else {
                    $('#box').after("<div id='msg' style='color:red;' > Already Exist! </div>");
                    $('#additemform')[0].reset();

                }


            }
        });
    } else {
        $('#firmname').after("<div id='errmsg'> Firm Name Can not be empty !</div>");
    }
}



// validate contract form fields
function validatecontractform(id) {

    var validator = $(id).validate();
    var price = $(id).find('#price').val();
    var qty = $(id).find('#qty').val();

    var err = 0;

    if (price.length === 0) {
        err = err + 1;
        validator.element("#price");
    }
    if (qty.length === 0) {
        err = err + 1;
        validator.element("#qty");

    }



    return err;


}

function addcontract() {

    var err = validatecontractform('#addcontractform');
    if (err === 0) {

        // $("#btn").style.display = "none";

        $("#btnholder").html(preloader);
        var data = new FormData($("#addcontractform")[0]);
        $.ajax({
            data: data,
            type: "post",
            url: "/contract/create",
            contentType: false,
            processData: false,

            success: function (data) {
                if (data > 0) {

                    setTimeout(() => {
                        $("#box").after("<div id='msg'> Contract Added </div>");
                        $('#addcontractform')[0].reset();
                        $('#btnholder').html("<div class='btn' id='btn' onclick='addcontract()'>Save</div>");
                    }, 1000);
                }
                // console.log(data);
            }
        });
    }
}



function updatecontract() {

    var err = validatecontractform('#addcontractform');
    if (err === 0) {

        // $("#btn").style.display = "none";

        $("#btnholder").html(preloader);
        var data = new FormData($("#addcontractform")[0]);
        $.ajax({
            data: data,
            type: "post",
            url: "/contract/update",
            contentType: false,
            processData: false,

            success: function (data) {
                if (data > 0) {

                    setTimeout(() => {
                        $("#box").after("<div id='msg'> Contract Updated </div>");
                        // $('#addcontractform')[0].reset();
                        $('#btnholder').html("<div class='btn' id='btn' onclick='updatecontract()'>Save</div>");
                    }, 1000);
                } else {
                    console.log(data)
                }
                // console.log(data);
            }
        });
    }
}




function addrateupdate() {

    // $("#btn").style.display = "none";

    $("#btnholder").html(preloader);
    var data = new FormData($("#addrateupdateform")[0]);
    $.ajax({
        data: data,
        type: "post",
        url: "/rateupdate/create",
        contentType: false,
        processData: false,

        success: function (data) {
            if (data > 0) {

                setTimeout(() => {
                    $("#box").after("<div id='msg'> Rate update Saved ! </div>");
                    $('#addrateupdateform')[0].reset();
                    $('#btnholder').html("<div class='btn' id='btn' onclick='addrateupdate()'>Save</div>");
                }, 1000);
            } else {
                $("#box").after("<div id='errmsg'> Unable to Add! </div>");
                $('#addrateupdateform')[0].reset();
                $('#btnholder').html("<div class='btn' id='btn' onclick='addrateupdate()'>Save</div>");
            }
            // console.log(data);
        }
    });

}

function editrateupdate() {

    // $("#btn").style.display = "none";

    $("#btnholder").html(preloader);
    var data = new FormData($("#addrateupdateform")[0]);
    $.ajax({
        data: data,
        type: "post",
        url: "/rateupdate/update",
        contentType: false,
        processData: false,

        success: function (data) {
            if (data > 0) {

                setTimeout(() => {
                    $("#box").after("<div id='msg'> Rate updated ! </div>");
                    // $('#addrateupdateform')[0].reset();
                    $('#btnholder').html("<div class='btn' id='btn' onclick='editrateupdate()'>Save</div>");
                }, 1000);
            } else {
                $("#box").after("<div id='errmsg'> Unable to update! </div>");
                // $('#addrateupdateform')[0].reset();
                $('#btnholder').html("<div class='btn' id='btn' onclick='editrateupdate()'>Save</div>");
            }
            // console.log(data);
        }
    });

}



function removeItem(id) {
    console.log(id);
    $("#menu" + id).html(preloader);

    var data = '';
    $.ajax({
        data: data,
        type: "post",
        url: "/posts/delete?id=" + id + "",

        success: function (data) {
            var r = data;

            // // console.log(data);

            if (r === "200") {
                $("#" + id).fadeOut("slow", function () {
                    $("#" + id).remove();
                });

                $('#nullvoid').after("<div id='msg'> Deleted </div>");
                setTimeout(() => {
                    $('#msg').remove();
                }, 1000);
            } else {
                $('#nullvoid').after("<div id='errmsg'> " + r + " </div>");
                setTimeout(() => {
                    $('#errmsg').remove();
                }, 1000);

            }
            console.log(data);



        }
    });


}


function postupdatepage(id, type) {
    console.log(id);
    console.log(type);

    $("#menu" + id).html(preloader);

    var url = "/" + type + "/update?id=" + id + "";
    loadpage(url);




}



function ratesof(type) {
    var url;
    if (type == 0) {
        url = "/ratesheet";

    }
    if (type == 1) {
        url = "/ratesheet/currency";
    }
    if (type == 2) {
        url = "/ratesheet/commodity";
    }
    $('#contentbox').html(preloader).load(url);
    window.history.pushState("object or string", "Ratesheet", url);
    // console.log(url);
    // console.log(type);
}