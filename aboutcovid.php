<?php 
    include 'connexion.php';
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css2/style.css">
  </head>
  <body>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}



@media screen and (max-width: 600px) {
  #sidebar {
    visibility: hidden;
    clear: both;
    float: left;
    margin: 10px auto 5px 20px;
    width: 28%;
    display: none;
  }
}
</style>

		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images2/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu"  aria-expanded="false" >Home</a>
	            
	          </li>
	         
	          
	          <li>
              <a href="#"></a>
	          </li>
	          <li>
              <a href="#">Hotline</a>
	          </li>
			  <li>
              <a href="#">Hotspot Areas</a>
	          </li>
			  <li>
              <a href="#">About Covid19</a>
	          </li>
			  <li>
              <a href="#">Contact Tracing</a>
	          </li>
			  <li>
              <a href="#">Gov't Facilities</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register1.php">ADD PATIENT</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="aboutcovid.php">ABOUT COVID 19</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="database1.php">DATABASE</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
		
		<?php 
				 
				 $stmt = $pdo->query('SELECT * FROM Covid19');
				 $row_count = $stmt->rowCount();
				 
			     
			?>

												  
							
						<h2 class="mb-4">FACTS ABOUT COVID-19 ?</h2>	
							


<p>COVID-19 is a disease caused by a new strain of coronavirus. ‘CO’ stands for corona, 
‘VI’ for virus, and ‘D’ for disease. Formerly, this disease was referred to as ‘2019 novel 
coronavirus’ or ‘2019-nCoV.’ The COVID-19 virus is a new virus linked to the same family of 
viruses as Severe Acute Respiratory Syndrome (SARS) and some types of common cold. </p>


<h2 class="mb-4">What are the symptoms of COVID-19 ?</h2>	
							
 
<p>Symptoms can include fever, cough and shortness of breath. 
In more severe cases, infection can cause pneumonia or breathing
 difficulties. More rarely, the disease can be fatal. These symptoms
 are similar to the flu (influenza) or the common cold, which are a 
 lot more common than COVID-19. This is why testing is required to confirm if someone has COVID-19. </p>

<h2 class="mb-4">How does COVID-19 spread ?</h2>	

<p>The virus is transmitted through direct contact with 
respiratory droplets of an infected person (generated through coughing and sneezing). 
Individuals can also be infected from and touching surfaces contaminated with the virus 
and touching their face (e.g., eyes, nose, mouth). The COVID-19 virus may survive on surfaces 
for several hours, but simple disinfectants can kill it.</p>

<h2 class="mb-4"> What is the treatment for COVID-19 ?</h2>
 
 <p>
There is no currently available vaccine for COVID-19. However, many of the symptoms can be treated and getting early care from a healthcare provider can make the disease less dangerous. There are several clinical trials that are being conducted to evaluate potential therapeutics for COVID-19.

</p>
<h2 class="mb-4"> How can the spread of COVID-19 be slowed down or prevented? 
</h2>
<p>
As with other respiratory infections like the flu or the common cold, public health measures are critical to slow the spread of illnesses. Public health measures are everyday preventive actions that include:
✓ staying home when sick.
✓ covering mouth and nose with flexed elbow or tissue when coughing or sneezing. Dispose of used tissue immediately.
✓ washing hands often with soap and water.
✓ cleaning frequently touched surfaces and objects. As we learn more about COVID-19 public health officials may recommend additional actions. 
</p>



							
							
							
							
							
							

      </div>
		</div>
		
		
		<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


    <script src="js2/jquery.min.js"></script>
    <script src="js2/popper.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/main.js"></script>
  </body>
</html>