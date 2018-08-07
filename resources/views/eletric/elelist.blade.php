@include('public/header');
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
<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">OA教务管理中心<b>></b><strong>电费列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="{{url('/addeleview')}}" class="actionBtn add">添加电费</a>电费列表</h3>
        <div id="list">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="100" align="center">编号</th>
                    <th align="left">宿舍号</th>
                    <th width="100" align="center">月份</th>
                    <th width="100" align="center">应缴纳电费</th>
                    <th width="100" align="center">付款方式</th>
                    <th width="100" align="center">实付款</th>
                    <th width="120" align="center">付款时间</th>
                    <th width="100" align="center">状态</th>
                    <th width="100" align="center">操作</th>
                </tr>
                @foreach($data as $v)
                    <tr>
                        <td align="center">{{$v->id}}</td>
                        <td><a href="">{{$v->dorm}}</a></td>
                        <td align="center"><a href="">{{$v->month}}</a></td>
                        <td align="center"><a href="">{{$v->pay}}</a></td>
                        <td align="center"><a href="">{{$v->paystyle}}</a></td>
                        <td align="center"><a href="">{{$v->paynum}}</a></td>{{--{{$v->status}}--}}
                        <td align="center"><a href=""><?php echo date('Y-m-d H:i:s', $v->paytime);?></a></td>
                        <td align="center"><a href="">
                                <?php if($v->status==0){
                                    echo "<img src='/images/n.png' width='30' height='30'>";
                                }else if($v->status==1){
                                    echo "<img src='/images/y.png' width='30' height='30'>";
                                }?></a></td>
                        <td align="center">
                            <?php $d =$v->id."+".$v->did;?>
                            <a href="{{action('EletricController@updeleview',$d)}}">编辑</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div id="pull_right">
                <div class="pull-right">
                    {!! $data->render() !!}
                </div>
            </div>
            <div class="action">
            </div>
        </div>
        <div class="clear"></div>

        <div class="clear"></div>
        {{--<div id="dcFooter">--}}
        {{--<div id="footer">--}}

        {{--</div><!-- dcFooter 结束 -->--}}
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