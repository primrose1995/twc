/**
 * Created by Ma on 2016/7/5.
 */

window.onload=callAjax();

function ShowMemberAreaPage(){
    location = "../MainPageController.php?action=ShowMemberAreaPage";
}
function callAjax(){
    var URLs="../Model/connectProfile.php";

     return $.ajax({
        url: URLs,
        data: null,
        type:"POST",
        dataType:"JSON",//回傳資料用json檔

        success: function(data){
            //alert("AJAX SUCCESS!");
            $("#account").attr("placeholder",data["account"]);
            $("#password").attr("placeholder",data["password"]);
            $("#nickname").attr("placeholder",data["name"]);
            $("#school").attr("placeholder",data["school"]);
            $("#department").attr("placeholder",data["department"]);
            $("#email1").attr("placeholder",data["email1"]);
            $("#email2").attr("placeholder",data["email2"]);
            },

        error:function(xhr, ajaxOptions, thrownError){
            alert(xhr.status);
            alert(thrownError);
        }
    });
}

