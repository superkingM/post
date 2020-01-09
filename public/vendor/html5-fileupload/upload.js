//文件上传
var opts = {
    url: "/photos",
    type: "POST",
    success: function (result) {
        if (result.status == 1) {
            alert(result.info);
            $("input[name='image']").val(result.image_url);
            $("#img_show").attr("src", result.image_url);
        }
    },
    error: function () {
        alert('文件上传失败');
    }
};

$('#image_upload').fileUpload(opts);