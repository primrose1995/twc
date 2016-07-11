/**
 * Created by HanLing Shen on 2016/7/4.
 */
window.onload = getSession();
function getSession() {
    var URLs = "../../showSession.php";

    return $.ajax({
        url: URLs,
        data: null,
        type: "POST",
        dataType: "JSON",//回傳資料用json檔
        success: function (data) {
            //alert("AJAX SUCCESS!");
            if (data["session"]!=null) {
                $("#name").text("哈囉! "+data["session"]+" 您好!");

                $("#loginButton").text("登出");
                $("#loginButton").attr("href","../../MainPage/MainPageController.php?action=connectLogout");

                $("#signUpButton").text("會員中心");
                $("#signUpButton").attr("href","../../MainPage/MainPageController.php?action=ShowMemberAreaPage");

            }
        },
        error: function () {
            $("#loginButton").text("登入");
            $("#loginButton").attr("href","../../MainPage/MainPageController.php?action=ShowLoginPage");
        }
    });
}
function showIndex(){
    location.assign("../../MainPage/MainPageController.php?action=ShowMainPage");
}
