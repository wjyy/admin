<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>OA教务 管理中心</title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="/admin/js/global.js"></script>
</head>
<body
@include('public/header');
<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">DouPHP 管理中心<b>></b><strong>商品列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="{{ url('students') }}" class="actionBtn add">添加商品</a>商品列表</h3>

        <div id="list">


                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
                        <th width="40" align="center">学号</th>
                        <th align="left">姓名</th>
                        <th align="left">年龄</th>
                        <th align="left">性别</th>
                        <th align="left">联系方式</th>
                        <th align="left">身份证号</th>
                        <th align="left">家庭住址</th>
                        <th align="left">入学时间</th>
                        <th align="left">退学|毕业时间</th>
                        <th align="left">宿舍入住时间</th>
                        <th align="left">退宿时间</th>
                        <th width="150" align="center">课程</th>
                        <th width="80" align="center">宿舍号</th>
                        <th width="80" align="center">操作</th>
                    </tr>
                    @foreach($data as $v)
                    <tr>
                        <td align="center"><input type="checkbox" name="checkbox[]" value="15" /></td>
                        <td align="center">15</td>
                        <td><a href="#">{{ $v->name }}</a></td>
                        <td>{{ $v->sex }}</td>
                        <td>{{ $v->age }}</td>
                        <td>{{ $v->phone }}</td>
                        <td>{{ $v->IDcard }}</td>
                        <td>{{ $v->address }}</td>
                        <td>{{ $v->enterdate }}</td>
                        <td>{{ $v->leavedate }}</td>
                        <td>{{ $v->checkindate }}</td>
                        <td>{{ $v->checkoutdate }}</td>
                        <td>{{ $v->sid }}</td>
                        <td>{{ $v->did }}</td>
                        <td align="center">
                            <a href="{{action('StudentsController@stu_up',[$v->id]) }}">编辑</a> | <a href="{{action('StudentsController@del_stu',[$v->id]) }}">删除</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{--<div class="action">--}}
                    {{--<select name="action" onchange="douAction()">--}}
                        {{--<option value="0">请选择...</option>--}}
                        {{--<option value="del_all">删除</option>--}}
                        {{--<option value="category_move">移动分类至</option>--}}
                    {{--</select>--}}
                    {{--<select name="new_cat_id" style="display:none">--}}
                        {{--<option value="0">未分类</option>--}}
                        {{--<option value="1"> 电子数码</option>--}}
                        {{--<option value="4">- 智能手机</option>--}}
                        {{--<option value="5">- 平板电脑</option>--}}
                        {{--<option value="2"> 家居百货</option>--}}
                        {{--<option value="3"> 母婴用品</option>--}}
                    {{--</select>--}}
                    {{--<input name="submit" class="btn" type="submit" value="执行" />--}}
                {{--</div>--}}
        </div>
        <div class="clear"></div>
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
