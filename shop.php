<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brew-n-fill</title>
    <link rel="stylesheet" href="style2.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<br/>
   <h3 style="background:transparent;color:white;">Taste the Brew-n-fill</h3>
    <br/>
     <div class="row">
        <div class="col-md-3">
            <div class="card">
               <div class="card-header">Espresso</div> 
               <div class="card-body">
                    <img src="/images/espresso.jpg">
                    <input type="hidden" name="image_src" id="image_src" value="/images/espresso.jpg"/>
                    
               </div> 
               <div class="card-footer">
               <span>Espresso</span>
                    <span>&#8377;&nbsp;250.00 </span>
                    <input type="submit" name="submit" value="check-in" class="buy_now"/>
                    <input type="hidden" name="price"  id="price" value="250.00"/>
                    <input type="hidden" name="item_name" id="item_name" value="Espresso"/>   
               </div>   
            </div>
        </div>
        <div class="col-md-3">
          <div class="card">
                    <div class="card-header">macchito</div> 
                    <div class="card-body">
                         <img src="/images/macchito.jpg"/>
                         <input type="hidden" name="image_src"  id="image_src" value="/images/macchito.jpg"/>
                    </div>
                    <div class="card-footer">
                    <span>Macchitto</span>
                    <span>&#x20B9; &nbsp;300.00 </span>
                    <input type="submit" name="submit" value="check-in" class="buy_now"/>
                    <input type="hidden" name="price" id="price" value="300.00"/>
                    <input type="hidden" name="item_name" id="item_name" value="Macchito"/>     
                    </div>    
          </div>
        </div>
        <div class="col-md-3">
            <div class="card">
               <div class="card-header">Flat white</div> 
               <div class="card-body">
                    <img src="/images/flat white.jpg" width="1000" height="1000"/>
                    <input type="hidden" name="image_src" id="image_src" value="/images/flat white.jpg"/>
               </div>    
               <div class="card-footer">
               <span>Flat white</span>
                    <span>&#x20B9; &nbsp; 250.00 </span>
                    <input type="submit" name="submit" value="check-in" class="buy_now"/>
                    <input type="hidden" name="price"  id="price" value="250.00"/>
                    <input type="hidden" name="item_name" id="item_name" value="flat white"/>  
               </div>
            </div>
        </div>
   </div>
   <script>
        $(document).ready(function(){
           $(".buy_now").on('click',function(e){
                e.preventDefault();
                    var image_src = $(this).closest(".card").find("#image_src").attr("value");
                    var item_name = $(this).closest(".card").find("#item_name").attr("value");
                    var price = $(this).closest(".card").find("#price").attr("value");
                    var dt = '&image='+image_src+'&item_name='+item_name+'&price='+price;
                    var url = 'http://localhost:8000/checkout.php?'+dt; 
                    
                    $.ajax({
                         url:url,
                         method:'GET',
                         success:function(){
                              window.location.href=url;
                         }
                    });
                   
                    
           });
          
        });
   </script>
</body>
</html>