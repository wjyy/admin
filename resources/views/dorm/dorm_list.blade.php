
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>DouPHP 管理中心 - 商品列表 </title>
<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
<script type="text/javascript" src="js/jquery.autotextarea.js"></script>

        <style type="text/css">
        #pull_right{
            text-align:center;
        }
        .pull-right {
            /*float: left!important;*/
        }
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .pagination > li {
            display: inline;
        }
        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #428bca;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            color: #2a6496;
            background-color: #eee;
            border-color: #ddd;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #428bca;
            border-color: #428bca;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
@include('public/header')
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">OA 教务管理中心<b>></b><strong>宿舍信息列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="{{url("/add_dorm")}}" class="actionBtn add">添加宿舍</a>宿舍列表</h3>
    <div class="filter">
    <form action="product.php" method="post">
     <select name="cat_id">
      <option value="0">未分类</option>
                  <option value="1"> 电子数码</option>
                        <option value="4">- 智能手机</option>
                        <option value="5">- 平板电脑</option>
                        <option value="2"> 家居百货</option>
                        <option value="3"> 母婴用品</option>
                 </select>
     <input name="keyword" type="text" class="inpMain" value="" size="20" />
     <input name="submit" class="btnGray" type="submit" value="筛选" />
    </form>

    </div>
        <div id="list">
    <form name="action" method="post" action="product.php?rec=action">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
        <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
        <th width="60" align="center">宿舍编号</th>
        {{--<th align="left">宿舍编号</th>--}}
          <th align="left">学生编号</th>
          <th align="left">学生姓名</th>

          <th align="left">宿舍现有人数</th>
          <th align="left">宿舍最多限制人数</th>

       <th width="80" align="center">添加日期</th>
        <th width="80" align="center">操作</th>
      </tr>
        @foreach($data as $v)
            <tr>
        <td align="center"><input type="checkbox" name="checkbox[]" value="15" /></td>
        <td align="center">{{$v->dorm}}</td>
        <td><a href="product.php?rec=edit&id=15">{{$v->stuid}}</a></td>
                <td><a href="product.php?rec=edit&id=15">{{$v->name}}</a></td>

                <th align="left">{{$v->stunum}}</th>
                <th align="left">{{$v->maxnum}}</th>


        <td align="center">2013-06-26</td>
        <td align="center">
                  <a href="{{action('DormController@dorm_upd',[$v->d_id])}}">编辑</a> | <a href="{{action('DormController@dorm_del',[$v->d_id])}}">删除</a>
                 </td>
      </tr>
    @endforeach
          </table>


    </form>
    </div>
    <div class="clear"></div>
         <div id="pull_right">
             <div class="pull-right">
                 {!! $data->render() !!}
             </div>
         </div>
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
