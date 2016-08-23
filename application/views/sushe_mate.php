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
<div class="bd">
    <div class="weui_cells_title"><?php echo $_GET['room']; ?>的舍友们 (<?php echo sizeof($mates)?>人)</div>
    <?php foreach ($mates as $mate): ?>
    <div class="weui_panel">
        <div class="weui_panel_bd">
            <div class="weui_media_box weui_media_text">
                <h4 class="weui_media_title"><?php echo $mate['name']; ?></h4>
                <p class="weui_media_desc"><?php echo $mate['college']; echo "&nbsp;"; echo $mate['major'] ?></p>
                <ul class="weui_media_info">
                    <li class="weui_media_info_meta"><?php echo $mate['class']; ?></li>
                    <li class="weui_media_info_meta weui_media_info_meta_extra"><?php echo $mate['bed']; ?>号铺</li>
                </ul>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="weui_cells_tips">本结果仅供参考，具体以新生系统查询为准</div>
</div>
<div class="ft">
    <h4>更多信息请关注“青春在线”微信公众平台</h4>
    <img src="http://ww2.sinaimg.cn/large/a06c81a3jw1f6vpzo4l5tj2076076gm3.jpg">
</div>
</body>
</html>