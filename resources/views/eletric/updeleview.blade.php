@include("public/header")
<div id="dcMain">
    <div id="urHere">OA教务管理中心<b>></b><strong>修改电费</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
        <h3><a href="{{action('EletricController@eletric')}}" class="actionBtn">电费列表</a>修改电费</h3>
        <form action="/updateele" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <input type="hidden" name="id" value="{{$ele->id}}">
            <input type="hidden" name="pay" value="{{$ele->pay}}">
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="90" align="right">宿舍号</td>
                    <td>
                        <input type="text" disabled="disabled" name="dorm" value="{{$dorm->dorm}}" size="80" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td width="90" align="right">月份</td>
                    <td>
                        <input type="text" disabled="disabled" name="month" value="{{$ele->month}}" size="80" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td width="90" align="right">应缴纳电费</td>
                    <td>
                        <input type="text" disabled="disabled" name="" value="{{$ele->pay}}" size="80" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td width="90" align="right">付款方式</td>
                    <td>
                        <input type="text" name="paystyle" value="{{$ele->paystyle}}" size="80" class="inpMain" />
                    </td>
                </tr>
                <tr>
                    <td width="90" align="right">实付款</td>
                    <td>
                        <input type="text" name="paynum" value="{{$ele->paynum}}" size="80" class="inpMain" />
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

</body>
</html>