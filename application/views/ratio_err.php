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
<div class="weui_msg">
    <div class="weui_icon_area"><i class="weui_icon_msg weui_icon_warn"></i></div>
    <div class="weui_text_area">
        <h2 class="weui_msg_title">查无结果</h2>
        <p class="weui_msg_desc">未查到数据，请检查您的输入是否正确，有括号的名称请注意中英文字符，然后再试一次！</p>
    </div>
    <div class="weui_opr_area">
        <p class="weui_btn_area">
            <a href="<?php echo base_url(); ?>ratio" class="weui_btn weui_btn_primary">重新查询</a>
        </p>
    </div>
</div>
<div class="ft">
    <h4>更多信息请关注“青春在线”微信公众平台</h4>
    <img src="http://ww2.sinaimg.cn/large/a06c81a3jw1f6vpzo4l5tj2076076gm3.jpg">
</div>
</body>
</html>