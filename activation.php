<title>

  Activation Successfull | Newspaper Theme Activation Code Genarator

  </title>

  <?php

include_once('header.php');

?>

<body>

	<div class="container">
 
<div class="row">

    <div class="col-md-2">
      
    </div>

    <div class="col-md-8">

      <div class="header">

      	Newspaper Theme <br/> Activation Code Genarator

      </div>

      <div class="alert-success p-3">

      		Activation Code Successfully Genarated

      	</div>

      <div class="border">


<br/>

     
<?php

$server_id = $_POST['server-id'];

$envato_purchase_code = "22f1d2c2-11b1-2222-a1cc-222cbfa1b11e";

$tagdiv_activation_key = md5($server_id . $envato_purchase_code);


echo <<<_END

<b>YOUR SERVER ID : </b>

<br/>

<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="$server_id"/>

<br/>

<b>ENVATO PURCHASE CODE</b>

<br/>

<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="$envato_purchase_code"/>

<br/>

<b>TAGDIV ACTIVATION KEY</b>

<br/>

<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="$tagdiv_activation_key"/>

_END;


?>

<br/>

<center>


<a href="/">

	<button type="button" class="btn btn-dark">Back To Home</button>

</a>

</center>

<br/>

<br/>

      </div>

    <div class="footer">

      	Powered By : <a href="https://www.facebook.com/mdeiasinkhanovi">

      		Md Eiasin Khan Ovi

      	</a>

      </div>

       </div>

    <div class="col-md-2">
      
    </div>

  </div>

</div>

</div>

	</body>