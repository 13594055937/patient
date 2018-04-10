 function submit_form(url){
        $.ajax({
            type:"POST",
            // url:"{:url('loginvalidate')}",
            url:url,
            data:$("form").serialize(),//将表单序列化
            dataType:'json',
            success:function(data){
                if(data.status==1){
                    layer.msg(data.result);
                    window.location.href="{:url('index/index')}";
				}
                layer.alert(data.result);
            }
        })
    }