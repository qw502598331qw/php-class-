<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"D:\PHPstudy\PHPTutorial\WWW\class\public/../application/index\view\article\article.html";i:1521035590;s:85:"D:\PHPstudy\PHPTutorial\WWW\class\public/../application/index\view\common\header.html";i:1520302646;s:83:"D:\PHPstudy\PHPTutorial\WWW\class\public/../application/index\view\common\foot.html";i:1519993504;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>实验室管理系统</title>

        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
		<link href="__PUBLIC__/style/lady.css" type="text/css" rel="stylesheet" />
		<script type='text/javascript' src='__PUBLIC__/style/ismobile.js'></script>
    </head>

    <body>

        <div class="ladytop">
            <div class="nav">
                <div class="left"><a href="<?php echo url('index/index'); ?>"><img src="__PUBLIC__/images
/hunshang.png" alt="实验室"></a></div>
                <div class="right">
                    <div class="box">
                    <a href="<?php echo url('index/index'); ?>"  rel='dropmenu209'>首页</a> 
                     <?php if(is_array($cateres) || $cateres instanceof \think\Collection): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('cate/index',array('cateid'=>$vo['id'])); ?>"  rel='dropmenu209'><?php echo $vo['catename']; ?></a> 
                     <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                  <a href="http://localhost/class/public/index.php/admin/login/index.html"><img src="__PUBLIC__/images
/denglu.png" height="30" width="80"  alt="实验室"></a></div>
                </div>
        </div>

<div class="hotmenu">
	<div class="con">标签栏：
   <!-- <a href="http://www.chuanke.com/s2260700.html" target="_blank" style="color:#f00;">全体信息</a>-->
    <?php if(is_array($tagres) || $tagres instanceof \think\Collection): $i = 0; $__LIST__ = $tagres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <a href='<?php echo url('search/index',array('keywords'=>$vo['tagname'])); ?>'><?php echo $vo['tagname']; ?></a>

    <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>

        <!--顶部通栏-->
        <script src='/jiehun/goto/my-65547.js' language='javascript'></script>

        <div class="position"><a href='<?php echo url('index/index'); ?>'>主页</a> > <a href="<?php echo url('cate/index',array('cateid'=>$cates['id'])); ?>"><?php echo $cates['catename']; ?></a> >  </div>

        <div class="overall">
            <div class="left">
                <div class="scrap">
                    <h1><?php echo $articles['title']; ?></h1>
                    <a href="<?php echo url('article/yue',array('aid'=>$articles['id'])); ?>"><img src="__PUBLIC__/images
/yiyue.png" height="30" width="80"  alt="完成"></a></div>
                    <div class="spread">
                        <span class="writor">发布时间：<?php echo date("Y-m-d",$articles['time']); ?></span>
                        <span class="writor">编辑：<?php echo $articles['author']; ?></span>
                        <span class="writor">标签：
                            <?php
                                $arr=explode(',', $articles['keywords']);
                                foreach ($arr as $k=>$v) {
                                    echo "<a href='#'>$v</a>";
                                }
                            ?>
                        </span>
                        <span class="writor">点击量：<?php echo $articles['click']; ?></span>
                        <?php if(is_array($wan) || $wan instanceof \think\Collection): $i = 0; $__LIST__ = $wan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <span class="writor">已完成人：<?php echo $vo['adminid']; ?></span>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>

                <!--百度分享-->
                <script src='/jiehun/goto/my-65542.js' language='javascript'></script>

                <div class="takeaway">
                    <span class="btn arr-left"></span>
                    <p class="jjxq"><?php echo $articles['desc']; ?>
</p>
                    <span class="btn arr-right"></span>
                </div>

                  <script src='/jiehun/goto/my-65541.js' language='javascript'></script>

                <div class="substance">
                <?php echo $articles['content']; ?>
                </div>


                <div class="biaoqian">
                   
                </div>



                <!--相关阅读 -->
                <!--
               <div class="xgread">
                   <div class="til"><h4>相关阅读</h4></div>

                   <div class="lef"><!--相关阅读主题链接--><!--<script src='/jiehun/goto/my-65540.js' language='javascript'></script></div>

                    <div class="rig">
                        <ul>
                            <?php if(is_array($ralateres) || $ralateres instanceof \think\Collection): $i = 0; $__LIST__ = $ralateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li><a href="<?php echo url('article/index',array('arid'=>$vo[0])); ?>" target="_blank"><?php echo $vo['1']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>


                        </ul>
                    </div>
                </div>
                -->
                <!--
                <!--频道推荐-->
                <!--
                <div class="hotsnew">
                    <div class="til"><h4>频道推荐</h4></div>
                    <ul>
                        <?php if(is_array($recres) || $recres instanceof \think\Collection): $i = 0; $__LIST__ = $recres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li><div class="tu"><a href='<?php echo url('article/index',array('arid'=>$vo['id'])); ?>' target="_blank">
                        <img src="<?php if($vo['pic'] != ''): ?>__IMG__<?php echo $vo['pic']; else: ?>__PUBLIC__/images/error.png<?php endif; ?>" alt=""/></a></div><p><a href='<?php echo url('article/index',array('arid'=>$vo['id'])); ?>'><?php echo $vo['title']; ?></a></p></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    -->
                </div>
            </div>


    
</div>

        <div class="footerd">
<ul>
<li>from Bao Chen to make   QQ:502598331   </li>
</ul>
</div>



    </body>
</html>