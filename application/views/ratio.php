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
    <div class="weui_cells_title">查询条件</div>
    <form action="<?php echo base_url(); ?>ratio/res" method="post">
        <div class="weui_cells">
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd">
                    <label for="" class="weui_label">选项</label>
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <select class="weui_select" name="field">
                        <option value="college">学院男女比例</option>
                        <option value="major">专业男女比例</option>
                        <option value="class">班级男女比例</option>
                    </select>
                </div>
            </div>
            <div class="weui_cell">
                <div class="weui_cell_hd"><label class="weui_label">名称</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" type="text" name="name" placeholder="请输入完整的名称">
                </div>
            </div>
        </div>
        <div class="weui_cells_tips">先选择学院/专业/班级选项，然后输入完整的学院/专业/班级名称，名称以新生信息查询结果为准</div>
        <div class="weui_btn_area">
            <input type="submit" class="weui_btn weui_btn_primary" value="查询">
        </div>
    </form>

</div>
<div class="ft">
    <h4>更多信息请关注“青春在线”微信公众平台</h4>
    <img src="http://ww2.sinaimg.cn/large/a06c81a3jw1f6vpzo4l5tj2076076gm3.jpg">
</div>
</body>
</html>