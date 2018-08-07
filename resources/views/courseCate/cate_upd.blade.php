@include("public/header")
<div id="dcMain">
<div id="urHere">OA教务管理中心<b>></b><strong>添加课程分类</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="{{url('/course_cate')}}" class="actionBtn">课程分类列表</a>添加课程分类</h3>
    <form action="" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        <input type="hidden" name="cate_id" value="{{$data->cate_id}}">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td width="90" align="right">课程分类</td>
                <td>
                <select name="pid" id="">
                    <option value="0">顶级</option>
                    @foreach($info as $v)
                    <option value="{{$v->pid}}"
                        <?php
                        if($v->cate_id==$data->cate_id){
                            echo "selected='selected'";
                        }
                        ?>
                    >
                    <?php echo str_repeat('&nbsp',$v->lever*3);?>
                    {{$v->cate_name}}</option>
                    @endforeach
                </select>
                </td>
            </tr>
            <tr>
                <td align="right">课程分类名称</td>
                <td>
                   <input type="text" name='cate_name' value="{{$data->cate_name}}">
                </td>
            </tr>
            <tr>
            <td align="right">排序</td>
                <td><input type="text" name='sort' value="{{$data->sort}}"></td>
             </tr>
             <tr>
             <td align="right">分类描述</td>
                <td><textarea name="desc" id="" cols="30" rows="10">{{$data->desc}}</textarea></td>
             </tr>
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