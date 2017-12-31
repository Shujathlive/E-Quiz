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
<link rel="stylesheet" href="prettify.css" />
<link rel="stylesheet" href="static/mui.min.css">
<script src="prettify.js"></script>

<script>
window.onload = (function(){ prettyPrint(); });
</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$("#origin").sortable({connectWith: "#drop"});

$("#drop").sortable({connectWith: "#origin"});
});//]]> 
</script>
<script src="http://w3schools.com/lib/w3.js"></script>
    <link href="//cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" />
    <link href="static/style.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-latest/js/mui.min.js"></script>
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<style>
.card-example {
  position: relative;
  background-color: #fff;
}
.mui-appbar{
	min-height:30px;
}
.mui--appbar-height{
	height:30px;
}

</style>
<script>
myShow = w3.slideshow(".nature", 0);
</script>
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
	 
	<div id="content-wrapper"  class="mui--text-left">
      <div class="mui--appbar-height"></div>
		<div class="mui-container">
			
			<table class="mui-table">
  <thead>
    <tr>
	<br><br>
      <th class="mui-col-xs-6 mui-col-md-6">Question</th>
      <th class="mui-col-xs-6 mui-col-md-6">Answer</th>
    </tr>
  </thead>
   <tbody>
    <tr>
	
      <td class="mui-col-xs-6 mui-col-md-6">
		Rearrange the codes accordingly to compile the following code:

<pre class="prettyprint" >
<!-- language: lang-c -->
	 
	<?php
	$query = sprintf("SELECT questions,options,answers FROM quiz_table_it1001 where quiztype='cmcq'");
                $result = mysqli_query($conn,$query);
	$query1 = sprintf("SELECT code FROM quiz_table_it1001 where quiztype='cmcq'");
                $result1 = mysqli_query($conn,$query1);
				$count='0';
				$rows=mysqli_fetch_array($result1);
				$code=str_replace("<","&lt;",$rows[0]);
				echo $code;
				while($row=mysqli_fetch_array($result)){
					++$count;
					$op=str_replace("<","&lt;",$row[1]);
				$op=explode('~`',$op);
	?>
	
	  </pre>	  

	  

	  </td>
	  <form class="mui-form" method="POST" action="quiz_MCQ_eval.php">
	  
	  <?php
	  $select='
      <td class="mui-col-xs-6 mui-col-md-6">
	  	<div class="mui-card">
				<ul class="mui-table-view">
					<li class="mui-table-view-cell mui-collapse">
						<a class="mui-navigate-right" href="#">Question'.$count;
						
		 $select.='</a>
						<div class="mui-collapse-content">
							<div class="answer1">
		<h3>'.$row[0];
		$select.='</h3>
		    <input type="radio"
             name="op'.$count.'"
             value="'.$op[0].'">'.$op[0].'
      <br>
      <input type="radio"
             name="op'.$count.'"
             value="'.$op[1].'">'.$op[1].'
      <br>
      <input type="radio"
             name="op'.$count.'"
             value="'.$op[2].'">'.$op[2].'
      <br>
      <input type="radio"
             name="op'.$count.'"
             value="'.$op[3].'">'.$op[3].'
      <br>
   </div>
	</div>
		</li>
  	</ul>
		</div>
		</div>
		
  </div>';
$_SESSION['count'] = $count;  
  echo $select;
				}
  ?>

<div class="mui-container mui--text-center">
			<button type="submit" name="submit" class="mui-btn mui-btn--primary mui-btn--raised">Submit</button>
		</div>
	</td>
	
	</form>
		</div>


    </tr>
  </tbody>
</table>


		</div>


	
<script src="static/mui.min.js"></script>
		<script>
			mui.init({
				swipeBack:true //启用右滑关闭功能
			});
		</script>
	</body>
</html>
