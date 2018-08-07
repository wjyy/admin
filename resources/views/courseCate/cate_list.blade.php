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
@include('public/header');
<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">OA教务管理中心<b>></b><strong>课程分类列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="{{url('/cate_add')}}" class="actionBtn add">添加课程分类</a>课程分类列表</h3>
        <div class="filter">
    <span>
        </span>
        </div>
        <div id="list">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="240" align="center">序号</th>
                    <th width="150" align="center">课程分类名称</th>
                    <th width="240" align="center">排序</th>
                    <th width="240" align="center">分类描述</th>
                    <th width="240" align="center">pid</th>
                    <th width="240" align="center">操作</th>
                </tr>
                @foreach($data as $v)
                    <tr>
                    <td align="center">{{$v->cate_id}}</td>
                        <td >
                       <?php echo str_repeat('-',($v->lever)*2);?>
                        {{$v->cate_name}}</td>
                        <td align="center"><a href="" >{{$v->sort}}</a></td>
                        <td align="center"><a href="">{{$v->desc}}</a></td>
                        <td align="center"><a href="">{{$v->pid}}</a></td>
                        <td align="center">
                            <a href="{{action('CoursecateController@del',[$v->cate_id])}}">删除</a>|
                            <a href="{{action('CoursecateController@cate_upd',[$v->cate_id])}}">编辑</a>
                        </td>
                    </tr>
               @endforeach
            </table>
            <div class="action">
            </div>
        </div>
        <div class="clear"></div>
        

        <div class="clear"></div>
        <div id="pull_right">
             <div class="pull-right">
              
              
             </div>
         </div>
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