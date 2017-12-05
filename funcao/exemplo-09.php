<?php 

$herarquia = array(
	array(
		'nome_cargo' =>'CEO',
		'subordinados' => array(
			//inicio: Diretor comercial
			array(
				'nome_cargo'=>'Diretor comercial',
				'subordinados' => array(
					//inicio: Gerente de Vendas
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					//Termino: Gerente de Vendas
				)
			),
			//Termino: Diretor comercial
			//inicio: Diretor Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' => array(
					//inicio: Gerente de contas a pagar
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' => array(
							//inicio: Supervisor de pagamentos
							array(
								'nome_cargo' => 'Supervisor de pagamentos'
							)
							//Termino: Supervisor de pagamentos
						)
					),
					//Termino: Gerente de contas a pagar
					//inicio: Gerente de compras
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							//inicio: Supervisor de Suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos'
							),
							//Termino: Supervisor de Suprimentos
							//inicio: Supervisor de Controller
							array(
								'nome_cargo' => 'Supervisor de Controlller'
							)
							//Termino: Supervisor de Controller
						)
					),
					//Termino: Gerente de compras
					//inicio: Gerente Teste
					array(
						'nome_cargo' => 'Gerente de Teste',
						'subordinados' => array(
							//inicio: Supervisor de Teste
							array(
								'nome_cargo' => 'Supervisor de Teste'
							)
							//inicio: Supervisor de Teste
						)
					)
				)

			)
			//Termino: Diretor Financeiro
		)
	)
);


function exibe($cargos){

	$html = "<ul>";

	foreach ($cargos as $cargo) {
		$html .="<li>";
		$html .=$cargo['nome_cargo'];

	if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
		$html .= exibe($cargo['subordinados']);
		
	}
		$html .="</li>";

	}
		$html .="</ul>";

	return $html;
}


echo exibe($herarquia);
 ?>