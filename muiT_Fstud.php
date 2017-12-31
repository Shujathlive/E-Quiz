<!doctype html>
<?php
session_start();
require_once 'dbconfig.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ELEARN | Quiz</title>
    <link href="//cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" />
    <link href="static/style.css" rel="stylesheet" type="text/css" />
	<link href="css/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-latest/js/mui.min.js"></script>
	<link href="static/style2.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <header class="mui-appbar mui--z1 mui--bg-danger">
      <div class="mui-container">
        <table width="100%">
          <tr class="mui--appbar-height">
            <td class="mui--text-title">ELEARN | Quiz</td>
      
          </tr>
        </table>
      </div>
    </header>
	
	<div id="content-wrapper" class="mui--text-center">
      <div class="mui--appbar-height"></div>
				<br><BR>
				<div class="mui-container">
  <form class="mui-form" method="POST" action="muiT_Feval.php">
		<table class="mui-table mui-table--bordered">
					  <thead>
						<tr>
						  <th>Question</th>
						
						  <th>Answer</th>
						</tr>
					  </thead>
					  <tbody>
						
		
	<?php
				$query = sprintf('SELECT questions,answers FROM quiz_it1000_c where quiztype="tf" ');
                $result = mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result)){
	$select='<tr>
						  <td>
	<div class="mui-text mui-col-xs-12 mui-col-md-12">
								
								'.$row[0].'
								
							</div>
						  </td>
						<td>
							  <div class="mui-select">
						<select name="answer[]">
						<option value="True">True</option>
						<option value="False">False</option>
						</select>
						</div>
						  </td>
						  
						</tr>';
						echo $select;
			}
?>			

					  </tbody>
					</table>
					<div class="mui-container mui--text-center">
			<button type="submit" name="submit" class="mui-btn mui-btn--primary mui-btn--raised">Submit</button>
		</div>
</form>
				</div>
			</div>
  </body>
</html>
