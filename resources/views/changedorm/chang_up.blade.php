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
    <div id="urHere">DouPHP 管理中心<b>></b><strong>调宿管理</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <form action="/up_chang" method="post">
            {{ csrf_field() }}
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="80" align="right">学号</td>
                    <td>
                        {{ $data->stuid }}
                    </td>
                </tr>
                <tr>
                    <td width="80" align="right">学生姓名</td>
                    <td>
                        {{ $data->name }}
                    </td>
                </tr> <tr>
                    <td width="80" align="right">性别</td>
                    <td>
                        <?php if($data->sex==0){echo "男";}elseif($data->sex==1){echo "女";}?>
                    </td>
                </tr>

                <tr>
                    <td align="right">联系方式</td>
                    <td>
                        {{ $data->phone }}
                    </td>
                </tr>
                <tr>
                    <td align="right">身份证号</td>
                    <td>
                        {{ $data->IDcard }}
                    </td>
                </tr>
                <tr>
                    <td align="right">家庭住址</td>
                    <td>
                        {{ $data->address }}
                    </td>
                </tr>

                <tr>
                    <td align="right">入住日期</td>
                    <td>
                        {{ date("Y-m-d",$data->checkindate) }}
                    </td>
                </tr>
                <tr>
                    <td align="right">花费金额</td>
                    <td>
                        {{ $money }}元
                    </td>
                </tr>
                <tr>
                    <td align="right">原宿舍号</td>
                    <td>
                        {{ $data->dorm }}
                    </td>
                </tr>
                <tr>
                    <td align="right">新宿舍号</td>
                    <td>
                        <select name="new_did">
                            <option value="0">无</option>

                            @foreach($arr as $v)
                                <option value="{{$v->d_id}}"> {{ $v->dorm }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="withhold" value="{{ $money }}" />
                        <input type="hidden" name="s_id" value="{{$data->id}}" />
                        <input type="hidden" name="old_did" value="{{$data->d_id}}" />
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
