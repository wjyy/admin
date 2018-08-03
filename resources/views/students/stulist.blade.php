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
        <div id="urHere">DouPHP 管理中心<b>></b><strong>添加分类</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="product_category.php" class="actionBtn">商品分类</a>添加分类</h3>
            <form action="product_category.php?rec=insert" method="post">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="80" align="right">学生姓名</td>
                        <td>
                            <input type="text" name="name" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td width="80" align="right">性别</td>
                        <td>
                            <input type="text" name="sex" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td width="80" align="right">年龄</td>
                        <td>
                            <input type="text" name="age" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">联系方式</td>
                        <td>
                            <input type="text" name="phone" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">身份证号</td>
                        <td>
                            <input type="text" name="IDcard" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">家庭住址</td>
                        <td>
                            <input type="text" name="address" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">入学日期</td>
                        <td>
                            <input type="text" name="enterdate" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">退学、毕业日期</td>
                        <td>
                            <input type="text" name="leavedate" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">入住日期</td>
                        <td>
                            <input type="text" name="checkindate" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">退宿日期</td>
                        <td>
                            <input type="text" name="checkoutdate" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">课程</td>
                        <td>
                            <select name="sid">
                                <option value="0">无</option>
                                <option value="1"> 电子数码</option>
                                <option value="4">- 智能手机</option>
                                <option value="5">- 平板电脑</option>
                                <option value="2"> 家居百货</option>
                                <option value="3"> 母婴用品</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">宿舍号</td>
                        <td>
                            <select name="did">
                                <option value="0">无</option>
                                <option value="1"> 电子数码</option>
                                <option value="4">- 智能手机</option>
                                <option value="5">- 平板电脑</option>
                                <option value="2"> 家居百货</option>
                                <option value="3"> 母婴用品</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="hidden" name="token" value="b9439ae8" />
                            <input type="hidden" name="cat_id" value="" />
                            <input name="submit" class="btn" type="submit" value="提交" />
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