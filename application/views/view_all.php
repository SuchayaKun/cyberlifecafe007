<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<body>


<table>
  <tr>
    <th>รหัส</th>
    <th>ชื่อเมนู</th>
    <th>ประเภทเมนู</th>
    <th>ร้านค้า</th>
  </tr>

  <?php 
    foreach($data->result() as $row){
        ?>
    <tr >
        <td><?php echo $row->menu_id ?></td>
        <td><?php echo $row->menu_name ?></td>
        <td><?php echo $row->mcategory_id?></td>
        <td><?php echo $row->mshop_id ?></td>
    
    </tr>
  <?php } ?>
 
</body>