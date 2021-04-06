<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style3.css">

</head>
<body>
          <div class="container">
              <div class="columns is-centered">
                  <div class="column is-6">
                        <form action="login.php" class="box" method="post">
                            <div class="field">
                          <img src="sign-up.png" alt="sign-up">      
                            </div>
                            <div class="field">
                                <label for=""class="label">Email</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input type="email" name="username" id="" class="input" placeholder="aldhy@***.com" required>
                               <span class="icon">
                                   <i class="fa fa-envelope"></i>
                               </span>
                                </div>
                            </div>
                            <div class="field">
                                    <label for=""class="label">Password</label>
                                    <div class="control has-icons-left">
                                        <input type="password" name="password" id="" class="input" placeholder="********" required>
                                   <span class="icon">
                                       <i class="fa fa-lock"></i>
                                   </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                      <input type="checkbox" name="" id="">  
                                    Remember me
                                    </div>
                                </div>
                                <div class="field">
                                        <div class="control"> 
                                            </div>
                                        </div>
                                        <input type="submit" name="login" value="login" class="button is-danger is-fullwidth">
                  </div>
              </div>
              </form>
          </div>
      </div>
  </div>  
</body>
<script type="text/javascript">
	function validasi(){
		var username = document.getElementById("username").value
		var password = document.getElementById("password").value
		if(username != "bujang@yahoo.com" && password!="123"){
			return true;
		} else{
			alert('username atau password salah!');
			return false;
		}
		}
</script>
</html>