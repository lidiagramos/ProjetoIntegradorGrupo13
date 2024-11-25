function build_menu(tp,opc)
{
  var fg_f = new Image;
  fg_f.src = figuras[0];
  
  var bm_f = document.getElementById('build-menu');
  
  var dv_f = document.createElement('div');
  dv_f.style.position = "relative";
  dv_f.setAttribute('id','dv_princ');
  

  var tb_f = document.createElement('table');
  tb_f.setAttribute('id','tb_princ');
  tb_f.width = "100%";
  tb_f.style.height = fg_f.height;
  tb_f.border = "0";
  tb_f.cellSpacing = "0";
  tb_f.cellPadding = "0";

  var tr_f = tb_f.insertRow(0);
  var td_f = new Array(opc.length);
  for(i = 0; i < opc.length; i++)
  {
    td_f[i] = tr_f.insertCell(i);
	td_f[i].style.background = 'url('+figuras[0]+')';
	
	td_f[i].onmouseover = function()
	{
	  this.style.background = 'url('+figuras[1]+')';
	}
	
	td_f[i].onmouseout = function()
	{
	  this.style.background = 'url('+figuras[0]+')';
	}
	
	if (opc[i].href != null)
      td_f[i].innerHTML = '<a href="'+opc[i].href+'" class="A"><div align="center"><font face="verdana" size="2"><b>'+opc[i].descricao+'</b></font></div></a>';	
	else
      td_f[i].innerHTML = '<div align="center"><font face="verdana" size="2" color="#FFFFFF"><b>'+opc[i].descricao+'</b></font></div>';	
	
	if (opc[i].filhos != null)
	  build_subh(opc[i].filhos,td_f[i]);
  }
  dv_f.appendChild(tb_f);
  bm_f.appendChild(dv_f);
//  alert(bm_f.innerHTML);
}

function build_subh(sopc,obj)
{
  var sfg_f = new Image;
  sfg_f.src = figuras[0];

  var sdv_f = document.createElement('div');
  sdv_f.style.position = 'absolute';
//  sdv_f.style.visibility = "hidden";
  sdv_f.style.display = "none";
  sdv_f.style.top = sdv_f.style.top + sfg_f.height;
//  sdv_f.style.left = 

  var stb_f = document.createElement('table');
//  stb_f.setAttribute('id','tb_princ');
//  stb_f.width = "100%";
//  stb_f.height = sfg_f.height;
  stb_f.border = "0";
  stb_f.cellSpacing = "0";
  stb_f.cellPadding = "0";

  var str_f = new Array(sopc.length);
  var std_f = new Array(sopc.length);
  for(p = 0; p < sopc.length; p++)
  {
    str_f[p] = stb_f.insertRow(p);
	str_f[p].style.height = sfg_f.height;
	str_f[p].align = "right";
//	str_f[p].width = "100%";

	std_f[p] = str_f[p].insertCell(0);
	std_f[p].style.background = 'url('+figuras[0]+')';

//	std_f[p].style.align = "left";

	std_f[p].onmouseover = function()
	{
	  this.style.background = 'url('+figuras[1]+')';
	}
	
	std_f[p].onmouseout = function()
	{
	  this.style.background = 'url('+figuras[0]+')';
	}
	
	if (sopc[p].href != null)
	  std_f[p].innerHTML = '<a href="'+sopc[p].href+'" class="A"><div align="center"><font face="verdana" size="2"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+sopc[p].descricao+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></div></a>';
	else
	  std_f[p].innerHTML = '<div align="center"><font face="verdana" size="2" color="#FFFFFF"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+sopc[p].descricao+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font></div>';
	  
	if (sopc[p].filhos != null)
	  build_subh(sopc[p].filhos,std_f[p]);
  
	obj.onmouseover = function()
	{
	  sdv_f.style.display = "";
//	  sdv_f.style.left = event.x-event.y;
 	  obj.style.background = 'url('+figuras[1]+')';
	}
	
	obj.onmouseout = function()
	{
	  sdv_f.style.display = "none";
	  obj.style.background = 'url('+figuras[0]+')';
	}
  }
  sdv_f.appendChild(stb_f);
  obj.appendChild(sdv_f);
}
function CriaMenu(descricao,filhos,href) 
{ 
  this.descricao=descricao; 
  this.filhos=filhos; 
  this.href=href;
} 

var figuras = ['sub-button-tile.gif','sub-buttonOver-tile.gif','sub-button-left.gif','sub-buttonOver-left.gif','sub-button-right.gif','sub-buttonOver-right.gif'];

var op4 = new Array(15);
op4[0] = new CriaMenu("Ra&ccedil;a",null,"consulta_pet_raca.php");
op4[1] = new CriaMenu("Tipo",null,"consulta_pet_tipo.php");
op4[2] = new CriaMenu("Pet",null,"consulta_pet.php");
op4[3] = new CriaMenu("Servi&ccedil;o",null,"consulta_servico.php");
op4[4] = new CriaMenu("Atendimento",null,"consulta_atendimento.php");
op4[5] = new CriaMenu("Atendimento Itens",null,"consulta_atendimento_itens.php");
op4[6] = new CriaMenu("Cliente",null,"consulta_cliente.php");
op4[7] = new CriaMenu("Compra e Venda",null,"consulta_compra_venda.php");
op4[8] = new CriaMenu("Financeiro",null,"consulta_financeiro.php");
op4[9] = new CriaMenu("Fornecedor",null,"consulta_fornecedor.php");
op4[10] = new CriaMenu("Fun&ccedil;&atilde;o",null,"consulta_funcao.php");
op4[11] = new CriaMenu("Funcion&aacute;rio",null,"consulta_funcionario.php");
op4[12] = new CriaMenu("Funcion&aacute;rio Fun&ccedil;&atilde;o",null,"consulta_funcionario_funcao.php");
op4[13] = new CriaMenu("Or&ccedil;amento",null,"consulta_orcamento.php");
op4[14] = new CriaMenu("Pessoa",null,"consulta_pessoa.php");


