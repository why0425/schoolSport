<?php
class EnterControl extends Control{
	public function admin_person(){
		$project=new ProjectModel();
		$option_id=$project->selectAll();
		$this->smarty->assign('rows',$option_id);
		$grade=new GradeModel();
		$grade_id=$grade->selectAll();
		$class=new ClassModel();
		$class_id=$class->selectAll();
		$this->smarty->assign('grade_id',$grade_id);
		$this->smarty->assign('class_id',$class_id);
		$this->smarty->display('enter.html');
	}
	public function getName(){
		$name=$_GET['name'];
		$enter=new EnterModel();
		$rows=$enter->getName($name);
		echo "<table border='1' style='width:70%;'>";
		echo "<tr>";
		echo "<th>编号</th>";
		echo "<th>姓名</th>";
		echo "<th>年级</th>";
		echo "<th>班级</th>";
		echo "<th>参加项目</th>";
		echo "<th>其他操作</th>";
		echo "</tr>";
		foreach($rows as $k=>$row){
			echo "<tr>";
			$bh=$k+1;
			echo "<td>".$bh."</td>";
			echo "<td>".$row['stu_name']."</td>";
			echo "<td>".$row['grade_name']."</td>";
			echo "<td>".$row['class_name']."</td>";
			echo "<td>".$row['pro_name']."</td>";
			echo "<td><a href='index.php?group=Admin&module=Student&act=search_stu&stu_id=$row[stu_id]&pro_id=$row[pro_id]'>查看详细信息</a> |
					<a href='index.php?group=Admin&module=Student&act=delete&stu_id=$row[stu_id]&pro_id=$row[pro_id]'>取消本次报名</a>
				</td>";					
			echo "</tr>";
		}
		echo "</table>";	
	}
	//通过性别查询报名情况
	public function getSex(){
		$sex=$_GET['sex'];
		$enter=new EnterModel();
		$rows=$enter->getSex($sex);
		echo "<table border='1' style='width:70%;'>";
		echo "<tr>";
		echo "<th>编号</th>";
		echo "<th>姓名</th>";
		echo "<th>年级</th>";
		echo "<th>班级</th>";
		echo "<th>参加项目</th>";
		echo "<th>其他操作</th>";
		echo "</tr>";
		foreach($rows as $k=>$row){
			echo "<tr>";
			$bh=$k+1;
			echo "<td>".$bh."</td>";
			echo "<td>".$row['stu_name']."</td>";
			echo "<td>".$row['grade_name']."</td>";
			echo "<td>".$row['class_name']."</td>";
			echo "<td>".$row['pro_name']."</td>";
			echo "<td><a href='index.php?group=Admin&module=Student&act=search_stu&stu_id=$row[stu_id]&pro_id=$row[pro_id]'>查看详细信息</a> |
					<a href='index.php?group=Admin&module=Student&act=delete&stu_id=$row[stu_id]&pro_id=$row[pro_id]'>取消本次报名</a>
				</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	//通过参加项目
	public function getProject(){
		$pro_id=$_GET['pro_id']+1;
		$enter=new EnterModel();
		$rows=$enter->getProject($pro_id);
		echo "<table border='1' style='width:70%;'>";
		echo "<tr>";
		echo "<th>编号</th>";
		echo "<th>姓名</th>";
		echo "<th>年级</th>";
		echo "<th>班级</th>";
		echo "<th>参加项目</th>";
		echo "<th>其他操作</th>";
		echo "</tr>";
		foreach($rows as $k=>$row){
			echo "<tr>";
			$bh=$k+1;
			echo "<td>".$bh."</td>";
			echo "<td>".$row['stu_name']."</td>";
			echo "<td>".$row['grade_name']."</td>";
			echo "<td>".$row['class_name']."</td>";
			echo "<td>".$row['pro_name']."</td>";
			echo "<td><a href='index.php?group=Admin&module=Student&act=search_stu&stu_id=$row[stu_id]&pro_id=$row[pro_id]'>查看详细信息</a> |
					<a href='index.php?group=Admin&module=Student&act=delete&stu_id=$row[stu_id]&pro_id=$row[pro_id]'>取消本次报名</a>
				</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	//通过年级
	public function getGrade(){
		$grade_id=$_GET['grade_id']+1;
		$enter=new EnterModel();
		$rows=$enter->getGrade($grade_id);
		echo "<table border='1' style='width:70%;'>";
		echo "<tr>";
		echo "<th>编号</th>";
		echo "<th>姓名</th>";
		echo "<th>年级</th>";
		echo "<th>班级</th>";
		echo "<th>参加项目</th>";
		echo "<th>其他操作</th>";
		echo "</tr>";
		foreach($rows as $k=>$row){
			echo "<tr>";
			$bh=$k+1;
			echo "<td>".$bh."</td>";
			echo "<td>".$row['stu_name']."</td>";
			echo "<td>".$row['grade_name']."</td>";
			echo "<td>".$row['class_name']."</td>";
			echo "<td>".$row['pro_name']."</td>";
			echo "<td><a href='index.php?group=Admin&module=Student&act=search_stu&stu_id=$row[stu_id]&pro_id=$row[pro_id]'>查看详细信息</a> |
					<a href='index.php?group=Admin&module=Student&act=delete&stu_id=$row[stu_id]&pro_id=$row[pro_id]'>取消本次报名</a>
				</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	//通过班级
	public function getClass(){
		$class_id=$_GET['class_id']+1;
		$enter=new EnterModel();
		$rows=$enter->getClass($class_id);
		echo "<table border='1' style='width:70%;'>";
		echo "<tr>";
		echo "<th>编号</th>";
		echo "<th>姓名</th>";
		echo "<th>年级</th>";
		echo "<th>班级</th>";
		echo "<th>参加项目</th>";
		echo "<th>其他操作</th>";
		echo "</tr>";
		foreach($rows as $k=>$row){
			echo "<tr>";
			$bh=$k+1;
			echo "<td>".$bh."</td>";
			echo "<td>".$row['stu_name']."</td>";
			echo "<td>".$row['grade_name']."</td>";
			echo "<td>".$row['class_name']."</td>";
			echo "<td>".$row['pro_name']."</td>";
			echo "<td><a href='index.php?group=Admin&module=Student&act=search_stu&stu_id=$row[stu_id]&pro_id=$row[pro_id]'>查看详细信息</a> |
					<a href='index.php?group=Admin&module=Student&act=delete&stu_id=$row[stu_id]&pro_id=$row[pro_id]'>取消本次报名</a>
				</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	
}