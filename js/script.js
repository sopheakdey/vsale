 $(document).ready(function(){   
     var url='http://vsale/index.php/customer/login';
   $('.order-now').click(function(){
             $('#myModal').modal('show');
                $(".modal-body").load(url);
      });
      $('.close').click(function(){
          $('#myModal').modal('hide');
      });
            
          var username= $('.username').val();
          var password= $('.password').val();
      $('.customer-login').click(function(){
             $.ajax({
                 type:"post",
                 url:url,
                 data:{$username:username,$password:password},
                 success:function(){
                     
                 }
             });
        });
        
});