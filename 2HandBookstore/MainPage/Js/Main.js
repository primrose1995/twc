/**
 * Created by HanLing Shen on 2016/7/4.
 */
window.onload = getSession();
function getSession() {
    var URLs = "../Control/showSession.php";

    return $.ajax({
        url: URLs,
        data: null,
        type: "POST",
        dataType: "JSON",//回傳資料用json檔
        success: function (data) {
            //alert("AJAX SUCCESS!");
            if (data["session"]!=null) {
                $("#loginButton").text("登出");
                $("#name").text("哈囉! "+data["session"]+" 您好!");
                $("#loginButton").attr("href","../MainPageController.php?action=connectLogout");
            }
        },
        error: function () {
            $("#loginButton").text("登入");
            $("#loginButton").attr("href","../MainPageController.php?action=ShowLoginPage");
        }
    });
}

function ShowSignUpPage() {
    alert("請將您的帳號欄填入學號");
    location = "../MainPageController.php?action=ShowSignUpPage";
}
function ShowLoginPage() {
    location = "../MainPageController.php?action=ShowLoginPage";
}
function ShowMemberAreaPage() {
    location = "../MainPageController.php?action=ShowMemberAreaPage";
}
function ShowChatroomPage() {
    location = "../MainPageController.php?action=ShowChatroomPage";
}
function ShowUploadBookPage() {
    location = "../MainPageController.php?action=ShowUploadBookPage";
}
function connectLogout() {
    location = "../MainPageController.php?action=connectLogout";
}
//這邊開始是各學院管理區
