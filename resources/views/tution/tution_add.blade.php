@include("public/header")
<div id="dcMain">
    <div id="urHere">OA教务管理中心<b>></b><strong>学员学费添加</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="{{action('TuitionController@tuition_list')}}" class="actionBtn">学费列表</a>添加学员学费</h3>
        <form action=" " method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="90" align="right">学员姓名</td>
                    <td>
                        <select name="name" id="">
                        
                            @foreach($data as $v)
                                <option value="{{$v->name}}">{{$v->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            
                <tr>
                    <td width="90" align="right">应缴费用</td>
                    <td>
                        <input type="text" name="studypay" value="" size="80" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td width="90" align="right">实际缴纳费用</td>
                    <td>
                        <input type="text" name="pay" value="" size="80" class="inpMain" />
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