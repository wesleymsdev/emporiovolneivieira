 <div class="menu-left">
     <div class="top">

     </div>
     <nav>
         <ul>
             <span class="title">CATEGORIAS</span>

             <li>
                 <img src=" {{ asset('img/icones/category.svg') }}" width="24" height="24" alt="new-category icon" />
                 <a href="">Categorias</a>
             </li>
             <span class="title">PRODUTOS</span>

             <li>
                 <img src="{{ asset('img/icones/list.svg') }}" width="24" height="24" alt="catalogo icon" />
                 <a href="">Catálogo de produtos</a>
             </li>
             <span class="title">FORNECEDORES</span>

             <li>
                 <img src="{{ asset('img/icones/list.svg') }}" width="24" height="24" alt="fornecedor icon" />
                 <a href="">Relação de Fornecedores</a>
             </li>
             <span class="title">USUÁRIOS</span>

             <li>
                 <img src="{{ asset('img/icones/user.svg') }}" width="24" height="24" alt="new-user icon" />
                 <a href="">Usuários Cadastrados</a>
             </li>
         </ul>

     </nav>
     <div class="logout">

         <p>Wesley Franca</p>
         <small>Manager</small>

         <div class="log">
             <!-- Authentication -->
             <form method="POST" action="">
                 @csrf
                 <img src="{{ asset('img/icones/exit.svg') }}" width="24" height="24" alt="exit icon" />
                 <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                     <a onclick="event.preventDefault();
                                        this.closest('form').submit();">Sair</a>
                 </x-responsive-nav-link>
             </form>
         </div>

     </div>
 </div>