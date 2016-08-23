<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>学生服务 | 青春在线</title>
    <link rel="stylesheet" href="http://gaojiajun.cn/wechat/statics/css/weui.min.css">
    <link rel="stylesheet" href="http://gaojiajun.cn/wechat/statics/css/custom.css">
    <style>
        .ft {
            text-align: center;
            margin-top: 15px;
        }
        .ft h4 {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="hd">
    <h1 class="youth_page_title">新生宿舍查询</h1>
    <p class="youth_page_desc">青春在线提供技术支持</p>
</div>
<form action="<?php echo base_url(); ?>sushe/res" method="post">
<div class="bd">
    <div class="weui_cells_title">查询结果</div>
    <div class="weui_cells weui_cells_form">
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">姓名</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" name="name" type="text" placeholder="请输入您的姓名">
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">班级</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" name="class" type="text" placeholder="请输入您的班级">
            </div>
        </div>
    </div>
    <div class="weui_cells_tips">请输入完整的班级名称，以“<a href="<?php echo base_url(); ?>">新生信息查询</a>”查询到的名称为准，有括号的注意区分中英文符号</div>
    <div class="weui_btn_area">
        <input type="submit" class="weui_btn weui_btn_primary" value="查询">
    </div>
</div>
</form>
<div class="ft">
    <h4>更多信息请关注“青春在线”微信公众平台</h4>
    <img src="http://ww2.sinaimg.cn/large/a06c81a3jw1f6vpzo4l5tj2076076gm3.jpg">
</div>
</body>
</html>