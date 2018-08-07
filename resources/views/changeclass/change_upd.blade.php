@include("public/header")
<div id="dcMain">
    <div id="urHere">OA教务管理中心<b>></b><strong>添加班级</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="" class="actionBtn">班级列表</a>添加班级</h3>
        <form action=" " method="post">
        <input type="hidden" name="change_id" value="{{$data->change_id}}">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="90" align="right">原班级编号</td>
                    <td>
                    <select name="old_cid" id="">
                        
                        @foreach($data1 as $v)
                            <option value="{{$v->roomnum}}"
                            <?php 
                            if($v->roomnum==$data->old_cid){
                                echo "selected='selected'";
                            }
                            ?>
                            >{{$v->roomnum}}</option>
                        @endforeach
                    </select>
                    </td>
                </tr>
                <tr>
                    <td width="90" align="right">现班级编号</td>
                    <td>
                    <select name="new_class" id="">
                            @foreach($data1 as $v)
                                <option value="{{$v->roomnum}}"
                                <?php 
                            if($v->roomnum==$data->new_class){
                                echo "selected='selected'";
                            }
                            ?>>{{$v->roomnum}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="90" align="right">学员姓名</td>
                    <td>
                        <input type="text" name="name" value="{{$data->name}}" size="80" class="inpMain" />
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