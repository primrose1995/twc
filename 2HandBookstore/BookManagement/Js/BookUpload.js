/**
 * Created by AllenHsu on 2016/7/10.
 */
var bookISBN,bookSearch,upload;
var count=0;

window.onload = function () {
    bookISBN=document.getElementById("bookISBN");
    bookSearch=document.getElementById("bookSearch");
    upload=document.getElementById("upload");

    bookSearch.addEventListener("click",getBookArray);
    upload.addEventListener("click",uploadBook);
};

function uploadBook() {
    
    var URLs = "../Model/connectUploadDB.php";//this one

    bookCover=document.getElementById("bookCover");
    name=document.getElementById("name");
    bookClass=document.getElementById("bookClass");
    ISBN=document.getElementById("ISBN");
    author=document.getElementById("author");
    price=document.getElementById("price");

    if(count!=0) {
        $.ajax({
            url: URLs,
            data: {
                bookCover: $('#bookCover').html(),
                name: $('#name').html(),
                bookClass: $('#bookClass').val(),
                ISBN: $('#ISBN').html(),
                author: $('#author').html(),
                price: $('#price').html()
            },
            type: "post",
            dataType: "json",//回傳資料用json檔
            success: function (data) {
                    alert("ho");
            },
            error: function (err) {
                    alert(err.responseText);
            }
        });

        count=0;
    }
    else
    {
    alert("尚未選擇or已經上傳過了!")
    }
}

function getBookArray() {
    var URLs = "../Model/connectSearchBookDB.php";//this one

        return $.ajax({
            url: URLs,
            data: null,
            type: "post",
            dataType: "json",//回傳資料用json檔
            success: function (data) {
                if(count!=0) {
                    $('table tr:last').remove();
                    count=0;
                }
                //var row = data.length;//增加的列數
                    for (var i = 0; i < data.length; i++) {
                        if (bookISBN.value==parseInt(data[i]['ISBN'])) {
                            // alert(data[i]['name']);
                            $("#table").append(
                                $("<tr>").append(
                                    $("<td>").html(" ").attr({'id':"bookCover"}),
                                    $("<td>").html(data[i]['name']).attr({'id':"name"}),
                                    $("<td>").html($("<select>").append($("<option> </option>"),
                                        $("<option>管理學院</option>"),
                                        $("<option>資訊電機學院</option>"),
                                        $("<option>文學院</option>"),
                                        $("<option>工學院</option>"),
                                        $("<option>地球科學學院</option>")
                                    ).attr({'id':"bookClass"})),
                                    $("<td>").html(data[i]['ISBN']).attr({'id':"ISBN"}),
                                    $("<td>").html(data[i]['author']).attr({'id':"author"}),
                                    $("<td>").html(data[i]['price']).attr({'id':"price"})
                                )
                            )
                            count++;
                        }
                    }
            },
            error: function (err) {
                alert(err.responseText);
            }
        });



}