
<div class="navbar-govco" role="navigation">
  <div class="container top_govco">
	<div class="navbar-header">
	  <a class="navbar-brand" href="https://www.gov.co/home/">
		<img
		  src="https://cdn.www.gov.co/assets/images/logo.png"
		  height="30"
		  alt="Logo Gov.co"
		/>
	  </a>
	</div>

	<div class="navbar-right top_govco-right">
	  <ul class="nav navbar-nav">
		<li>
		<div class="searchBox">
		  <form action="loader.php?lServicio=Buscar&amp;lFuncion=buscarGo" class="form-horizontal search-intro" method="post">
		  <input class="searchInput" id="search-box" name="palabras" placeholder="Buscar" type="search" />
		  <button class="searchButton" type="submit"><span class="govco-icon govco-icon-search-cp"></span></button></form>
		  </div>
		</li>
	  </ul>
	  
		<div class="bg-accesibilidad">
		  <div id="toggle_accesibilidad">
			<span class="icon-accesibilidad govco-icon-accessibility-cp"></span>
		  </div>
		</div>
	  
	  <div id="menu_accesibilidad_top">
		<ul>
		  <div class="block--gov-accessibility">
			<div class="block-options navbar-expanded">
			  <a class="contrast-ref" id="btn-contrast">
				<span class="govco-icon govco-icon-contrast-n"></span>
				<label> Contraste </label>
			  </a>
			  <a class="max-fontsize aumentar">
				<span class="govco-icon govco-icon-more-size-n"></span>
				<label class="align-middle"> Aumentar letra </label>
			  </a>
			  <a class="min-fontsize disminuir">
				<span class="govco-icon govco-icon-less-size-n"></span>
				<label class="align-middle"> Reducir letra </label>
			  </a>
			  
			  <div class="a">
				<a href="/idioma.php?idioma=es" title="Idioma español" ><span class="govco-icon govco-icon-language-es-n"></span></a>
				<label class="align-middle">					
					<a href="/idioma.php?idioma=en" title="Idioma Inglés" ><span class="govco-icon govco-icon-language-en-n"></span></a>
					<a href="/idioma.php?idioma=fr" title="Idioma francés" ><span class="govco-icon govco-icon-language-en-n"></span></a>
				</label>
			  </div>
			  
			  <a class="max-fontsize">
				<span class="govco-icon govco-icon-relief-n"></span>
				<label class="align-middle"> Discapacidad Auditiva</label>
			  </a>
			</div>
		  </div>
		</ul>
	  </div>
	</div>
  </div>
</div>
<script>
      
	$(document).on("click", "#toggle_accesibilidad",() => {
		const boton = $("#toggle_accesibilidad");
		if(boton.hasClass("on")){
			boton.removeClass("on")
			$("#menu_accesibilidad_top").removeClass("activo")
		}else{
			boton.addClass("on")
			$("#menu_accesibilidad_top").addClass("activo")
		}
	})

    const local = localStorage.getItem("colpensionesAcc");
	let size = (local) ? local : $("html").css("font-size");
		
      function letterSize() {
        if (local) {
			size = local
			size = parseInt(size, 10)
			$("html").css("font-size", localStorage.getItem("colpensionesAcc") );
        } else {
			size = 16;
			$("html").css("font-size", "16px");
        }
        
      }

      letterSize();
		
     $(document).on("click","#aumentar_btn_accesibilidad",() => {
	    console.log("aumentar")
        if (size + 2 <= 22) {
          $("html").css("font-size", "+=2");
          localStorage.setItem("colpensionesAcc", $("html").css("font-size"));
        } else {
          if (local) {
            $("html").css("font-size", "+=2");
            localStorage.setItem("colpensionesAcc", $("html").css("font-size"));
          }
        }
      });
	
	
    $(document).on("click","#disminuir_btn_accesibilidad", () => {
	    console.log("disminuir")
        if (size - 2 >= 10) {
          $("html").css("font-size", "-=2");
          localStorage.setItem("colpensionesAcc", $("html").css("font-size"));
        } else {
          if (local) {
            $("html").css("font-size", "-=2");
            localStorage.setItem("colpensionesAcc", $("html").css("font-size"));
          }
        }
      });
	
	
    $("#btn-contrast").on("click",() => {
		console.log("contraste")
        $("body").toggleClass("contrast");
      });
    </script>