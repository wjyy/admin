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
    <div id="urHere">DouPHP 管理中心<b>></b><strong>宿舍列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3>宿舍列表</h3>

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
                    <th align="left">宿舍入住时间</th>
                    <th align="left">退宿时间</th>
                    <th width="80" align="center">宿舍号</th>
                    <th width="80" align="center">操作</th>
                </tr>
                @foreach($data as $v)
                    <tr>
                        <td align="center"><input type="checkbox" name="checkbox[]" value="15" /></td>
                        <td align="center">15</td>
                        <td><a href="#"></a>{{ $v->name }}</td>
                        <td>{{ $v->age }}</td>
                        <td><?php if($v->sex==0){echo "男";}elseif($v->sex==1){echo "女";}?></td>
                        <td>{{ $v->phone }}</td>
                        <td>{{ $v->IDcard }}</td>
                        <td>{{ date("Y-m-d",$v->checkindate) }}</td>
                        <td>{{ $v->checkoutdate }}</td>
                        <td>{{ $v->dorm }}</td>
                        <td align="center">
                            <a href="{{action('ChangedormController@chang_up',[$v->id]) }}">编辑</a>
                        </td>
                    </tr>
                @endforeach
            </table>
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
