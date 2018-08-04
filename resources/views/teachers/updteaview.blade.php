@include("public/header")
<div id="dcMain">
    <div id="urHere">OA教务管理中心<b>></b><strong>修改教师</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="{{action('TeachersController@teachers')}}" class="actionBtn">教师列表</a>修改教师</h3>
        <form action="/updtea" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <input type="hidden" name="tid" value="{{$data->tid}}">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="90" align="right">教师序号</td>
                    <td>
                        <input type="text" name="tid" value="{{$data->tid}}" size="80" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td align="right">教师姓名</td>
                    <td>
                        <input type="text" name="tname" value="{{$data->tname}}" size="80" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>

                        <input class="btn" type="submit" value="提交" />
                    </td>
                </tr>
            </table>
        </form>
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

</body>
</html>