$(document).ready(function(){
	$('.remove').click(function(){
        var container = $(this).parent().parent();
        var cid = $(this).attr('id');
        $.ajax({
                    url : "http://localhost/php_news/index.php", // gửi ajax đến file result.php
                    type : "get", // chọn phương thức gửi là get
                    dateType:"text", // dữ liệu trả về dạng text
                    data : { // Danh sách các thuộc tính sẽ gửi đi
                         controller: 'category',
                         action: 'deleteCat',
                         id : cid

                    },
                    success : function (){
                        // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                        // đó vào thẻ div có id = result
                        container.slideUp('slow', function() {container.remove();});
                    }
                });
        return false;
    });


    $('.delete').click(function(){
        var container = $(this).parent().parent();
        var cid = $(this).attr('id');
        $.ajax({
                    url : "http://localhost/repro_news/index.php", // gửi ajax đến file result.php
                    type : "get", // chọn phương thức gửi là get
                    dateType:"text", // dữ liệu trả về dạng text
                    data : { // Danh sách các thuộc tính sẽ gửi đi
                         controller: 'news',
                         action: 'delete',
                         id : cid

                    },
                    success : function (){
                        // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
                        // đó vào thẻ div có id = result
                        container.slideUp('slow', function() {container.remove();});
                    }
                });
        return false;
    });
});