var op3 = new Array(15);
op3[0] = new CriaMenu("Ra&ccedil;a",null,"excluir_pet_raca_frontend.php");
op3[1] = new CriaMenu("Tipo",null,"excluir_pet_tipo_frontend.php");
op3[2] = new CriaMenu("Pet",null,"excluir_pet_frontend.php");
op3[3] = new CriaMenu("Servi&ccedil;o",null,"excluir_servico_frontend.php");
op3[4] = new CriaMenu("Atendimento",null,"excluir_atendimento_frontend.php");
op3[5] = new CriaMenu("Atendimento Itens",null,"excluir_atendimento_itens_frontend.php");
op3[6] = new CriaMenu("Cliente",null,"excluir_cliente_frontend.php");
op3[7] = new CriaMenu("Compra e Venda",null,"excluir_compra_venda_frontend.php");
op3[8] = new CriaMenu("Financeiro",null,"excluir_financeiro_frontend.php");
op3[9] = new CriaMenu("Fornecedor",null,"excluir_fornecedor_frontend.php");
op3[10] = new CriaMenu("Fun&ccedil;&atilde;o",null,"excluir_funcao_frontend.php");
op3[11] = new CriaMenu("Funcion&aacute;rio",null,"excluir_funcionario_frontend.php");
op3[12] = new CriaMenu("Funcion&aacute;rio Fun&ccedil;&atilde;o",null,"excluir_funcionario_funcao_frontend.php");
op3[13] = new CriaMenu("Or&ccedil;amento",null,"excluir_orcamento_frontend.php");
op3[14] = new CriaMenu("Pessoa",null,"excluir_pessoa_frontend.php");


var op2 = new Array(15);
op2[0] = new CriaMenu("Ra&ccedil;a",null,"alterar_pet_raca_frontend.php");
op2[1] = new CriaMenu("Tipo",null,"alterar_pet_tipo_frontend.php");
op2[2] = new CriaMenu("Pet",null,"alterar_pet_frontend.php");
op2[3] = new CriaMenu("Servi&ccedil;o",null,"alterar_servico_frontend.php");
op2[4] = new CriaMenu("Atendimento",null,"alterar_atendimento_frontend.php");
op2[5] = new CriaMenu("Atendimento Itens",null,"alterar_atendimento_itens_frontend.php");
op2[6] = new CriaMenu("Cliente",null,"alterar_cliente_frontend.php");
op2[7] = new CriaMenu("Compra e Venda",null,"alterar_compra_venda_frontend.php");
op2[8] = new CriaMenu("Financeiro",null,"alterar_financeiro_frontend.php");
op2[9] = new CriaMenu("Fornecedor",null,"alterar_fornecedor_frontend.php");
op2[10] = new CriaMenu("Fun&ccedil;&atilde;o",null,"alterar_funcao_frontend.php");
op2[11] = new CriaMenu("Funcion&aacute;rio",null,"alterar_funcionario_frontend.php");
op2[12] = new CriaMenu("Funcion&aacute;rio Fun&ccedil;&atilde;o",null,"alterar_funcionario_funcao_frontend.php");
op2[13] = new CriaMenu("Or&ccedil;amento",null,"alterar_orcamento_frontend.php");
op2[14] = new CriaMenu("Pessoa",null,"alterar_pessoa_frontend.php");

var op1 = new Array(15);
op1[0] = new CriaMenu("Ra&ccedil;a",null,"incluir_pet_raca_frontend.php");
op1[1] = new CriaMenu("Tipo",null,"incluir_pet_tipo_frontend.php");
op1[2] = new CriaMenu("Pet",null,"incluir_pet_frontend.php");
op1[3] = new CriaMenu("Servi&ccedil;o",null,"incluir_servico_frontend.php");
op1[4] = new CriaMenu("Atendimento",null,"incluir_atendimento_frontend.php");
op1[5] = new CriaMenu("Atendimento Itens",null,"incluir_atendimento_itens_frontend.php");
op1[6] = new CriaMenu("Cliente",null,"incluir_cliente_frontend.php");
op1[7] = new CriaMenu("Compra e Venda",null,"incluir_compra_venda_frontend.php");
op1[8] = new CriaMenu("Financeiro",null,"incluir_financeiro_frontend.php");
op1[9] = new CriaMenu("Fornecedor",null,"incluir_fornecedor_frontend.php");
op1[10] = new CriaMenu("Fun&ccedil;&atilde;o",null,"incluir_funcao_frontend.php");
op1[11] = new CriaMenu("Funcion&aacute;rio",null,"incluir_funcionario_frontend.php");
op1[12] = new CriaMenu("Funcion&aacute;rio Fun&ccedil;&atilde;o",null,"incluir_funcionario_funcao_frontend.php");
op1[13] = new CriaMenu("Or&ccedil;amento",null,"incluir_orcamento_frontend.php");
op1[14] = new CriaMenu("Pessoa",null,"incluir_pessoa_frontend.php");



var op = new Array(4);
op[0] = new CriaMenu("Cadastrar",op1,null);
op[1] = new CriaMenu("Alterar",op2,null);
op[2] = new CriaMenu("Excluir",op3,null);
op[3] = new CriaMenu("Consultar",op4,null);

build_menu(1,op)