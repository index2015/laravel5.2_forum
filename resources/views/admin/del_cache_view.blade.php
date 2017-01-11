@include('admin.public.head')
<div class="tooltip-demo">
    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="清除数据缓存" id="cache"> 清除数据缓存
        <br><span id="show_cache"></span> MB </button>
    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="清除页面缓存" id="viewCache">
        清除页面缓存
        <br><span id="view_cache"></span> MB
    </button>

</div>
@include('admin.public.tail')
<script>
    $('#cache').click(function(){
        $.ajax({
            type:"POST",
            url:"{{url('system/delCache?_token=')}}{{csrf_token()}}",
            dataType:'json',
            success:function(msg){
                if(msg.state==1){
                    layer.msg("清除缓存成功");
                }else{
                    layer.msg("未存在有缓存");
                }
            }
        });

    });
    $('#viewCache').click(function(){
        $.ajax({
            type:"POST",
            url:"{{url('system/ViewCache?_token=')}}{{csrf_token()}}",
            dataType:'json',
            success:function(msg){
                if(msg.state==1){
                    layer.msg("清除缓存成功");
                }else{
                    layer.msg("未存在有缓存");
                }
            }
        });
    });
    $.ajax({
        type:"POST",
        url:"{{url('system/cacheBM?_token=')}}{{csrf_token()}}",
        dataType:'json',
        data:{view_cache:'data_cache'},
        success:function(msg){
                $('#show_cache').html(msg.data);
        }
    });
    $.ajax({
        type:"POST",
        url:"{{url('system/cacheBM?_token=')}}{{csrf_token()}}",
        data:{view_cache:'view_cache'},
        dataType:'json',
        success:function(msg){
                $('#view_cache').html(msg.data);
        }
    });
</script>