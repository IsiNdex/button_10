<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background: #e0e5ec;
  }
  h1 {
    position: relative;
    text-align: center;
    color: #353535;
    font-size: 50px;
    font-family: "Cormorant Garamond", serif;
  }
  
  p {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    text-align: center;
    font-size: 18px;
    color: #676767;
  }
  .frame {
    width: 90%;
    margin: 40px auto;
    text-align: center;
  }
  button {
    margin: 20px;
  }
  .custom-btn {
    width: 130px;
    height: 40px;
    color: #fff;
    border-radius: 5px;
    padding: 10px 25px;
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
     box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
     7px 7px 20px 0px rgba(0,0,0,.1),
     4px 4px 5px 0px rgba(0,0,0,.1);
    outline: none;
  }
  
  .btn-10 {
    background: rgb(22,9,240);
  background: linear-gradient(0deg, rgba(22,9,240,1) 0%, rgba(49,110,244,1) 100%);
    color: #fff;
    border: none;
    transition: all 0.3s ease;
    overflow: hidden;
  }
  .btn-10:after {
    position: absolute;
    content: " ";
    top: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    transition: all 0.3s ease;
    -webkit-transform: scale(.1);
    transform: scale(.1);
  }
  .btn-10:hover {
    color: #fff;
    border: none;
    background: transparent;
  }
  .btn-10:hover:after {
    background: rgb(0,3,255);
  background: linear-gradient(0deg, rgba(2,126,251,1) 0%,  rgba(0,3,255,1)100%);
    -webkit-transform: scale(1);
    transform: scale(1);
  }
    </style>
</head>
<body>
     
     <div class="frame">
      <button class="custom-btn btn-10">Read More</button>
     </div>
     

</body>
</html>