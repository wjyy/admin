<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>OA教务 管理中心</title>
    <meta name="Copyright" content="Douco Design." />
    <link rel="stylesheet" type="text/css" href="/css/calender.css" />
    <link href="/admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="/admin/js/global.js"></script>
</head>
<body
        @include('public/header');
<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">DouPHP 管理中心<b>></b><strong>信息修改</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <form action="/up_stu" method="post">
            {{ csrf_field() }}
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="80" align="right">学号</td>
                    <td>
                        <input type="text" name="stuid" value="{{$data->stuid}}" size="40" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td width="80" align="right">学生姓名</td>
                    <td>
                        <input type="text" name="name" value="{{$data->name}}" size="40" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td width="80" align="right">性别</td>
                    {{--<td>--}}
                        {{--<input type="text" name="sex" value="{{$data->sex}}" size="40" class="inpMain" />--}}
                    {{--</td>--}}
                    <td>
                        <label for="mobile_closed_1">
                            <input type="radio" name="sex" id="mobile_closed_1" value="0" <?php if($data->sex==0){echo "checked='true'";}?> />
                            男</label>
                        <label for="mobile_closed_0">
                            <input type="radio" name="sex" id="mobile_closed_0" value="1" <?php if($data->sex==1){echo "checked='true'";}?>>
                            女</label>
                    </td>
                </tr>
                <tr>
                    <td width="80" align="right">年龄</td>
                    <td>
                        <input type="text" name="age" value="{{$data->age}}" size="40" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td align="right">联系方式</td>
                    <td>
                        <input type="text" name="phone" value="{{$data->phone}}" size="40" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td align="right">身份证号</td>
                    <td>
                        <input type="text" name="IDcard" value="{{$data->IDcard}}" size="40" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td align="right">家庭住址</td>
                    <td>
                        <input type="text" name="address" value="{{$data->address}}" size="40" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td align="right">入学日期</td>
                    <td>
                        <input type="text" id="inp1" name="enterdate"  class="inpMain" placeholder="{{ date("Y-m-d",$data->enterdate) }}">
                    </td>
                </tr>
                <tr>
                    <td align="right">退学、毕业日期</td>
                    <td>
                        <input type="text" id="inp2" name="leavedate" class="inpMain" placeholder="{{ date("Y-m-d",$data->leavedate) }}">
                    </td>
                </tr>
                <tr>
                    <td align="right">入住日期</td>
                    <td>
                        <input type="text" id="inp3" name="checkindate" class="inpMain" placeholder="{{ date("Y-m-d",$data->checkindate) }}">
                    </td>
                </tr>
                <tr>
                    <td align="right">退宿日期</td>
                    <td>
                        <input type="text" id="inp4" name="checkoutdate" class="inpMain" placeholder="{{ date("Y-m-d",$data->checkoutdate) }}">
                    </td>
                </tr>
                <tr>
                    <td align="right">课程</td>
                    <td>
                        <select name="sid">
                            <option value="0">无</option>
                            @foreach($info2 as $c)
                            <option value="{{ $c->c_id }}" <?php if($c->c_id==$data->sid){echo "selected='selected'";}?>> {{ $c->title }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right">宿舍号</td>
                    <td>
                        <select name="did">
                            <option value="0">无</option>
                            @foreach($info as $y)
                            <option value="{{ $y->d_id }}" <?php if($y->d_id==$data->sid){echo "selected='selected'";}?> > {{ $y->dorm }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="{{$data->id}}" />
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
            版权所有 ? 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
        </ul>
    </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
</body>
</html>
<script src="/js/calender.js"></script>
<script>
    // calender('#inp').init(function(date){this.value= date});
    calender('#inp1').init(
            {format : 'yyyy-MM-dd',
                date : [2018,8,8],
                //button : true
            },
            function(date){
                this.value= date
            }
    );
    calender('#inp2').init(
            {format : 'yyyy-MM-dd',
                date : [2018,8,8],
                //button : true
            },
            function(date){
                this.value= date
            }
    );
    calender('#inp3').init(
            {format : 'yyyy-MM-dd',
                date : [2018,8,8],
                //button : true
            },
            function(date){
                this.value= date
            }
    );
    calender('#inp4').init(
            {format : 'yyyy-MM-dd',
                date : [2018,8,8],
                //button : true
            },
            function(date){
                this.value= date
            }
    );
</script>
