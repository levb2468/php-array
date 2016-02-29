<?php 

$_comidas = ['chaufita',
             'Sopa de Mote',
             'Arroz con Pato',
             'arroz con Pollo',       
            ];

echo "<hr/>";
echo $_comidas[0]."<br/>";
echo $_comidas[1]."<br/>";
echo $_comidas[2]."<br/>";
echo $_comidas[3]."<br/>";

$_comidas[] = 'caldo de gallina';

array_push($_comidas,['Mariscos','Seco de Cabrito']);
array_push($_comidas,'Wantan','lomito saltado');

$_html = '<ul>';

$_html .= '<li>A</li>';
$_html .= '<li>B</li>';
$_html .= '<li>C</li>';

$_html .='</ul>';

echo $_html;
echo "<hr>LISTADO<br>";

foreach ($_comidas as $key => $v)
{

	if (is_array($_comidas[$key]))
    {
            $_vector=$_comidas[$key];
        
		foreach ($_vector as $value) 
        {
		  echo $value.'<br>';	
		}
		
	}else{
		echo $key . '=>'.$v.'<br>';
	}
	
}

echo "<pre>";
print_r($_comidas);

 ?>