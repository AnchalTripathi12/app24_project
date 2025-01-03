<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2nd Form</title>
    <style>
        body{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0;

} 
        .container {
            min-height: 300px;
            width: 70%;
            margin: 20px auto;
            border :1px solid #000;
        }

        .up {
            width: 100%;
            height: 120px;
            background: linear-gradient(135deg,#900C3F,#C70039 ); 
          
            --mask:
                radial-gradient(34.99px at 50% calc(100% - 48px), #000 99%, #0000 101%) calc(50% - 60px) 0 / 70px 100%,
                radial-gradient(34.99px at 50% calc(100% + 18px), #0000 99%, #000 101%) 50% calc(100% - 30px) / 120px 100% repeat-x;
            -webkit-mask: var(--mask);
            mask: var(--mask);
            background-color: #ccc;
            border:1px solid #000;

    
        }
        h3{
            font-size:30px;
            color:#fff;
            padding-left:40%;
            line-height:8px;
            font-family:roboto;
        }
        .input-row {
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
    margin-bottom: 5px;
    margin-right:30px;  
    margin-top:30px;
}
.input-box{
    display: flex;
    flex-direction: column;
    width: 45%;
    margin-bottom: 5px;
}
.reg-label{
    font-size: 18px;
    font-weight: 500;
    padding-left: 20px;  
    color: #002233;
}
.reg-input{
    box-sizing: border-box;
    padding: 10px 5px;
    margin-left: 20px;
    margin-bottom: 5px;  
    font-size: 17px;
    outline: none;
    font-weight: 500;
    border-top: none;
    border-left: none;
    border-right: none;
    background: none;
}
.reg-input:hover{
    transform: translate(3px, 1px);
}
.button{
    text-align: center;
    margin-top: 40px; 
    margin-bottom: 40px;   
}
.reg-button{
    /* width: 30%; */
    padding: 13px 70px;
    border-radius: 20px;
    font-weight: 400;
    font-size: 16px;
    background-color: #002233;
    color: #ffffff;
    border: none;
    letter-spacing: 2px;
}
.reg-button:hover{
    cursor: pointer;
    background-color:hsl(334, 92.30%, 45.70%);
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
    </style>
</head>
<body>
    <div class="container">
        <div class="up">
            <h3>Contact Us</h3>
        </div>
        <form action="createpost.php" method="post">
        <div class="input-row">
                    <div class="input-box">
                        <label for="name" class="reg-label">First Name:</label> 
                        <input type="text" name="fname" class="reg-input">
                    </div>
                    <div class="input-box">    
                        <label for="name" class="reg-label">Last Name:</label>
                        <input type="text" name="lname" class="reg-input">    
                    </div>
                </div>    
                <div class="input-row">
                    <div class="input-box"> 
                        <label for="name" class="reg-label">Phone:</label>
                        <input type="text" name="phone" class="reg-input">
                    </div>
                    <div class="input-box">
                        <label for="name" class="reg-label">Email:</label>
                        <input type="text" name="email" class="reg-input">    
                    </div>
                </div>
          
                    <div class="button">
                     <button type="submit" class="reg-button">Submit</button>
                    </div> 
</form>
        </div>

    </div>
</body>
</html>
