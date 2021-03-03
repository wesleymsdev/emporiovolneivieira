 <div class="logo">
     <picture>
         <source srcset="{{asset('img/logotipos/100x100_armazem_vieira.png')}}" media="(min-width: 1921px)">
         <source srcset="{{asset('img/logotipos/90x90_armazem_vieira.png')}}" media="(min-width: 1440px)">
         <source srcset="{{asset('img/logotipos/80x80_armazem_vieira.png')}}" media="(min-width: 768px)">
         <source srcset="{{asset('img/logotipos/70x70_armazem_vieira.png')}}" media="(min-width: 320px)">
         <img src="{{asset('img/logotipos/logo-armazem-vieira.png')}}" style="width: auto;" alt="Armazem Vieira Logotipo" />
     </picture>
 </div>
 <!--Header Icon Menu Mobile -->
 <div id="btn-menu" class="menu">
     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="17.946" viewBox="0 0 24 17.946">
         <path d="M23,124.739H1a1.036,1.036,0,0,1,0-2.071H23a1.036,1.036,0,0,1,0,2.071Zm0,0" transform="translate(0 -114.73)" fill="#ffffff" />
         <path d="M23,2.071H1A1.018,1.018,0,0,1,0,1.035,1.018,1.018,0,0,1,1,0H23a1.018,1.018,0,0,1,1,1.035A1.018,1.018,0,0,1,23,2.071Zm0,0" fill="#ffffff" />
         <path d="M23,247.4H1a1.036,1.036,0,0,1,0-2.071H23a1.036,1.036,0,0,1,0,2.071Zm0,0" transform="translate(0 -229.457)" fill="#ffffff" />
     </svg>
 </div>
 <!--header menu desktop web Inicio -->
 <nav class="menu-desktop">
     <ul>
         <li>
             <a href="{{url('/')}}">Inicio</a>
         </li>
         <li>
             <a href="{{url('history')}}">História</a>
         </li>
         <li>
             <a href="{{url('products')}}">Produtos</a>
         </li>
         <li>
             <a href="{{url('consulting')}}">Consultoria</a>
         </li>
         <li>
             <a href="{{url('suppliers')}}">Vinícolas</a>
         </li>
         <li>
             <a href="{{url('contact')}}">Contatos</a>
         </li>

         <!--<li>
            <a href="login.html">Login</a>
          </li>-->
     </ul>
 </nav>