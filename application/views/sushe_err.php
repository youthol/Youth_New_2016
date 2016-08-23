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
        <p class="weui_msg_desc">好尴尬啊，没查到您的宿舍，请检查姓名或班级输入是否有误，然后再试一次，请注意班级名称以新生信息查询到的结果为准，有括号的注意区分中英文字符，或者在公众号内直接回复让我们的小编帮你！</p>
    </div>
    <div class="weui_opr_area">
        <p class="weui_btn_area">
            <a href="<?php echo base_url(); ?>sushe" class="weui_btn weui_btn_primary">重新查询</a>
        </p>
    </div>
</div>
<div class="ft">
    <h4>更多信息请关注“青春在线”微信公众平台</h4>
    <img src="http://ww2.sinaimg.cn/large/a06c81a3jw1f6vpzo4l5tj2076076gm3.jpg">
</div>
</body>
</html>