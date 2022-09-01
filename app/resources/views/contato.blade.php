 @extends('partials/base')
 @section('titulo', 'Sobre nós')
 @section('conteudo')
     <form method="post">
         <div class="card">
             <h5 class="card-header">
                 <a href="{{ route('index') }}" class="text-dark text-decoration-none">
                     <i class="fas fa-arrow-left text-dark"></i> &nbsp;
                 </a>
                 Formulário de Contato
             </h5>
             <div class="card-body p-4 mt-2">
                 <div class="row">
                     <div class="col-12 col-md-6 px-5 d-flex align-items-center">
                         <div>
                             <h2>Qualquer dúvida envie para nós</h2>
                             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, expedita assumenda. Consequuntur porro suscipit velit eum quas expedita quae, incidunt, iure excepturi eius nemo officiis ab ipsam earum et minima!.</p>
                         </div>
                     </div>
                     <div class="col-12 col-md-6">
                         <div class="row">
                             <div class="col-12 col-md-6 mb-3">
                                 <label for="nome" class="form-label">Nome</label>
                                 <input type="nome" required placeholder="Insira um nome" class="form-control"
                                     name="nome" id="nome" aria-describedby="nome">
                             </div>
                             <div class="col-12 col-md-6 mb-3">
                                 <label for="email" class="form-label">E-mail</label>
                                 <input type="email" required placeholder="Insira um e-mail" class="form-control"
                                     name="email" id="email" aria-describedby="email">
                             </div>
                         </div>
                         <div class="mb-3">
                             <label for="endereco" class="form-label">Endereço</label>
                             <input rows="5" type="text" placeholder="Insira um endereço" class="form-control"
                                 name="endereco" id="endereco" aria-describedby="endereco">
                         </div>
                         <div class="mb-3">
                             <label for="observacao" class="form-label">Observação</label>
                             <textarea rows="5" placeholder="Insira uma observação" class="form-control" name="observacao" id="observacao"
                                 aria-describedby="endereco"></textarea>
                         </div>
                         <button type="submit" class="btn btn-block btn-success">
                             <i class="fas fa-paper-plane"></i> &nbsp; Enviar
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </form>
 @endsection
