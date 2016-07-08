/**
 * Created by HanLing Shen on 2016/7/7.
 */
//可以用迴圈顯示
function getArraySize() {
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