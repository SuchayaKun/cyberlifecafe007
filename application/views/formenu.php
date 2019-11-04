<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shop Registeration</title>

</head>

<body>

<div id="container">
	<h1 align="center">เพิ่มเมนู</h1>
</div>
	<div id="body" align="center">
		<form action="./data_submit" method="post">
		<table style="width:50%" border="0">
	</div>
	<tr>
		<td>รหัสเมนู </td>
		<td>
			<input type="text" name="menu_id" placeholder="รหัสเมนู ">
		</td>
	</tr>
	<tr>
		<td>ชื่อเมนู</td>
		<td>
			<input type="text" name="menu_name" placeholder="ชื่อเมนู">
		</td>
	</tr>
	
	<tr>
		<td>ประเภทเมนู</td>
		<td>
		<select name="mcategory_id">
			<option value="1">เครื่องดื่ม</option>
			<option value="2">อาหาร</option>
			<option value="3">ของหวาน</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>เลือกร้านค้า</td>
		<td>
		<select name="mshop_id">
			<option value="m&m">m&m</option>
			<option value="starbug">starbug</option>
			<option value="amazon">amazon</option>
		</select>
		</td>
	</tr>
	
	</table><br/>
	<center><input type="submit" value="เพิ่ม"><input type="reset" name="เคลียร์ข้อมูล"></center>
	</form>

<br/><br/><br/>
<a href="#" >แสดงรายการทั้งหมด </a>
	
<!-----------------------------------------------2------------------------------------------------------->
<br/><br/>
<form method="post" action="./show" class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th width="70px">รหัสเมนู</th>
							<th>ชื่อเมนู</th>
							<th>ประเภทเมนู</th>
							<th>เลือกร้านค้า</th>
							<th width="116">จัดการข้อมูล</th>
						</tr>
					</thead>

					<tbody> <!--------วนลูปเพื่อแสดงข้อมูล-----$items มาจาก manage_book.php----->
						<?php foreach($items as $row) : ?> 
							<tr>
								<td align="center"><?= $row->menu_id?></td>
								<td align="center"><?= $row->menu_name?></td>
								<td align="center"><?= $row->mcategory_id?></td>
								<td align="center"><?= $row->mshop_id?></td>
								<td align="center"> 
										<a href="./foredit?bookid=<?=$row->menu_id?>">
											แก้ไข  <!-------a.btn.btn-warning.btn-black.btn-sm  ทำปุ่ม------------->
											</a> |
										<a href="./fordelete?bookid=<?=$row->menu_id?>">
											ลบ <!-------a.btn.btn-warning.btn-black.btn-sm  ทำปุ่ม------------->
										</a>
										
									
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>

				
				</table>
			</form>

</body>
</html>