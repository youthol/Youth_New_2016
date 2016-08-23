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
    <div class="weui_cells_title">本结果仅供参考，具体以新生系统查询为准</div>
    <?php foreach ($info as $item): ?>
    <div class="weui_cells ">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>姓名</p></div>
            <div class="weui_cell_ft"><?php echo $item['name']; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>学号</p></div>
            <div class="weui_cell_ft"><?php echo $item['number']; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>宿舍</p></div>
            <div class="weui_cell_ft"><?php echo $item['room']; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>床号</p></div>
            <div class="weui_cell_ft"><?php echo $item['bed']; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>性别</p></div>
            <div class="weui_cell_ft"><?php echo $item['gender']; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>学院</p></div>
            <div class="weui_cell_ft"><?php echo $item['college']; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>班级</p></div>
            <div class="weui_cell_ft"><?php echo $item['class']; ?></div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary"><p>类别</p></div>
            <div class="weui_cell_ft"><?php echo $item['category']; ?></div>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="weui_cells_tips">说明：宿舍的“Y”代表“研究生”，“D”代表“东校区”，“BH”代表“北楼”，“NH”代表“南楼”，例如“Y2H103”代表“研究生2号宿舍楼103房间”，“3NH551”代表“3号宿舍楼南楼551房间”，“8H134”代表“8号宿舍楼134房间”，“D”开头的为东校区</div>
    <?php if($item['room'] != "无") { ?>
    <div class="weui_cells weui_cells_access">
        <a class="weui_cell" href="<?php echo base_url(); ?>sushe/mate?room=<?php echo $item['room']; ?>">
            <div class="weui_cell_bd weui_cell_primary">
                <p>找舍友</p>
            </div>
            <div class="weui_cell_ft">点击查找</div>
        </a>
    </div>
    <?php } ?>
</div>
<div class="ft">
    <h4>更多信息请关注“青春在线”微信公众平台</h4>
    <img src="http://ww2.sinaimg.cn/large/a06c81a3jw1f6vpzo4l5tj2076076gm3.jpg">
</div>
</body>
</html>