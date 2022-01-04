<?php 

session_start();

if(isset ($_SESSION['first'])) {
	header("location:home/admin.php");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - login or sing up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsivde.css">

   <link rel="shortcut icon" href="facebook logo .ico" type="image/x-icon">

   <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
   <script src="java.js"></script>

  

</head>
<body>
 

    <header class="header-area">
        <div class="middle-area">
       <div class="logo-area">
           <a href="index.php"><img src="download (1).png" alt="facebook"></a>
       </div>
       <form action="echo/login.php" method="post" >
       <div class="login-area">
        <div class="first-login">
           <label for="text" id="gmail">Email or phone</label>

           <input name="lname" type="text" id="text"  required>
        </div>
        <div class="secend-login">
            <label  for="pass" id="password">password</label>
        
           <input  name="lpass" type="password"  id="nput" placeholder="inter your password" required > 

           <input type="checkbox"  onclick="myfunction()">

           <script>
            function myfunction() {
          var x = document.getElementById("nput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>
     
           <a href="">Forgotten account</a>
        </div>
        <div class="third-login">
            
            <input type="submit" value="log in"  required>
         </div>  
         
       </div>
     
    </form>
    </div>
    </header>
    <!-- singup area start up hare -->

    <div class="error">

<?php
if(isset($_GET['result'])){

    if($_GET['result'] =='pass_not_same'){

        echo '<h2 <h2 style:="" "text-aling="center;" background-color:red;="" color:#fff"="" style="
        text-align: center;
        background-color:black;
        color: #9c88ff;
        margin: 0;
        padding: 10px;
    "</h2>Your passwoed not same</h2>' ;

    }  if($_GET['result'] =='alredy_account'){

        echo '<h2 <h2 style:="" "text-aling="center;" background-color:red;="" color:#fff"="" style="
        text-align: center;
        background-color: black;
        color: #9c88ff;
        margin: 0;
        padding: 10px;
    "</h2>Alredy you have a account plz login in!</h2>' ;
    }   if($_GET['result'] =='account_sucessfull'){

        echo '<h2 style:="" "text-aling="center;" background-color:green;="" color:#fff"="" style="
        text-align: center;
        background-color: green;
        color: #fff;
        margin: 0;
        padding: 10px;
    " <="" h2="">Account create successful</h2>' ;
    }
    if($_GET['result'] =='email_not'){

        echo '<h2 <h2 style:="" "text-aling="center;" background-color:yellow;="" color:#fff"="" style="
        text-align: center;
        background-color: yellow;
        color: #black;
        margin: 0;
        padding: 10px;
    "</h2>Your email now same</h2>' ;

    }  

    if($_GET['result'] =='email_not_same'){

        echo '<h2 <h2 style:="" "text-aling="center;" background-color:yellow;="" color:#fff"="" style="
        text-align: center;
        background-color: red;
        color: #black;
        margin: 0;
        padding: 10px;
    "</h2>Icorrect your email or passwor try again!...d</h2>' ;

    }  

    
}
//echo $_GET['result'];

?>
  </div>  
    <section class="singup-area">
        <div class="middle-area2">
            <div class="left-area">
                <p>Facebook helps you connect and share with the
                     people with your life</p>
                <img src="73232562-flat-social-media-and-network-business-people-icons-composing-a-world-map-removebg-preview (1).png" alt="Facebool">
                
            </div>
            <div class="right-area">
                <h2>Create your account</h2>
                <p>It's free and always will you</p>

            <!-- form er modhea 'get' mathod thakle hack hoi 
            real  "post" -->


                <form action="http://localhost/facebook/echo/registration_connect.php" method="post" enctype="multipart/form-data">
                    <div class="all-input" >
                        <div class="username">
                            <input name="fname" type="text" placeholder="First name " required>
                            <input name="tsure" type="text" placeholder="surname " required>
                        </div>
                        <div class="more-input">
                            <input name="mobile" type="text" placeholder="Mobile number or email adderss  " required>

                            <input name="remobile" type="text" placeholder="Re-inter your mobile number or email adderss" required>

                            <input  name="newpass" type="password" placeholder="New password" 
                             id="myInput" required>

                             <input  name="newpass_check" type="password" placeholder="Re-inter your password" 
                             id="myInput" required>
                             <input class="cbox" type="checkbox"  onclick="myFunction()"><p >show password</p> 
                               
                          


<script>

    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                           
                         
                    
                        </div>
                    </div>

                 <div class="birth-day">
                     <h2>Birthday</h2>

                   
                        <div class="bbb-option">
                            <select id="day" name="day">
                                <option>day</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
        
                            <select id="month" name="month">
                                <option>month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                           <select id="year" name="year">
                            <option>year</option>
                            <option value="1940">1940</option>
                            <option value="1941">1941</option>
                            <option value="1942">1942</option>
                            <option value="1943">1943</option>
                            <option value="1944">1944</option>
                            <option value="1945">1945</option>
                            <option value="1946">1946</option>
                            <option value="1947">1947</option>
                            <option value="1948">1948</option>
                            <option value="1949">1949</option>
                            <option value="1950">1950</option>
                            <option value="1951">1951</option>
                            <option value="1952">1952</option>
                            <option value="1953">1953</option>
                            <option value="1954">1954</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
        
                        <style>
                            .upload #pic{
                                font-size: 18px;
                                
                            }
                            .upload{
                                padding: 15px 3px;
                            }
                        </style>
                        <div class="upload">
                            <label  for="pic" id="pic">Upload your profile picture</label>
                            <input name="ppp" type="file" id="pict"   />
                            <!-- required -->
                        </div>          
                           </div>
                   
                  
   
                    <div class="bbb-link">
                        <a href="">Why do I need to provide my date of birthday</a>
                    </div>
  
                 </div>  




                <div class="male-female">
                    
                    <input value="female" type="radio" id="female" name="same"  required>
                    <label for="female">female</label>
    
                    
                    <input value="male" type="radio" id="male" name="same"  required>
                    <label for="male">male</label>
                </div>   

                <div class="ppp">
                    <p>By clicking create an
                        account, you agree to our <a href="">Teams</a>  and
                        
                        confirm that you have readour <a href=""> Data and Policy</a>, 
                        
                       including our cookie <a href="">use</a> policy.
                      
                       You may recrive
                        SMS message notification form
                       Facebool and can opt out at any time. 
                   </p>
                </div>
                  <div class="last-input">
                    <input name="ppp" type="submit" value="create an account"  required>
                  </div>
                
                </form>
                <div class="last-a"> <h4>
                    <a href=""> Create a Page </a> Create a Page for a celebrity, band or business.
                 </h4></div>
               
              
        </div>
        
        </div>
    </section>
    <div class="fotter">
        <div class="ff">
            <div class="padding"></div>
            <ul class="bangla">
                <tr><a href="">English(uk)</a></tr>
                <tr><a href="">বাংলা</a></tr>
                <tr><a href="">chiness</a></tr>
                <tr><a href="">japan</a></tr>
                <tr><a href="">england</a></tr>
                <tr><a href="">india</a></tr>
                <tr><a href="">japan</a></tr>
                <tr><a href="">usa</a></tr>
                <tr><a href="">uk</a></tr>
                <tr><a href="">ashia</a></tr>
                <tr><a href="">brazil</a></tr>
                
            </ul>
        </div>
        <div class="epadding"></div>
        <div class="tt">
      <ul class="naiche">
        <tr><a href="">atsls</a></tr>
        <tr><a href="">dfsasd</a></tr>
        <tr><a href="">dfddsf</a></tr>
        <tr><a href="">folaa</a></tr>
        <tr><a href="">dsfa</a></tr>
        <tr><a href="">folaa</a></tr>
        <tr><a href="">folafsdfda</a></tr>
        <tr><a href="">ffsdfdsdf</a></tr>
        <tr><a href="">folaa</a></tr>
        <tr><a href="">fdsfd</a></tr>
        <tr><a href="">fodf</a></tr>
        <tr><a href="">f</a></tr>
        <tr><a href="">f</a></tr>
        <tr><a href="">fofsdf</a></tr>
        <tr><a href="">fodfsa</a></tr>
        <tr><a href="">fo;la;;a</a></tr>
        <tr><a href="">fo;la;;a</a></tr>

        <tr><a href="">English(uk)</a></tr>
        <tr><a href="">বাংলা</a></tr>
        <tr><a href="">chiness</a></tr>
        <tr><a href="">japan</a></tr>
        <tr><a href="">england</a></tr>
        <tr><a href="">india</a></tr>
     </ul>
 </div>
     </div>    
    


     <style>
         .vheck{
             overflow: auto;
         }
     </style>
<div class="vheck" >
   


<script>

  
    </script>
</div>
    
</body>
</html>