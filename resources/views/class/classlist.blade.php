@include('public/header');
<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">OA教务管理中心<b>></b><strong>班级列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="{{url('/addclassview')}}" class="actionBtn add">添加班级</a>班级列表</h3>
        <div class="filter">
    <span>
        </span>
        </div>
        <div id="list">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <th width="240" align="center">编号</th>
                        <th align="left">宿舍号</th>
                        <th width="240" align="center">教师</th>
                        <th width="240" align="center">操作</th>
                    </tr>
                    @foreach($data as $v)
                    <tr>
                        <td align="center">{{$v->cid}}</td>
                        <td><a href="">{{$v->roomnum}}</a></td>
                        <td align="center"><a href="">{{$v->tname}}</a></td>
                        <td align="center">
                            <a href="{{action('ClassController@updclassview',[$v->cid])}}">编辑</a> | <a href="{{action('ClassController@delclass',[$v->cid])}}">删除</a>
                        </td>
                    </tr>
                        @endforeach
                </table>
                <div class="action">
                </div>
        </div>
        <div class="clear"></div>

<div class="clear"></div>
{{--<div id="dcFooter">--}}
    {{--<div id="footer">--}}

{{--</div><!-- dcFooter 结束 -->--}}
<div class="clear"></div> </div>
<script type="text/javascript">

    onload = function()
    {
        document.forms['action'].reset();
    }

    function douAction()
    {
        var frm = document.forms['action'];

        frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
    }

</script>
</body>
</html>