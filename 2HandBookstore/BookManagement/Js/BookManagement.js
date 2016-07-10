/**
 * Created by HanLing Shen on 2016/7/7.
 */
//可以用迴圈顯示
function getBookArray() {
    var URLs = "../Model/connectBookDB.php";//this one

    return $.ajax({
        url: URLs,
        data: null,
        type: "post",
        dataType: "json",//回傳資料用json檔
        success: function (data) {
            //var row = data.length;//增加的列數
            // document.getElementById("table").insertRow(row);
            //alert(data.length);
            for (var i = 0; i < data.length; i++) {
                // alert(data[i]['name']);

                $("#table").append(
                    $("<tr>").append(
                        $("<td>").html(" "),
                        $("<td>").html(data[i]['name']),
                        $("<td>").html(data[i]['ISBN']),
                        $("<td>").html(data[i]['author']),
                        $("<td>").html(data[i]['price']),
                        $("<td>").html($("<input>").attr({'value':"查看詳情","type":"button","onclick":"GotoThatPage("+data[i]['id_book']+")","id":data[i]['id_book']}))
                        // $("#bookName").attr("value", data[i]['name']);
                        //$("#ISBN").attr("value", data[i]['ISBN']);
                        //$("#author").attr("value", data[i]['author']);
                        // $("#price").attr("value", data[i]['price']);
                    )
                )

            }
            
        },
        error: function (err) {
            alert(err.responseText);
        }
    });
}

function ShowSignUpPage() {
    location = "../../MainPage/MainPageController.php?action=ShowSignUpPage";
}

function GotoThatPage(page) {

    location.href = "../View/bookInfo.html?value="+page;

}
