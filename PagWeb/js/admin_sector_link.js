$(document).ready(function() {	
				
				$("a.sube_link").live('click', function(){
					
					var pru = $(this);
					if(($(this).parents("tr").get(0).rowIndex)>2){
					posicion = parseInt($(this).parents("tr").find("td").eq(0).html());
					
					href = $(this).parents("tr").find("td").eq(1).html();
					valor =$(this).parents("tr").find("td").eq(2).html();
					id = $(this).parents("tr").find("input").eq(0).val();
					pos = parseInt($(this).parents("tr").get(0).rowIndex-1);
					//alert(pos);
					 $.get("../controlador/ctrl_link.php", 
							  { logic: 5, link: id, posicion: pos, id_sector : <?php echo $id_sector; ?> },
  							  function(data){
                         //alert(data);
						      if(data==1){
							
                               $("#link_row_"+posicion).prev().before($("#link_row_"+posicion));
						
							  
							 acum =$("#link_row_"+posicion).next().find("td").eq(0).text();
							 
							  
							  }else{
								  alert("No se pudo editar, consulte con el administrador de la página"+ data);
                              
							  }
							  
						});
					
					}
					
					
					});
				$("a.baja_link").live('click', function(){
					
					//alert("bajar");
					var pru = $(this);
					posicion = parseInt($(this).parents("tr").find("td").eq(0).html());
					
					href = $(this).parents("tr").find("td").eq(1).html();
					valor =$(this).parents("tr").find("td").eq(2).html();
					id = $(this).parents("tr").find("input").eq(0).val();
					pos = parseInt($(this).parents("tr").get(0).rowIndex-1);
					//alert(pos);  
					 $.get("../controlador/ctrl_link.php", 
							  { logic: 6, link: id, posicion: pos, id_sector : <?php echo $id_sector; ?> },
  							  function(data){
                         
						      if(data==1){
								  
						 
						
						
							
							$("#link_row_"+posicion).next().after($("#link_row_"+posicion));
						
							  
							  }else{
								  alert("No se pudo editar, consulte con el administrador de la página"+ data);
                              
							  }
							  
						});
					
					
					});
				
				$("a.elimina_link").live('click', function(){
					  href = $(this).parents("tr").find("td").eq(1).html();
					  id = $(this).parents("tr").find("input").eq(0).val();
					  
					  var pru = $(this);
					 jConfirm('¿Está seguro que desea eliminar de forma permanente a este link de la lista?', 'Eliminar Registro', function(r) {
    						
							if(r==true){
						
							 $.get("../controlador/ctrl_link.php", 
							  { logic: 3, link: id, id_sector : <?php echo $id_sector; ?>},
  							  function(data){
                              //alert("Data Loaded: " + data);
                              if(data==1){
							  //alert("Se elimino: " + data);
                              
							  pru.parents("tr").fadeOut("slow", function(){$(this).remove();});
							  }else{
								  alert("No se pudo eliminar, consulte con el administrador de la página");
                              
							  }
							  
							  });
					  
						
							}
					 });
					   
					});
					
					
				$("#nuevo_link").click(function(){
					//ENIVAR DATOS PARA NUEVO LINK	
					
					var href= $("#href").val();
					var valor= $("#valor").val();
					var sector= "";
					
					 	var n = $('tr', $("#tabla_link") ).length;
						n=n-1;
						
						$.get("../controlador/ctrl_link.php", 
							  { logic: 1, href: href, valor: valor, sector: 1, posicion: n, id_sector : <?php echo $id_sector; ?>},
  							  function(data){
                              //alert("Data Loaded: " + data);
                             var arr = data.split('-');
							 if(arr[0]=="1"){
							  
                              $("#tabla_link").append("<tr id='link_row_"+n+"'> <td>"+n+"</td> <td>"+href+"</td> <td>"+valor+"</td><td><a  class='elimina_link'><img src='images/b_drop.png' title='Eliminar' style='float:right;'/><a  class='baja_link'><img src='images/arrow_down.png' title='Bajar' style='float:right;'/></a>       									<a  class='sube_link'><img src='images/arrow_up.png' title='Subir' style='float:right;'/></a></a></td> <input type='hidden' value='"+arr[1]+"' /> </tr>");
							 // pru.parents("tr").fadeOut("slow", function(){$(this).remove();});
							  }else{
								  alert("No se pudo agregar, consulte con el administrador de la página");
                              
							  }
							  
							  });
					
					
					 
				});
});