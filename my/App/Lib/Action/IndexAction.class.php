<?php
header("Content-Type:text/html; charset=utf-8");	//设置页面编码格式
class IndexAction extends Action{
    public function index(){
        if(isset($_POST['key'])){				   //判断查询的关键字是否存在
            $key=$_POST['key'];
        }else if(isset($_GET['key'])){
            $key=$_GET['key'];
        }
        $db = M('my1');								// 实例化模型类,参数数据表名称，不包含前缀
        import("ORG.Util.Page"); 						// 导入分页类
        if($key!=''){
            $map="title like('%".$key."%')";
            $list = $db->where($map)->order('id desc')->page($_GET['p'].',2')->select();
            $this->assign('select',$list); 				// 赋值数据集
            $count = $db->where($map)->count(); 		// 查询满足要求的总记录数
            $Page = new Page($count,2,'key='.$key); 	// 实例化分页类 传入总记录数、每页显示的记录数和查询的关键字
            $show = $Page->show(); 						// 分页显示输出
            $this->assign('page',$show); 				// 赋值分页输出
        }else{
            $count = $db->count(); 						// 统计总记录数
            $Page = new Page($count,5); 				// 实例化分页类 传入总记录数和每页显示的记录数
            $show = $Page->show(); 						// 分页显示输出
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $db->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('select',$list); 				// 赋值数据集
            $this->assign('page',$show); 				// 赋值分页输出
        }
        $this->display();
    }
    public function findName() {
        $db = new Model('my1');
        $id=$_GET['id'];
        $select = $db->query("select * from think_my1 where id=$id");
        $this->assign('select',$select);
        $this->display();
    }
}
?>