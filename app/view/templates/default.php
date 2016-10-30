<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Users</title>
    <meta name="description" content="User" />
    <meta http-equiv="content-language" content="de" />
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/default.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  </head>
  <body>
		<div class="page">  
  		<div class="header">
  		<?php if(isset($this->_["search"])){ ?>
  			<div class="leftside">
  		  	<div class="messagebox">Your results for "<?php echo $this->_["search"]; ?>"</div>
  		  	<a href="" class="backlink fa fa-arrow-left">&nbsp;&nbsp;back</a>
  		  </div>
  		<?php } ?>
  		
  			<div class="searchbox">
  				<form method="post">
  					<input type="text" name="search" id="search" placeholder="Search" />
  					<input type="submit" name="searchbutton" value="Search" />
  				</form>
  			</div>
  		</div>
  		<div class="content">
  			<table>
  				<thead>
  					<tr>
  						<th>Firstname <a href="?sort=firstname_down" title="down" class="fa fa-caret-down"></a><a href="?sort=firstname_up" title="up" class="fa fa-caret-up"></a></th>
  						<th>Lastname<a href="?sort=lastname_down" title="down" class="fa fa-caret-down"></a><a href="?sort=lastname_up" title="up" class="fa fa-caret-up"></a></th>
  						<th>Email<a href="?sort=email_down" title="down" class="fa fa-caret-down"></a><a href="?sort=email_up" title="up" class="fa fa-caret-up"></a></th>
  						<th>Role<a href="?sort=role_down" title="down" class="fa fa-caret-down"></a><a href="?sort=role_up" title="up" class="fa fa-caret-up"></a></th>
  						<th>Department<a href="?sort=department_down" title="down" class="fa fa-caret-down"></a><a href="?sort=department_up" title="up" class="fa fa-caret-up"></a></th>
  					</tr>
  				</thead>
  				<tbody>
  					<?php
  						foreach($this->_["table"] as $usr)
							{
			 					echo "<tr id='u_".$usr["id"]."' class='userline'>";
			 					echo "<td>".$usr["firstname"]."</td>";
			 					echo "<td>".$usr["lastname"]."</td>";
			 					echo "<td>".$usr["email"]."</td>";
			 					echo "<td>".$usr["role"]."</td>";
			 					echo "<td>".$usr["department"]."</td>";
			 					echo "</tr>";
							}
  					?>
  				
  				</tbody>
  			</table>
  		</div>
  		<div class="footer">
  			<div class="pagnation">
  				<?php
  					if($this->_["countUser"] > 10)
  					{
  						for($i=1;$i < $this->_["countUser"]/10+1;$i++)
  						{
  							if($i == $this->_["page"])
  								echo "<span>".$i."</span>";
  							else
  								echo "<a href='?sort=".$_GET["sort"]."&page=".$i."'>".$i."</a>";				
  						}
  					}
  				?>
  			</div>
  		</div>
  		<div id="bg_layer"></div>
  		<div id="layer">
    		<div class="title">
    			<span>Detail Information</span>
    			<div id="closebutton" class="close"><img src="img/close.png" alt="close"/></div>
    		</div>
    		<div class="text">
    			<dl>
    				<dt>Name</dt>
    				<dd id="detail_name"></dd>
    				<dt>Email</dt>
    				<dd id="detail_email"></dd>
    				<dt>Role</dt>
    				<dd id="detail_role"></dd>
    				<dt>Department</dt>
    				<dd id="detail_department"></dd>
    				<dt>Age</dt>
    				<dd id="detail_age"></dd>
    				<dt>Street</dt>
    				<dd id="detail_street"></dd>
    				<dt>Town</dt>
    				<dd id="detail_town"></dd>
    			</dl>
    		</div>
  		</div>	
  	</div>
  </body>
</html>