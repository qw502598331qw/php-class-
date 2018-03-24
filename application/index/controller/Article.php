<?php
namespace app\index\controller;
use app\index\controller\Base;
class Article extends Base
{

    public function index()
    {
    	$arid=input('arid');
    	$articles=db('article')->find($arid);
        $ralateres=$this->ralat($articles['keywords'],$articles['id']);
        // dump($ralateres); die;
    	db('article')->where('id','=',$arid)->setInc('click');
        $wan=db('wan')->where('articleid','=',$arid)->select();
    	$cates=db('cate')->find($articles['cateid']);
    	//相关阅读
    	$recres=db('article')->where(array('cateid'=>$cates['id'],'state'=>1))->limit(8)->select();
    	$this->assign(array(
    		'articles'=>$articles,
    		'cates'=>$cates,
    		'recres'=>$recres,
            'ralateres'=>$ralateres,
            'wan'=>$wan
    		));
        return $this->fetch('article');
    }


    public function ralat($keywords,$id){
        $arr=explode(',', $keywords);
        static $ralateres=array();
        foreach ($arr as $k=>$v) {
            $map['keywords']=['like','%'.$v.'%'];
            $map['id']=['neq',$id];
            $artres=db('article')->where($map)->order('id desc')->limit(8)->select();
            $ralateres=array_merge($ralateres,$artres);
        }
        if($ralateres){

        $ralateres=arr_unique($ralateres);

        return $ralateres;
            
        }
        
    }

    public function yue(){
        $usename= session('username');
        $arid=input('aid');
        $articles=db('article')->find($arid);
        $ralateres=$this->ralat($articles['keywords'],$articles['id']);
        $article=db('article')->where('id','=',$arid)->value("cateid");
        $admin=db('admin')->where('username','=',$usename)->value("user");

        $data=[
            'adminid'=>$usename,
            'articleid'=>input('aid'),
        ];
        $tong=false;
        if( $admin+1==$article|| $article==1)
        {
            $tong=true;
        }
        if($tong){
            if(db('wan')->where('adminid','=',$usename)->where('articleid','=',$arid)->find())
            {
                return $this->error('你已经完成，请勿多次完成');
            }
            else{
                db('wan')->insert($data);
                return $this->success('完成成功！');
            }
        }else {
            return $this->error('这不是你的任务，请勿完成！');
        }
    }



    




}
