
<table cellpadding="1" cellspacing="1" border="1">
	<thead>
    	<tr>
        	<td>姓名</td>
            <td>EMAIL</td>
            <td>性別</td>
        	<td>留言內容</td>
            <td>留言時間</td>
            <td>IP</td>
            <td>刪除留言</td>
        </tr>
    </thead>
<?
	if($data['record']>0){
		foreach($data['data'] as $key => $value){
?>
	<tbody>
	<tr>
        	<td><?=$value['name']?></td>
            <td><?=$value['email']?></td>
            <td>
				<?
                	if($value['sex']==0){
						echo 女生;
					}else{
						echo 男生;	
					}
				?>
            </td>
        	<td><?=$value['content']?></td>
            <td><?=date('Y-m-d H:j:s',$value['create_time'])?></td>
            <td><?=$value['ip']?></td>
            <td><a href="?action=delete&id=<?$value['id']?>"></td>
    </tr>
    </tbody>
<?
}	
	}	
?>
</table>
<a href="index.php?action=add">新增</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 