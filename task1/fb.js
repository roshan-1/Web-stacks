
		function func(e){
			e.preventDefault();
			var el1=document.getElementById("em");
			var el2=document.getElementById("pass");
			if(el1.value=="abc" && el2.value=="123"){
				console.log('Logged In Successfully');
			}
			else{
				console.log('Login failed');
			}
		}