# 新生信息查询

功能包括新生信息查询（班级）、各学院/专业/班级男女比例查询、新生宿舍查询（包括查舍友）

* 新生信息查询：`/`
* 男女比例查询：`/ratio`
* 新生宿舍查询：`/sushe`
* 查舍友：`/sushe/mate?room=宿舍号`

新生信息和宿舍信息分别在两个数据表内，原文件为 Excel 文件，转换为 CSV 格式后可以通过 phpMyAdmin 导入数据库

代码写的比较仓促，仅供 Codeigniter 入门学习参考

注意：PHP版本需要>=5.6，否则会报错。如果需要兼容低版本php，可以改为原生sql