<?php $title = 'Welcome to ESC:wq...glad to have you'; include("templates/header.php"); ?>

<body>
    <center>
        <h1>Challenges</h1>
	</center>
    <div>
		<p>While you're here, try to solve some fun challenges!</p>
		<ul>
		  <li><a href="assets/fun_1000.zip">Download zip file here</a>
	  		<ul>
	  		  <li>Find flag.txt</li>
	  		</ul>
		  </li>
		  <li>Another challenge is hosted on port 8080</li>
	  		<ul>
	  		  <li>Connect via "nc esccolonwq.com 8080"</li>
			  <li>Answer the prompts until flag.txt gets printed</li>
	  		</ul>
		  <li>More to come :)</li>
		</ul>            
    </div>
    <p class="hidden">A little secret message!</p>
    <br>
</body>

<?php include("templates/footer.php"); ?>
