<?php 
  $json = json_decode(file_get_contents('../config.js'), true);
?>
<html lang="zh-CN">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>杭电助手 凭证</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/bundle.css">
  </head>
  
  <body>
    <main class="container">
      <section>
        <hstack>
          <img class="logo" src="img/icon.png" alt="HDUHelp Logo">
          <h1>杭电助手 凭证</h1>
          <spacer></spacer>
        </hstack>
      </section>
      <section>
        <vstack>
          <b>学生离校请假</b>
          <span>离校请假</span></vstack>
      </section>
      <section>
        <list spacing="xs">
          <hstack>
            <b>姓名</b>
            <spacer></spacer>
            <span> <?php echo $json["stuname"]; ?></span></hstack>
          <hstack>
	          <b>学号</b>
            <spacer></spacer>
            <span> <?php echo $json["schoolid"]; ?></span></hstack>
          <hstack>
            <b>健康档案</b>
            <spacer></spacer>
            <span>该学生14天内健康状况无异常，健康码为绿码</span></hstack>
          <hstack>
            <b>请假记录</b>
            <spacer></spacer>
            <span>该学生7日内请假 0 次,未出门 0 次,未归(含在外住宿) 0 次,在外时间超时 0 次</span></hstack>
          <hstack>
            <b>学院</b>
            <spacer></spacer>
            <span> <?php echo $json["academy"]; ?></span></hstack>
          <hstack>
            <b>班级</b>
            <spacer></spacer>
            <span> <?php echo $json["class"]; ?></span></hstack>
          <hstack>
            <b>辅导员</b>
            <spacer></spacer>
            <span> <?php echo $json["teacher"]; ?></span></hstack>
        </list>
      </section>
      <section>
      <p><?php echo "申请于 ".date("Y/m/d")." 上午8:10:23"?></p>
      <p>最后更新于 <?php echo date("Y/m/d")." 下午".date("h:i:s");?></p>
      </section>
      <section>
        <h4 class="card-title">申请材料</h4>
        <list spacing="xs">
          <vstack>
            <b>请假类型</b>
            <span><?php echo $json["type"]; ?></span></vstack>
          <vstack>
            <b>请假开始日期</b>
            <span><?php echo date("Y-m-d"); ?></span></vstack>
          <vstack>
            <b>请假结束日期</b>
            <span><?php echo date("Y-m-d"); ?></span></vstack>
          <vstack>
            <b>请假原因</b>
            <span> <?php echo $json["reason"]; ?></span></vstack>
          <vstack>
            <b>离校期间是否离开浙江</b>
            <span>否</span></vstack>
          <vstack>
            <b>签名</b>
            <img src="../sign.png" alt="< 图片 >" class="w-full"></vstack>
        </list>
      </section>
      <section>
        <h4 class="card-title">审核意见</h4>
        <p>&lt; 无 &gt;</p>
        <p>&lt; 无 &gt;</p>
      </section>
      <p class="text-center text-white print:text-black">由杭电助手提供技术支持</p>
      <p class="text-center hidden print:block">本打印副本生成于<?php echo gmstrftime("%a %b %d %Y %T",time()); ?>GMT+0800 (中国标准时间)</p></main>
  </body>

</html>
