/**
 * Created by HanLing Shen on 2016/7/10.
 */
/**
 * Created by HanLing Shen on 2016/7/7.
 */
//可以用迴圈顯示
window.onload = getBookInfo();
function getBookInfo() {
    var URLs = "../Model/connectBookInfo.php";//this one
    return $.ajax({
        url: URLs,
        data: {id_book:showID()},
        type: "post",
        dataType: "json",//回傳資料用json檔
        success: function (data) {


            $("#bookName").text("書名 : "+data["name"]);
            $("#bookISBN").text("ISBN : "+data["ISBN"]);
            $("#bookAuthor").text("作者 : "+data["author"]);
            $("#bookHome").text("出版社 : "+data["publishingHouse"]);
            $("#bookPostDate").text("出版日期 : "+data["postdate"]);
            $("#bookPrice").text("價格 : "+data["price"]);

        },
        error: function (err) {
            alert(err.responseText);
        }
    });
}
function showID() {

    //URL
    var url = location.href;

    //取得問號之後的值
    var temp = url.split("?");

    //將值再度分開
    var vars = temp[1].split("=");
        // vars[1]就是id_book
    //一一顯示出來
   return vars[1];

}

function deal() {
    
}


