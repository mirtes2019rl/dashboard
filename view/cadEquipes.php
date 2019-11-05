<!-- inicio do titulo da pagina -->

                        </br><div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Cadastros</a></li>
                                            <li class="breadcrumb-item active">Equipes</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Cadastro de equipes</h4>
                                </div>
                            </div>
                        </div>     


                    <!--fim do titulo da pagina -->

              
 <!-- conteudo da pagina -->

   <form> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTaxaMinima">CPF ou CNPJ</label>
      <input type="text" class= "form-control" id="inputTaxaMinima"> 
    </div>
    <div class="form-group col-md-6">
      <label for="inputTaxaMaxima">Nome do promotor</label>
      <input type= "text" class="form-control" id="inputTaxaMaxima">
    </div>
  </div>

    <div class="form-group">
    <label for="inputCodigoConvenio2">Código do convênio</label>
    <input type="number" name="CodigoConvenio" class="form-control" id="inputCodigoConvenio">
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPrazoMinimo">telefone</label>
      <input type="tel" class= "form-control" id="inputPrazoMinimo"> 
    </div>
    <div class="form-group col-md-6">
      <label for="inputPrazoMaximo">celular</label>
      <input type= "cel" class="form-control" id="inputPrazoMaximo">
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPrazoMinimo">Data de nascimento</label>
      <input type="date" class= "form-control" id="inputPrazoMinimo"> 
    </div>
    <div class="form-group col-md-6">
      <label for="inputPrazoMaximo">Sexo</label>
      <input type= "sexo" class="form-control" id="inputPrazoMaximo">
    </div>
  </div>

       </br> <tr> 
            <th> ativo? </th> 
        </tr></br>
   
  


  </br> <div>
     <input type="checkbox" id="switch1" checked data-switch="bool"/>
<label for="switch1" data-on-label="Sim" data-off-label="Não"></label> </br>
      

</br><button type="button" onclick="alert ('Cadastro de comissão por convênio enviado com sucesso!') " class="btn btn-success btn-rounded">Enviar cadastro de comissão por convênio</button></br>

<!-- fim do conteudo da pagina -->