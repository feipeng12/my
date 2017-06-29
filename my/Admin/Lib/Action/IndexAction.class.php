<?php
class IndexAction extends Action{
    public function index(){
        if(isset($_POST['my2_admin'])){
            if(isset($_POST['name']) && isset($_POST['pwd'])){
                $db = M();							// 实例化模型类,参数数据表名称，不包含前缀
                $select = $db->query("select * from think_my2_admin where name='".$_POST['name']."' and pwd='".$_POST['pwd']."'");
                if($select){
                    $_SESSION['admin']=$_POST['name'];
                    $this->redirect('Index/adminIndex','', 2,'用户 '.$_POST['name'].' 登录成功！');		//页面重定向
                }else{
                    $this->redirect('Index/index','', 2,'用户名或者密码不正确！');		//页面重定向
                }
            }else{
                $this->redirect('Index/index','', 2,'用户名、密码不能为空！');		//页面重定向
            }
        }
        $this->display();
    }
    public function validatorcode(){
        header('content-type:image/png');			//定义标题png格式图像 浏览器可以识别的数据流
        $im = imagecreate(44, 22);					//定义画布
        imagefill($im, 0, 0, imagecolorallocate($im, 250, 250, 250));		//区域填充 画布背景色
        $validatorCode = $_GET['code'];				//获取提交的值
        imagestring($im, rand(3, 5), 10, 3, substr($validatorCode, 0, 1), imagecolorallocate($im, 0, rand(0, 255), rand(0, 255)));
        imagestring($im, rand(3, 5), 25, 6, substr($validatorCode, 1, 1), imagecolorallocate($im, rand(0, 255), 0, rand(0, 255)));
        imagestring($im, rand(3, 5), 36, 9, substr($validatorCode, 2, 1), imagecolorallocate($im, rand(0, 255), rand(0, 255), 0));
        imagepng($im);								//生成PNG图像
        imagedestroy();								//销毁图像
    }
    public function update() {
        $db=M('my1');
        $select=$db->where('id='.$_GET['id'])->select();
        $this->assign('select',$select);
        $this->display('update');
        if (isset($_POST['id'])){
            $data['name']=$_POST['name'];
            $data['pwd']=$_POST['pwd'];
            $data['address']=$_POST['address'];
            $result = $db->where('id='.$_POST['id'])->save($data);
            if ($result){
                $this->redirect('Index/adminIndex','',2,'数据更新成功');
            }
        }
    }
    public function delete(){
        $db=M('User');
        $result=$db->where('id='.$_GET['id'])->delete();
        if ($result){
            $this->redirect('Index/adminIndex','',2,'数据删除成功');
        }
    }
	public function logout(){
        session_destroy();
        $this->assign('hint','管理员退出');
        $this->assign('url','__URL__/');
        $this->display('index');
    }
}
?>