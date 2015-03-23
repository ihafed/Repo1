<!--
        
        function login(Register_form)
        {
         if (Register_form.username.value == "")
            { 
            alert("Please enter your username");
            document.Register_form.username.focus();   
            return false; 
            }
         if (Register_form.pass.value == "")
            { 
             alert("Please enter your password");
             document.Register_form.pass.focus();   
             return false; 
             }
         
        }
        
        function validation(comment)
        {
        	Nkey=/^[0-9]+$/;
        Dkey=/^[a-zA-Z]+$/;
        Ekey=/^[a-z\'0-9]+([._-][a-z\'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$/;
          if (comment.t1.value == "")
        { alert("Please Enter Your Name");
         document.comment.t1.focus();   
         return false; }
         if (!(Dkey.test(comment.t1.value)))
          { alert("Please Enter Only Characters");
         document.comment.t1.focus();   
         return false; }
            if (comment.t2.value == "")
        { alert("Please Enter Your Email");
         document.comment.t2.focus();   
         return false; }
          if (!(Ekey.test(comment.t2.value)))
          { alert("Please Enter Correct Email");
         document.comment.t2.focus();   
         return false; }
        
         if (comment.t3.value.trim() == "")
        { alert("Please Enter Your Comments");
         document.comment.t3.focus();   
         return false; }
      
         
      
        }
function getCookie(Attribute) 
        // Assumes: Attribute is a string // Results: gets the value stored under the Attribute 
        { 
            
            if (document.cookie.indexOf(Attribute+"=") == -1) 
            { return ""; 
            }
            
            else 
            
            { var begin = document.cookie.indexOf(Attribute+"=") + Attribute.length+1;
              var end = document.cookie.indexOf(";", begin);
              if (end == -1) end = document.cookie.length; 
              return unescape(document.cookie.substring(begin, end)); 
            }
            
              
        }
        function setCookie(Attribute, Value) // Assumes: Attribute is a string 
        // Results: stores Value under the name Attribute, expires in 30 days 
        { var ExpireDate = new Date(); 
          ExpireDate.setTime(ExpireDate.getTime() + (30*24*3600*1000)); 
          document.cookie = Attribute + "=" + escape(Value) + "; expires=" + ExpireDate.toGMTString(); }
          
         
           function Greeting()
// Results: displays greeting using cookie
        {
            visitCount = getCookie("visits");
            if (visitCount == "") 
            {
            setCookie("visits", 1);
            }
            else 
            {
            visitCount = parseFloat(visitCount)+1;
            //alert("Welcome back for visit #" + visitCount);
            setCookie("visits", visitCount);
            }
        }
          
       