<?php
class UserAction extends BaseAction{
	protected function _initialize(){
		parent::_initialize();
		$userinfo=M('User_group')->where(array('id'=>session('gid')))->find();
		$users=M('Users')->where(array('id'=>$_SESSION['uid']))->find();
		$this->assign('thisUser',$users);
		//dump($users);
		$this->assign('viptime',$users['viptime']);
		if(session('uid')){
			if($users['viptime']<time()){
				session(null);
				session_destroy();
				unset($_SESSION);
				$this->error('您的帐号已经到期，请充值后再使用');
			}
		}
		$wecha=M('Wxuser')->field('wxname,wxid,headerpic,weixin')->where(array('token'=>session('token'),'uid'=>session('uid')))->find();
		if(empty($wecha) || substr($wecha['headerpic'],0,5)!='http:'){
			$wecha['headerpic']="img/image/default.jpg";
		}
		$tj_date['date'] = date("Y-m-d");
		//$starttime=strtotime(date("Y-m-d 00:00:00"));
		//$endtime=strtotime(date("Y-m-d 23:59:59"));
		$tj_date['text']= M('wxuser_message')->where(array("ToUserName"=>$wecha['wxid'],"MsgType"=>"text"))->count();
		$tj_date['image']= M('wxuser_message')->where(array("ToUserName"=>$wecha['wxid'],"MsgType"=>"image"))->count();
		$tj_date['voice']= M('wxuser_message')->where(array("ToUserName"=>$wecha['wxid'],"MsgType"=>"voice"))->count();
		$tj_date['unsubscribe']= M('wxuser_message')->where(array("ToUserName"=>$wecha['wxid'],"MsgType"=>"unsubscribe"))->count("distinct CreateTime");
		$tj_date['subscribe']= M('wxuser_message')->where(array("ToUserName"=>$wecha['wxid'],"MsgType"=>"subscribe"))->count();
		$this->assign('tj_date',$tj_date);
		$this->assign('wecha',$wecha);
		$this->assign('token',session('token'));
		//
		$this->assign('userinfo',$userinfo);
		if(session('uid')==false){
			$this->redirect('Home/Index/login');
		}
	}
}