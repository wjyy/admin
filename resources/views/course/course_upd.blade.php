@include("public/header")
<div id="dcMain">
<div id="urHere">OA教务管理中心<b>></b><strong>添加课程</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="{{url('/course')}}" class="actionBtn">课程列表</a>添加课程</h3>
    <form action=" " method="post">
    
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        <input type="hidden" name="c_id" value="{{$data->c_id}}">

     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
             <tr>
                <td width="90" align="right">章节所属分类</td>
                <td>
                    <select name="cate_id" id="">
                        @foreach($data1 as $v)
                        <option value="{{$v->cate_id}}"
                        <?php
                            if($v->cate_id==$data->cate_id){
                                echo "selected='selected'";
                            }
                        ?>
                        >
                        <?php
                            echo str_repeat('-',($v->lever)*2);
                        ?>
                        {{$v->cate_name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td width="90" align="right">章节标题</td>
                <td>
                    <input type="text" name="title" value="{{$data->title}}" size="80" class="inpMain" />
                </td>
            </tr>
            <tr>
                <td align="right">章节内容</td>
                <td>
                <textarea name="content" id="" cols="30" rows="10">{{$data->content}}</textarea>

                </td>
            </tr>
            <tr>
                <td align="right">排序</td>
                <td>
                <input type="text" name="sort" value="{{$data->sort}}" size="80" class="inpMain" />
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