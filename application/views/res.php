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
    <h1 class="youth_page_title">新生信息查询</h1>
    <p class="youth_page_desc">青春在线提供技术支持</p>
</div>
<div class="bd">
    <div class="weui_cells_title">查询结果</div>
    <?php foreach ($students as $student): ?>
    <div class="weui_cells">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>姓名</p></div>
            <div class="weui_cell_ft"><?php echo $student['name']; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>性别</p></div>
            <div class="weui_cell_ft"><?php echo $student['gender']; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>学院</p></div>
            <div class="weui_cell_ft"><?php echo $student['college']; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>专业</p></div>
            <div class="weui_cell_ft"><?php echo $student['major']; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>班级</p></div>
            <div class="weui_cell_ft"><?php echo $student['class']; ?></div>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="weui_cells_title">其他信息</div>
    <div class="weui_cells weui_cells_access">
        <a class="weui_cell" href="http://mp.weixin.qq.com/s?__biz=MjM5NjM5NjkwMA==&mid=2650877022&idx=1&sn=bd8e596de78c50e1b29001b4082b9a51&scene=0#wechat_redirect">
            <div class="weui_cell_bd weui_cell_primary">
                <p>导员信息</p>
            </div>
            <div class="weui_cell_ft"></div>
        </a>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <p>宿舍等其他信息请关注“青春在线”微信公众平台，稍后到来！</p>
            </div>
        </div>
    </div>
    <div class="ft">
        <h4>更多信息请关注“青春在线”微信公众平台</h4>
        <img src="http://ww2.sinaimg.cn/large/a06c81a3jw1f6vpzo4l5tj2076076gm3.jpg">
    </div>
</div>
<?php if(sizeof($students) > 1) {
    echo "<script>window.onload = function() {alert(\"有人和你重名哦，我不知道哪个是你╮(╯▽╰)╭\")}</script>";
} ?>
</body>
</html>