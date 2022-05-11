@extends ('layouts/main')

@section ('container')
    <h1> Formulário </h1>

    <div class = "container" >
        
        <div class = "row" >

            <div class = "col" >

                <div class = "card" >

                    <div class = "card-header" > Cadastrar </div>

                    <div class = "card-body" > 

                        <div class="container px-5 my-5">
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="pesoKg" type="text" placeholder="Peso (Kg)" data-sb-validations="required" />
                                    <label for="pesoKg">Peso (Kg)</label>
                                    <div class="invalid-feedback" data-sb-feedback="pesoKg:required">Peso (Kg) is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="alturaCm" type="text" placeholder="Altura (cm)" data-sb-validations="required" />
                                    <label for="alturaCm">Altura (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="alturaCm:required">Altura (cm) is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="peitoralCm" type="text" placeholder="Peitoral (cm)" data-sb-validations="required" />
                                    <label for="peitoralCm">Peitoral (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="peitoralCm:required">Peitoral (cm) is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="bracoEsquerdoCm" type="text" placeholder="Braço esquerdo (cm)" data-sb-validations="required" />
                                    <label for="bracoEsquerdoCm">Braço esquerdo (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="bracoEsquerdoCm:required">Braço esquerdo (cm) is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="bracoDireitoCm" type="text" placeholder="Braço direito (cm)" data-sb-validations="required" />
                                    <label for="bracoDireitoCm">Braço direito (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="bracoDireitoCm:required">Braço direito (cm) is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="abdomenCm" type="text" placeholder="Abdómen (cm)" data-sb-validations="required" />
                                    <label for="abdomenCm">Abdómen (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="abdomenCm:required">Abdómen (cm) is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="cinturaCm" type="text" placeholder="Cintura (cm)" data-sb-validations="required" />
                                    <label for="cinturaCm">Cintura (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="cinturaCm:required">Cintura (cm) is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="quadrilCm" type="text" placeholder="Quadril (cm)" data-sb-validations="required" />
                                    <label for="quadrilCm">Quadril (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="quadrilCm:required">Quadril (cm) is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="coxaEsquerdaCm" type="text" placeholder="Coxa esquerda (cm)" data-sb-validations="required" />
                                    <label for="coxaEsquerdaCm">Coxa esquerda (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="coxaEsquerdaCm:required">Coxa esquerda (cm) is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="coxaDireitaCm" type="text" placeholder="Coxa direita (cm)" data-sb-validations="required" />
                                    <label for="coxaDireitaCm">Coxa direita (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="coxaDireitaCm:required">Coxa direita (cm) is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="panturrilhaEsquerdaCm" type="text" placeholder="Panturrilha esquerda (cm)" data-sb-validations="required" />
                                    <label for="panturrilhaEsquerdaCm">Panturrilha esquerda (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="panturrilhaEsquerdaCm:required">Panturrilha esquerda (cm) is required.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="panturrilhaDireitaCm" type="text" placeholder="Panturrilha direita (cm)" data-sb-validations="required" />
                                    <label for="panturrilhaDireitaCm">Panturrilha direita (cm)</label>
                                    <div class="invalid-feedback" data-sb-feedback="panturrilhaDireitaCm:required">Panturrilha direita (cm) is required.</div>
                                </div>
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

                    </div> <!-- Fim do BODY -->

                </div> <!-- fim do CARD -->

            </div> <!-- fim da COLUNA -->

        </div> <!-- fim da ROW-->
    
    </div> <!-- fim do CONTAINER -->

@endsection