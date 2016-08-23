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
            margin-top: 25px;
        }
        .ft h4 {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
<div class="hd">
    <h1 class="youth_page_title">新生信息查询</h1>
    <p class="youth_page_desc">青春在线提供技术支持</p>
</div>
<div class="bd">
    <form action="<?php echo base_url(); ?>res" method="post">
        <div class="weui_cells_title">请输入姓名</div>
        <div class="weui_cells weui_cells_form">
            <div class="weui_cell">
                <div class="weui_cell_hd">
                    <lable class="weui_label">姓名</lable>
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input type="text" class="weui_input" name="name" placeholder="请输入您的姓名">
                </div>
            </div>
        </div>
        <div class="weui_cells_tips">少数民族的同学注意名字中间的点，例如“沙阿达提·买买提艾力”</div>
        <div class="weui_btn_area">
            <input type="submit" class="weui_btn weui_btn_primary" value="查询">
        </div>
    </form>
    <div class="ft">
        <h4>更多信息请关注“青春在线”微信公众平台</h4>
        <img src="http://ww2.sinaimg.cn/large/a06c81a3jw1f6vpzo4l5tj2076076gm3.jpg">
    </div>
</div>
</body>
</html>
