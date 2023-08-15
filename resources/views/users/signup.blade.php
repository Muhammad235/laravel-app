<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/app.css">
    <title>Registration Form</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}


.container{
    width: 100%;
    height: 100vh;
    background: #001660;
    display: flex;
    align-items: center;
    justify-content: center;
}

form{
    background: #fff;
    display: flex;
    flex-direction: column;
    padding: 2vw 4vw;
    width: 80%;
    max-width: 350px;
    border-radius: 10px;
}

form h2{
    color: #ff5361;
    font-weight: 800;
    margin-bottom: 20px;
}


form input:not(.color){
    border: 0;
    margin: 10px 0;
    padding: 10px;
    outline: none;
    background: #f5f5f5;
}

form button{
    padding: 12px;
    background: #ff5361;
    color: #fff;
    font-size: 18px;
    border: 0;
    outline: none;
    cursor: pointer;
    width: 120px;
    margin: 20px auto 0;
    border-radius: 30px
}

.flex{
    display: flex;
    flex-direction: row;
}


input[type='color']{
    margin-left: 10px;
}


.date{
    margin-top: 20px;
}

.color{
    margin-top: 15px;
}

p {
    margin-top: 13px;
    text-align: center;
}

a{
    text-decoration: none;
}

select{
    width: 100%;
    height: 40px;
    outline: none;
    font-size: 16px;
    font-weight: 300;
}

select option{
    font-size: 15px;
    padding: 10px;
}

.container_success{
    background-color: antiquewhite;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    overflow: hidden;
}
.container_success h1{
    color: #001660;
    font-size: 40px;
}

.container_success p{
    color: #ff5361;
    font-size: 25px;
}

</style>
<body>

    <div class="container">
       <form action="{{ route('signup.view') }}" method="POST">

       <!-- csrf -->
        @csrf

            <h2>Registration Form</h2>
            <input type="text" id="firstname" name="firstname" placeholder="First Name" required>

            <input type="text" id="lastname" name="lastname" placeholder="Last Name" required>

            <input type="number" id="number" name="number" placeholder="Phone number" required>

            <input type="email" id="email" name="email" placeholder="Email id" required>

            <input type="password" id="password" placeholder="Your password" name="password" required>

            <button type="submit"> Submit</button>

            <!-- <p>Already have an account log in <a href="login.html">here</a></p> -->
       </form>
    </div>

</body>
</html>

