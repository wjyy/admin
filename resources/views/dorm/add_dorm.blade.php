<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>OA教务 管理中心</title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/css/public.css" rel="stylesheet" type="text/css">
</head>
<body
        @include('public/header');
<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">DouPHP 管理中心<b>></b><strong>添加宿舍</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="{{url('/dorm')}}" class="actionBtn">宿舍列表</a>添加宿舍</h3>
        <form action="addorm" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="80" align="right">宿舍编号</td>
                    <td>
                        <input type="text" name="dorm" value="" size="40" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td width="80" align="right">宿舍区域</td>
                    <td>
                        <select name="cat_id" id="">
                            @foreach($data as $v)
                            <option value="{{$v->cate_id}}">{{$v->area_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="80" align="right">宿舍楼层</td>
                    <td>
                        <select name="f_id" id="">
                            @foreach($data as $v)
                                <option value="{{$v->f_id}}">{{$v->floor_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td align="right">宿舍最多限制人数</td>
                    <td>
                        <input type="text" name="maxnum" value="" size="40" class="inpMain" />
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>

                        <input  class="btn" type="submit" value="提交" />
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