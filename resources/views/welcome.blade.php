<!DOCTYPE html>
<html>
<head>
<title>3DOGS</title>
<link href="{{asset('css/style_home.css')}}" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script> 
</head>

<script>
    function changeSearch()
    {
        document.getElementById("searchinfo").value = "";
    }
</script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<script>
    $(document).ready(function()
    {
        $(".signup").click(function(){
            alert("aaaaaaa");
        });
    });

</script>


<body>
    <div class="header">
        <img src="../public/images/banner1.jpg" alt="tattoo" height="auto" width="100%" />
        <div class="logo">
            <span><b>3</b></span>DOGS
        </div>
        <div class="menu">
            <ul>
                <li><a href="#home" > <span>Home</span></a></li>
                <li><a href="#tattoo" > Tattoo</a></li>
                <li><a href="#abouttattoo" > About Tattoo</a></li>
                <li><button onclick="document.getElementById('signin').style.display='block'" style="width:auto;">Sign In</button></li>      
            </ul>
        </div>
        <div class="search" >
                <form class="searchform" action="" method="get">
                    <input id="searchinfo" class= "searchinfo" onclick="changeSearch()" type="text"  value="Search....  "/>
                </form>

        </div>
    </div>

    <div id="signin" class="modal">
    <form class="modal-content animate" action="model/nguoi/all" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="imgcontainer">
          <span onclick="document.getElementById('signin').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
                        
          <button type="submit">Login</button>
          <button class="signup"  type="button">Create new acount</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('signin').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
    </div>

    <div class="footer">
        <div class="contact1" >
            <h2>About Us</h2>
            <p>Be your friend. We are always interested in any of your issues. We keep track of your steps. We always provide the best service for you.</p>
        </div>
        <div class="contact2" >
            <h2>Recent Posts</h2>
        </div>
        <div class="contact3" >
            <h2>More Details</h2>
        </div>
        <div class="contact4" >
            <h2>Contact Us</h2>
        </div>
        <div class="design">
            Copyright © 2018 Tattoo. All rights reserved | Design by W3layouts
        </div>
    </div>

</body>
</html>