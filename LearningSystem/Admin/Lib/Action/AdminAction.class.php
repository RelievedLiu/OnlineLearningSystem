<?php
class AdminAction extends Action{
		public function modify()
		{
			$this->display();
		}

		public function do_modify()
		{
			$mpass = $_POST['mpass'];
			$newpass = $_POST['newpass'];
			$renewpass = $_POST['renewpass'];
			
			$admin  = M('admin');
			$sql = "select admin_pwd from tp_admin";
			$arr = $admin->query($sql);
			$pass = $arr[0]['admin_pwd'];
			
			if($mpass == $pass)
			{
					if($newpass == $renewpass)
					{
						$arr = array(
								'admin_pwd'=>$newpass,
						);
						$count= $admin->where("admin_pwd ='$mpass'")->save($arr);
						
						if($count>0)
						{
							$this->success('修改成功');
						}
						else
						{
							$this->error('修改失败');
						} 						
					}
					else{
						$this->error('检查两次密码输入是否一致');
					}
			}
			else{
				$this->error('原密码输入错误，请重新输入');
			}
		}
}