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
    <h1 class="youth_page_title">新生男女比例</h1>
    <p class="youth_page_desc">青春在线提供技术支持</p>
</div>
<div class="bd">
    <div class="weui_cells_title">查询结果</div>
    <div class="weui_cells">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>单位</p></div>
            <div class="weui_cell_ft"><?php echo $info[0]; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>男生</p></div>
            <div class="weui_cell_ft"><?php echo $info[1]; ?>人</div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>女生</p></div>
            <div class="weui_cell_ft"><?php echo $info[2]; ?>人</div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>男女比例</p></div>
            <div class="weui_cell_ft"><?php echo $info[3]; ?></div>
        </div>
    </div>
</div>
<div class="ft">
    <h4>更多信息请关注“青春在线”微信公众平台</h4>
    <img src="http://ww2.sinaimg.cn/large/a06c81a3jw1f6vpzo4l5tj2076076gm3.jpg">
</div>
</body>
</html>