<!-- inicio do titulo da pagina -->

                        </br><div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Cadastros</a></li>
                                            <li class="breadcrumb-item active">Comissão</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Cadastro de comissão por produto e convênio</h4>
                                </div>
                            </div>
                        </div>     


                    <!--fim do titulo da pagina -->

              
 <!-- conteudo da pagina -->

   <form> 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputTaxaMinima">Taxa mínima</label>
      <input type="number" class= "form-control" id="inputTaxaMinima"> 
    </div>
    <div class="form-group col-md-6">
      <label for="inputTaxaMaxima">Taxa máxima</label>
      <input type= "number" class="form-control" id="inputTaxaMaxima">
    </div>
  </div>

    <div class="form-group">
    <label for="inputCodigoConvenio2">Código do convênio</label>
    <input type="number" name="CodigoConvenio" class="form-control" id="inputCodigoConvenio">
  </div>

    <div class="form-group">
    <label for="inputCodigoProduto2">Código do produto</label>
    <input type="number" name="CodigoProduto" class="form-control" id="inputCodigoProduto">
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPrazoMinimo">Prazo mínimo</label>
      <input type="number" class= "form-control" id="inputPrazoMinimo"> 
    </div>
    <div class="form-group col-md-6">
      <label for="inputPrazoMaximo">Prazo máximo</label>
      <input type= "number" class="form-control" id="inputPrazoMaximo">
    </div>
  </div>

    <div class="form-group">
    <label for="inputCpfCnpj2">Percentual de comissão</label>
    <input type="number" class="form-control" id="inputCpfCnpj">
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNomeEmpresa4">Data de ínicio do cálculo</label>
      <input type="date" class= "form-control" id="inputNomeEmpresa4"> 
    </div>
    <div class="form-group col-md-6">
      <label for="inputCodigoCoban">Data de fim do cálculo</label>
      <input type= "date" class="form-control" id="CodigoCoban">
    </div>
  </div>
  </form>

    
       </br> <tr> 
            <th> ativo? </th> 
        </tr></br>
   
  


  </br> <div>
     <input type="checkbox" id="switch1" checked data-switch="bool"/>
<label for="switch1" data-on-label="Sim" data-off-label="Não"></label> </br>
      

</br><button type="button" onclick="alert ('Cadastro de comissão por convênio enviado com sucesso!') " class="btn btn-success btn-rounded">Enviar cadastro de comissão por convênio</button></br>

<!-- fim do conteudo da pagina -->