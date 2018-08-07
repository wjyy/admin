@include("public/header")
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="dcMain">
    <div id="urHere">OA教务管理中心<b>></b><strong>添加电费</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="{{action('EletricController@eletric')}}" class="actionBtn">电费列表</a>添加电费</h3>
        {{--<form action="/addele" method="post">--}}
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        <input type="hidden" id="abc" value="<?php echo count($data);?>">
            <table id="inpu" width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                @foreach($data as $v)
                <tr>
                    <td width="20" align="right">编号</td>
                    <td width="20">
                        <input type="text" disabled="disabled" value="{{$v->d_id}}" size="20" class="inpMain" />
                    </td>
                    <td width="20" align="right">宿舍号</td>
                    <td width="20">
                        <input type="text" disabled="disabled" name="drom" value="{{$v->dorm}}" size="20" class="inpMain" />
                    </td>
                    <td width="20" align="right">月份</td>
                    <td width="20">
                        <input type="text" name="month" value="" size="20" class="inpMain" />
                    </td>
                    <td width="20" align="right">应缴纳费用</td>
                    <td width="20">
                        <input type="text" name="pay" value="" size="20" class="inpMain" />
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td>
                        <input id="butt" class="btn" type="button" value="提交" />
                    </td>
                </tr>
            </table>

    </div>
</div>
<div class="clear"></div>
<div id="dcFooter">
    <div id="footer">
        <div class="line"></div>
        <ul>
            版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
        </ul>
    </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#butt").click(function(){
            var len = $("#abc").val();
            var info = [];
            for(var j = 0; j < len; j++){
                var numArr = []; // 定义一个空数组
                var txt = $('#inpu').find(':text');// 获取所有文本框
                for (var i = 0; i < txt.length; i++) {
                    numArr.push(txt.eq(i).val()); // 将文本框的值添加到数组中
                }
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url:'addele',
                data: {"info": numArr},
                type:'post',
                success:function(obj){
                    if(obj=1){
                        alert("添加成功");
                        window.location.href='/eletric';
                    }else{
                        alert("添加失败");
                    }

                }
            });
        });
    });
</script>
</body>
</html>