
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0px;
        }
        .bigdiv {
            /* width: 100%;
            height: 100%; */
            display: flex;
                 }
         .leftdiv {
                   height: 100%;
                   width: 200px;
                   background-color: #000;
                   padding-bottom: 100%;
                   border-right:solid 2px #150050;
                   margin-left: 0px;

         }        
         .rightdiv{
            display :flex;
            justify-content:space-evenly;
            background-color: #000000;
            width: 100%;
         }
         /* big block */
 .objects{
    display: flex;
    justify-content: space-evenly;
    flex-wrap:wrap;
    
 }
 .ob{ 
    display: grid;
    grid-template-columns: 1fr ;
    grid-template-rows: 100px 200px;
    margin-top: 40px;
    /* width:clamp(200px,75%,350px); */
    height: 400px;
    width: 300px;
    background-color: #3F0071;
    border-radius: 3%;
    box-shadow: 1px 1px 2px 2px #fb257765;
    margin-left:20px;
 }
 .ob:hover{
    /* box-shadow: 1px 1px 7px 7px rgba(255, 0, 0, 0.192); */
    box-shadow: 1px 1px 7px 7px #fb25772f;
 }
 .imagobj{
  
          background-size: 300px 100px;
          border-radius: 12%;
          border-bottom: #FB2576 solid 2px;
          

    
}
.imagobj111{
    border-radius: 6%;
    border-bottom:solid 2px #FB2576 
}
 .textobj{
    display: flex;
    justify-content: center;
    align-items:center;
    margin-left :10px;
    margin-right :10px;
    color:#fff;
    /* background-color: aqua; */
    
}
 .btobj{
    display: flex;
    justify-content: center;
   
  
  
    
    }
    .product1obj{
        background-color: #150050;
        border: #FB2576 solid 2px;
        border-radius: 30%;
        width: 100px;
        height: 50px;
        margin-top: 20px;
    }
    
    .product1obj {
  background-color: #150050;
  border-radius: 100px;
  box-shadow: rgba(0, 38, 255, 0.2) 0 -25px 18px -14px inset,rgba(0, 38, 255, .15) 0 1px 2px,
              rgba(0, 38, 255, .15) 0 2px 4px,rgba(0, 38, 255, .15) 0 4px 8px,
              rgba(0, 38, 255, .15) 0 8px 16px,rgba(0, 38, 255, .15) 0 16px 32px;
  color: #ffffff;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.product1obj:hover {
  box-shadow: rgba(0, 38, 255,.35) 0 -25px 18px -14px inset,
              rgba(0, 38, 255,.25) 0 1px 2px,rgba(0, 38, 255,.25) 0 2px 4px,
              rgba(0, 38, 255,.25) 0 4px 8px,rgba(0, 38, 255,.25) 0 8px 16px,
              rgba(0, 38, 255,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
}
.menu1{
    display:grid;
    list-style-type:none;
    font-size:1.2rem;
    font-weight:700;
    color:#fff;
    

}
.menu1 li{
    margin-top:3rem;
}
.menu1 li:hover{
     color: #3f0071;
     cursor: pointer;
}
    </style>
</head>


<body >
<?php 
$name="localhost";
$user="root";
$password="";
$conn=mysqli_connect($name,$user,$password);
mysqli_select_db($conn,"php_project1");
 
$sql="SELECT * FROM product";
$result=mysqli_query($conn,$sql);

$sql2="SELECT * FROM object";
$result2=mysqli_query($conn,$sql2);

?>
    <div class ="bigdiv">
         

         <div class="leftdiv">
                            <ul class="menu1">
                                <?php 
                                while($data2=mysqli_fetch_array($result2)){
                                    echo" <li>".$data2["name_obj"]."</li>";
                                } 
                                  ?>
                            </ul>
                        
          </div>
        <div class="rightdiv">
            <div class="objects">
                <?php 
                while($data=mysqli_fetch_array($result)){

                
                echo "
                <div class='ob'>
                     <div class='imagobj'>
                       <img src='/new folder/".$data["link_product"]."' width='300px' height='100px' class='imagobj111'>
                    </div>
                    <div class='textobj'>
                     <label>".$data["information_product"]."<br> Sale:".$data["sale_product"]."$</label>
                    </div>
                    <div class='btobj'><input type='button' name='product1' value='product1' class='product1obj'></div>
                </div>";}
                ?>
                
            </div>
        </div>

    </div>
<?php
$f='CART.txt';
$charbel=fopen("$f","w");
fwrite($f,"charbel")

?>

</body>
</html>