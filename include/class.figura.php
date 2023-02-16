<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			
			<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Universidad de las Fuerzas Armadas ESPE</h2>
					<h4 class="title">Solorzano Deivy</h4>
					<h4 class="title">8443</h4>
                    <form method="POST">
					<select name="tipo" OnChange=>
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
					</select>
					
                        <div class="row row-space">
						<div class="col-1">
							<div class="input-group">
								<label class="label">Lado 1</label>
								<input class="input--style-4" name="first_name" type="text" id="lado_1"size="4" disabled>
							</div>
						</div>
						<div class="col-1">
							<div class="input-group">
								<label class="label">Lado 2</label>
								<input class="input--style-4" name="first_name" type="text" id="lado_1"size="4" disabled>
							</div>
						</div>
						<div class="col-1">
							<div class="input-group">
								<label class="label">Lado 3</label>
								<input class="input--style-4" name="first_name" type="text" id="lado_1"size="4" disabled>
							</div>
						</div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Calcular</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
