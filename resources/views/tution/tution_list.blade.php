<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>OA教务 管理中心</title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/admin/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="/admin/js/global.js"></script>
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
<body
        @include('public/header');
<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">DouPHP 管理中心<b>></b><strong>费用列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="{{url('/tuition_add')}}" class="actionBtn add">添加学员学费</a>学费列表</h3>

        <div id="list">


            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
                    <th width="40" align="center">学号</th>
                    <th align="left">姓名</th>
                    <th align="left">性别</th>
                    <th align="left">学生应缴学费</th>
                    <th align="left">学生实际缴学费</th>
                    <th align="left">学生欠款</th>
                    <th width="80" align="center">缴费时间</th>
                    <th width="80" align="center">操作</th>
                </tr>
               @foreach($data as $v)
                    <tr>
                        <td align="center"><input type="checkbox" name="checkbox[]" value="15" /></td>
                        <td align="center">{{$v->stuid}}</td>
                        <td><a href="#">{{$v->name}}</a></td>
                        <td><?php if($v->sex==0){echo "男";}elseif($v->sex==1){echo "女";}?></td>
                        <td>{{$v->studypay}}</td>
                        <td>{{$v->pay}}</td>
                        <td>{{$v->debt}}</td>
                        <td>{{date("Y-m-d H:i:s",$v->addtime)}}</td>
                        <td align="center">
                            <a href="{{action('TuitionController@tuition_upd',[$v->tui_id])}}">编辑</a>
                        </td>
                    </tr>
               @endforeach
            </table>
        </div>
        <div id="pull_right">
             <div class="pull-right">
                 {!! $data->render() !!}
             </div>
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
