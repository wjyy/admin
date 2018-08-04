@include('public/header');
<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">OA教务管理中心<b>></b><strong>教师列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="{{url('/addteaview')}}" class="actionBtn add">添加教师</a>教师列表</h3>
        <div class="filter">
    <span>
        </span>
        </div>
        <div id="list">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="240" align="center">编号</th>
                    <th align="left">教师</th>
                    <th width="240" align="center">操作</th>
                </tr>
                @foreach($data as $v)
                    <tr>
                        <td align="center">{{$v->tid}}</td>
                        <td><a href="">{{$v->tname}}</a></td>
                        <td align="center">
                            <a href="{{action('TeachersController@updteaview',[$v->tid])}}">编辑</a> | <a href="{{action('TeachersController@deltea',[$v->tid])}}">删除</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="action">
            </div>
        </div>
        <div class="clear"></div>

        <div class="clear"></div>
        <div id="dcFooter">
            <div id="footer">

            </div><!-- dcFooter 结束 -->
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