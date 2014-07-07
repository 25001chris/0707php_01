<?

	include('cfg/cfg.php');
	include('model/WADB.cls.php');
	$db=new WADB(db_address,db_name,db_username,db_password);
	
	if($_GET['action']!=''){
		switch($_GET['action']){
			case 'add':
			
				if(count($_POST)>0){
					
					$sql="insert into
							test
						(
							name,
							email,
							sex,
							content,
							create_time,
							ip
						)
						values
						(
							'".$_POST['name']."',
							'".$_POST['email']."',
							'".$_POST['sex']."',
							'".$_POST['content']."',
							'".time()."',
							'".$_SERVER['REMOTE_ADDR']."'
						
						)";
						$db->insertRecords($sql);
						print_r($_POST);
				}
				include('view/header.php');
				include('view/add.php');
				include('view/footer.php');
			break;
			case'delete':
				$sql="delete";
				$sql="delete*
					  from
					  test
					  where
					  id='".$GET[id]."';
					  data=$db->deleteRecords($sql);
				";
				include('view/header.php');
				include('view/show.php');
				include('view/footer.php');
			default:
				/*include('view/show.php');*/
				$sql="select*
					  from
					  test
					  order by
					  id desc;
					  data=$db->selectRecords($sql);
				";
				include('view/header.php');
				include('view/show.php');
				include('view/footer.php');
			}	
		}else{
				$sql="select*
					  from
					  test
					  order by
					  id desc;
					  data=$db->selectRecords($sql);
				";
				include('view/header.php');
				include('view/show.php');
				include('view/footer.php');
				
		
		}
		
?>