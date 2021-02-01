<html>
<head>
    <link rel="stylesheet" href="../style/Home.css">
<title> English school </title>
</head>
<body>


	<div class="head">
		<h3> English school... </h3>
		
		

			<ul>
				<li style=background-color:#00cc00;><a href="Home.html">Home</a></li>
				<li style=background-color:pink><a href="ِAbout Us.html">About Us</a></li>
				<li style=background-color:orange><a href="Events.html">Events</a></li>
				<li style=background-color:purple><a href="History.html">History</a></li>
				<li style=background-color:yellow><a href="Contact.html">Contact</a></li>
			</ul>
		
		<table class="login">
            <form  method="get" action="Home.html">
                 <tr>
					<td>search</td>
					<td><input type="text" name="Ecode"><br></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td ></td>
				</tr>
				<tr>
                                    <td colspan="2" ><a href="Home.html"><input type="submit" name="submit" value="LogOut"></td></a>
                
				</tr>
            </form>
           
        </table>
        <div class="center">
        <div class="left">
        <div class="img">
        
        </div>
     <div class="Ainfo">
        <table border="2">
            
                 <tr>
					<td colspan="2">Admin info</td>
					
				</tr>
				<tr>
					<td>Name</td>
					<td>Ahmed</td>
				</tr>
				<tr>
					<td>Age</td>
					<td>25</td>
				</tr>
            <tr>
					<td>ID</td>
					<td>5</td>
				</tr>
            <tr>
					<td>Date Of Birth</td>
					<td></td>
				</tr>
            <tr>
					<td>Gender</td>
					<td>male</td>
				</tr>
            
        </table>
        
        </div>
    </div>
            <div class="right">
        
	    <div class="adminfunc1">
                <h1><pre>     Add</pre></h1>
              <br> 
         &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp;   <select onchange="window.location.href=this.value">
            <option value=""></option>
  <option value="addst.php">student</option>
  <option value="addt.php">teacher</option>
  <option value="addr.php">resource</option>
  <option value="adda.php">activity</option>
            
                        
</select>
            <br>
                         <br>
            <br> <br> <br>

            
		  
    </div>
      <div class="adminfunc2">
                <h1><pre>     Update  </pre></h1>
                  <form action="delet.php" method="post">
        <table width="20" border="0" cellspacing="1" cellpadding="2">
            <tr>
                <td width="10">id</td>
<td>
    <input name="f1" type="text">
</td>
</tr>
           <tr>
               <td width="10">type</td>
<td>
    <select name="f2">
        <option value="student">manager</option>
        <option value="student">student</option>
        <option value="student">parent</option>
        <option value="student">teacher</option>
        <option value="student">resources</option>
    </select>
        
</td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="search">
</td>
</tr>
        </table>
        
    </form>
		  
    </div>
    <div class="adminfunc3">
                <h1><pre>     Delete  </pre></h1>
             <form action="delet.php" method="post">
        <table width="20" border="0" cellspacing="1" cellpadding="2">
            <tr>
                <td width="10">id</td>
<td>
    <input name="f1" type="text">
</td>
</tr>
           <tr>
               <td width="10">type</td>
<td>
    <select name="f2">
        <option value="student">manager</option>
        <option value="student">student</option>
        <option value="student">parent</option>
        <option value="student">teacher</option>
        <option value="student">resources</option>
    </select>
        
</td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="delet">
</td>
</tr>
        </table>
        
    </form>
		 
    </div>
     <div class="adminfunc4">
         <form method="post" action="viewst.php">
<button type="submit"><b>View Student</b></button>
         <hr/>
         </form>
         <form method="get" action="uploadtt.html">
<button type="submit"><b>Upload Timetable</b></button>
         </form>
         <hr/>
                  <form method="get" action="setn.html">
<button type="submit"><b>Set News</b></button>         
         </form>
    </div>
</div>
            
            </div>
        <div class="bottom">
		<div class="bcenter">
		<div class="first">
         </div>		
		
		<div class="second">
		<p> welcome in our school..!!  <p/>
         </div>		
		 <div class="third">
         </div>		
		</div>
		 </div>
     
		


</body>
</html>