<?php
    include("db.php");
    $sql="SELECT * FROM msg ORDER BY id desc";
    $data=read($pdo, $sql);//读取数据username和content
?>
<html>
    <head>
        <title>留言板-SUFE李晨曦</title>
        <meta charset='utf-8' />
        <style>
            .add,.list {width:800px;margin:0 auto;}
            textarea{width:100%;height:100px;}
            .username {float: left;}
            .submit {float: right;}
            .msg{border:solid 1px #cccccc;margin-top:10px;padding:5px}
        </style>
    </head>

    <body>
        <div class='add'>
            //创建提交表单 POST方法
            <form action="save.php" method='POST'>
                <textarea name='content'></textarea>
                <input name='username' class='username' type='text' />
                <input class='submit' type='submit' value='提交' />
                <div style='clear:both;'></div>
            </form>
        </div>

        <div class='list'>
            <?php
                foreach ($data as $key=>$value) {
                    ?>    
                <div class='msg'>
                    <p><?php echo $value['username'] ?></p>
                    <p><?php echo $value['content'] ?></p>
                </div>
            <?php
                }
            ?>
        </div>
        
    </body>
</html>