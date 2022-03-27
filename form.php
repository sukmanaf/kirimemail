
<!DOCTYPE html>
<html>
 
<head>
    <title>Kirim Email</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

    <style type="text/css">
    	* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Quicksand", sans-serif;
}
 
body {
  height: 100vh;
  width: 100%;
}
 
.container {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px 100px;
}
 
.container:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background: url("/images/bg1.jpg") no-repeat center;
  background-size: cover;
  filter: blur(30px);
  z-index: -1;
}
 
.contact-box {
padding: 10px;
  grid-template-columns: 250px 600px;
  justify-content: center;
  align-items: center;
  text-align: center;
  background-color: #fff;
  box-shadow: 0px 0px 19px 5px rgba(0, 0, 0, 0.19);
}
 
.left {
  background: url("/images/bg1.jpg") no-repeat center;
  background-size: cover;
  height: 100%;
}
 
.right {
  padding: 25px 40px;
}
 
h2 {
  position: relative;
  padding: 0 0 10px;
  margin-bottom: 20px;
}
 
h2:after {
  content: "";
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  height: 4px;
  width: 50px;
  border-radius: 2px;
  background-color: #2ecc71;
}
 
.field {
  width: 100%;
  border: 2px solid rgba(0, 0, 0, 0);
  outline: none;
  background-color: rgba(230, 230, 230, 0.6);
  padding: 0.5rem 1rem;
  font-size: 1.1rem;
  margin-bottom: 22px;
  transition: 0.3s;
}
 
.field:hover {
  background-color: rgba(0, 0, 0, 0.1);
}
 
textarea {
  min-height: 150px;
}
 
.btn {
  width: 100%;
  padding: 0.5rem 1rem;
  background-color: #2ecc71;
  color: #fff;
  font-size: 1.1rem;
  border: none;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
}
 
 

}
    </style>
</head>
 
<body>
    <div class="container">
        <div class="contact-box">
            <div 	>
        		<form action="send.php" id="postForm" enctype="multipart/form-data" method="post">

                <input type="email" required="" name="to" class="field" placeholder="To">
                <input type="text" required name="subject" class="field" placeholder="Subject">
                <textarea type="text" required name="message" placeholder="Message" class="field"></textarea>
 
                <button class="btn" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>