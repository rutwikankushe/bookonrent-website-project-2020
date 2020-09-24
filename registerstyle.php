*{
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
}
body{
	font-size: 20px;
	overflow: hidden;
	color: #434343;
	font-family: 'Raleway', sans-serif;
}
header{
	background-image: url("bgwebcopy.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	height: 100vh;
}

.clearfix:after{
	content: ".";
	visibility: hidden;
	display: block;
	height: 0px;
	clear:both;
}
.row{
	max-width: 1180px;
	margin: 0 auto;
}

.form-rem{
	font-size: 15px;
	line-height: 10px;
	margin-left: 60px;
}
.logo{
	height: 120px;
	width: auto;
	float: left;
	margin-top: 30px;
}
.main-nav{
	float: right;
	margin-top: 50px; 
}
.main-nav li{
	display: inline-block;
	list-style: none;
	margin-left: 40px;/*space between nav bars*/
}
.main-nav li a{
	padding: 5px 0;
	color: #434343;
	text-decoration: none;
	font-size: 100%;
	font-weight: 500;
}
.main-nav li a:hover{
	border-bottom: 2px solid #57c7da;
}
.main-content{
	width: 1180px;
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%,-50%);	
}
div.main-content{
	line-height: 60px;
}
.next-content{
	width: 1180px;
	position: absolute;
	top: 63%;
	left: 50%;
	transform: translate(-50%,-50%);
	font-size: 18px;

}
.content-three{
	width: 1180px;
	position: absolute;
	top: 83%;
	left: 50%;
	transform: translate(-50%,-50%);
	font-size: 30px;
	font-weight: 700;

}
.bigfont{
	font-size: 75px;
}
h1{
	color:#072d41;
	font-size: 360%;
	font-weight: 700;

}
.btn1{
	display: inline-block;
	padding: 3px 15px;
	margin-left: 40px;
	text-decoration: none;
	border-radius: 5px;
	transition: background-color 0.2s, border 0.2s , color 0.2;
}
.btn2{
	display: inline-block;
	padding: 3px 15px;
	margin-left: 20px;
	text-decoration: none;
	border-radius: 5px;
	transition: background-color 0.2s, border 0.2s , color 0.2;

}
.btn-nav{
	background-color: transparent;
	color: #434343 ;
	margin-right: 15px;
	border: 2px solid #57c7da;
    font-family: 'Raleway', sans-serif;

}
.btn-nav:hover{
	background-color: white;
}
.btn-full{
	background-color: #57c7da;
	color: white;
	margin-right: 15px;
	border: 2px solid #57c7da;
	font-family: 'Raleway', sans-serif;

}
.btn-full:hover{
	background-color: #003f61;
}
.colorchange{
	animation: colorchangebook 1s infinite;
}

@keyframes colorchangebook{
	0%{color: #57c7da}
	25%{color: #003f61}
	50%{color: #57c7da}
	100%{color: #003f61}
}

.login{  
        width: 400px;    
        position: absolute;
	    top: 55%;
	    left: 70%;
	    transform: translate(-50%,-50%); 
        margin: 20 0 0 450px;  
        padding: 50px;  
        background: #ffffff;  
        border-radius: 15px ;
        box-shadow: 0 0 10px 0.1px #f0f0f0;  
          
}  
label{  
    color: #292929;  
    font-size: 17px;

}
.reder-login{
	font-size: 20px;
	text-decoration: auto;
	margin-left: 25%;
	margin-bottom: 10%;
}  
#Email{  
    width: 300px;  
    height: 30px;
    text-decoration: none;
   font-family: 'Raleway', sans-serif;     
    border-radius: 20px;
    border: none;  
    padding-left: 8px;
    box-shadow:  0 0 10px 0.1px #f0f0f0;
    outline: none;    

}
#Pass-confirm {  
    width: 300px;  
    height: 30px;
    text-decoration: none;
   font-family: 'Raleway', sans-serif;     
    border-radius: 20px;
    border: none;  
    padding-left: 8px;
    box-shadow:  0 0 10px 0.1px #f0f0f0;
    outline: none;            
}  
#Pass{  
    width: 300px;  
    height: 30px;
    border: none;
    font-family: 'Raleway', sans-serif;    
    border-radius: 20px;  
    padding-left: 8px;
    box-shadow:  0 0 10px 0.1px #f0f0f0;
    outline: none;    
      
}  
#reg{  
    width: 300px;  
    height: 30px; 
    border: none;  
    border-radius: 20px;  
    padding-left: 8px;  
    color: white;
    font-weight: 600;
    font-family: 'Raleway', sans-serif; 
    outline: none;    
      

}
.reg{
	background-color: #57c7da;

}
.reg:hover{
	background-color: #003f61;
}
.from-log{
    font-size: 10px;
	margin-left: 20px;
}  
.container-login{
	font-size: 15px;
	margin-left: 40px;
}



.mobile-icon{
		display: none;}
@media only screen and (max-width:1180px){
	.main-content{
		width: 100%;
		padding:0 2%;
		} 
	}
@media only screen and (max-width: 998px){
	h1{
		font-size: 200%;
	}
}
@media only screen and (max-width: 768px){
	h1{
		font-size: 180%;
	}
	.main-nav{display: none;}

	.mobile-icon{
		display: inline-block;
		color: #434343;
		float: right;
		margin-top: 30px;
		margin-right: 20px;
	}
	.main-nav{
		float: left;
	}
	.main-nav li{
		
		display: block;
		margin-top: 10px;
	}


}
@media only screen and (max-width:486px){
	.btn-nav{
		margin-bottom: 20px;
	}
