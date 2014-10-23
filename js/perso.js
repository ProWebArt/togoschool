$(document).ready(function(){
	
	$(".categorie").css(
		{
			"color":"red",
			"cursor":"pointer"
		}
	);
    
    $(window).scroll(function(){
		$('.login2').css('top', $(document).scrollTop());
        $('.sign_in').css('top', $(document).scrollTop());
        $('.black_overlay').css('top', $(document).scrollTop());
        
	});
    
    $("#close_sign_in, #close_login").css({
        "margin-left": "99%",
        "margin-top":"-30px"
    });
    
    $("#close_sign_in").click(function(){
         $(".black_overlay").hide();
       $(".sign_in").hide();
    });
    
    
    $("#close_login").click(function(){
         $(".black_overlay").hide();
       $(".login2").hide();
    });
    
    
	
	$("#question_file").css(
		{
			"display":"none"
		}
	);
    
    $("#new_login").click(function(){
        
       $(".black_overlay").show();
       $(".login2").show();
    });
    
    $("#new_sign_in, #sinscrire").click(function(){
        $(".login2").hide();
       $(".black_overlay").show();
       $(".sign_in").show();
    });
	
	
	$("#button_choisir_fichier, #button_choisir_corrige").click(function(){
		var button=$(this).next();
		//alert(button);
		button.click();
	});
	
	
	$("#button_choisir_fichier").click(function(){
		$("#question_file").click();
	});
	var error_pass=false;
	$("#password_verif").keyup(function(){
		
		verif_password();
	});
	
	$("#password").keyup(function(){
		verif_password();
	});
	
	function verif_password(){
		
		var pass1=$("#password").val();
		var pass2=$("#password_verif").val();
		if(pass1 != "" && pass2 != ""){
		if(pass1 != pass2){
			
			var error_message="<font color='red'>Les deux mots de passes ne sont identiques</font><br>";
			$("#span").html(error_message);
			error_pass=true;
			
		}else{
			var ok_message="<font color='green'>Les deux mots de passes identiques</font><br>";
			$("#span").html(ok_message);
			error_pass=false;
			
		}
		
		}
	
	}
	
	$("#tel").keyup(function(){
		
		var tel=$(this).val();
		tel=tel.replace(/[^0-9]/gi,"");
		$(this).val(tel);
		
	});
	
	
	
	$("#submit").click(function(){
            if($("#seconde").is(":checked") || $("#premiere").is(":checked") || $("#terminale").is(":checked")){
                $("#form").click(); 
            }else{
                alert("Veuillez s'il vous plait remplir correctement tous les champs et choisir votre classe avant de poursuivre."); 
            }
        });
	
	$("#tel").focus(function(){
		
		if(error_pass==false){
			$("#span").html("");
		}
		
	});
	
	
	$(".categorie").click(function(){
		$(".categorie").hide();
		$(this).show();
	});
	
	
	
});


function fileset(file){
	var name=file.files[0].name;
	var id=file.getAttribute("id");
	var next=$("#"+id).next().next();
	
	next.html(name);
	
}

function filename(file){
	var name=file.files[0].name;
	var id=file.getAttribute("id");
	var next=$("#"+id).next().next().next();
	next.html(name);
}


