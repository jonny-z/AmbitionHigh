<?php
namespace app\index\controller;
use think\Controller;
use think\Session;
class Index extends Controller{
    public function index() {
        Session::start();
        $uname = Session::get('uname');
        if(!$uname) {
            $this->redirect('index/login/index');
            return;
        }
        $this->assign('user', $uname);
        return $this->fetch();
    }
}
