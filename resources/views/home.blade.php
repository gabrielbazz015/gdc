<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GDC - Gerenciamento de Carrinho</title>


    <!-- Bootstrap 5 -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- Bootstrap Icons -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <style>

        /* ================= GERAL ================= */

        html {
            scroll-behavior: smooth;
        }

        body {

            min-height: 100vh;

            margin: 0;

            color: #212529;

            /*
            FUNDO DA SALA SESI
            */

            background-image:
                linear-gradient(
                    rgba(10, 20, 45, 0.42),
                    rgba(10, 20, 45, 0.42)
                ),
                url("{{ asset('images/fundo-sesi.png') }}");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            background-repeat: no-repeat;

        }


        /* ================= NAVBAR ================= */

        .navbar-gdc {

            background: transparent !important;

            border-bottom: none;

            padding-top: 15px;

            padding-bottom: 15px;

        }


        .logo-gdc {

            height: 55px;

            width: auto;

            object-fit: contain;

            display: block;

        }


        .nav-link {

            font-weight: 600;

            color: white !important;

            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.65);

            transition: 0.2s;

        }


        .nav-link:hover {

            color: #ddd8ff !important;

            transform: translateY(-1px);

        }


        /* ================= BOTÃO LOGIN ================= */

        .btn-login {

            border: 1px solid white;

            color: white;

            background: rgba(99, 85, 232, 0.70);

            backdrop-filter: blur(6px);

            border-radius: 8px;

            font-weight: 600;

        }


        .btn-login:hover {

            background: #6355e8;

            color: white;

            border-color: #6355e8;

        }


        /* ================= HERO ================= */

        /*
        O HERO AGORA É TRANSPARENTE.
        A imagem da sala continua aparecendo
        atrás dele.
        */

        .hero {

            background: transparent;

            color: white;

            padding: 80px 0 90px 0;

        }


        .hero h1 {

            font-size: 52px;

            font-weight: 800;

            line-height: 1.05;

            text-shadow:
                0 3px 10px rgba(0, 0, 0, 0.55);

        }


        .hero p {

            font-size: 18px;

            opacity: 1;

            text-shadow:
                0 2px 7px rgba(0, 0, 0, 0.65);

        }


        /* ================= BADGE ================= */

        .hero .badge {

            box-shadow:
                0 5px 15px rgba(0, 0, 0, 0.20);

        }


        /* ================= BOTÃO HERO ================= */

        .btn-hero {

            background: white;

            color: #6355e8;

            font-weight: 600;

            border: none;

            border-radius: 10px;

            box-shadow:
                0 8px 20px rgba(0, 0, 0, 0.20);

        }


        .btn-hero:hover {

            background: #f1f1f1;

            color: #5144d0;

            transform: translateY(-2px);

        }


        /* ================= ÍCONE NOTEBOOK ================= */

        .hero-laptop {

            font-size: 180px;

            opacity: 0.95;

            color: white;

            filter:
                drop-shadow(0 8px 12px rgba(0, 0, 0, 0.40));

        }


        /* ================= SECTION ================= */

        .functions-section {

            padding-top: 50px;

            padding-bottom: 70px;

        }


        .section-title {

            font-weight: 800;

            color: white;

            text-shadow:
                0 3px 10px rgba(0, 0, 0, 0.65);

        }


        .section-subtitle {

            color: white !important;

            text-shadow:
                0 2px 7px rgba(0, 0, 0, 0.65);

        }


        /* ================= CARDS ================= */

        .feature-card {

            border: none;

            border-radius: 18px;

            transition: 0.25s;

            height: 100%;

            background: rgba(255, 255, 255, 0.94);

            backdrop-filter: blur(8px);

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.20);

        }


        .feature-card:hover {

            transform: translateY(-6px);

            box-shadow:
                0 15px 35px rgba(0, 0, 0, 0.28) !important;

        }


        .icon-box {

            width: 55px;

            height: 55px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 14px;

            background: #eeeaff;

            color: #6355e8;

            font-size: 25px;

        }


        /* ================= BOTÕES DOS CARDS ================= */

        .feature-card .btn {

            border-radius: 9px;

            font-weight: 600;

        }


        /* ================= FOOTER ================= */

        footer {

            background: rgba(24, 24, 32, 0.92);

            backdrop-filter: blur(10px);

            color: #aaa;

            margin-top: 20px;

        }


        footer strong {

            color: white;

        }


        /* ================= ANIMA??ES ================= */

        @media (prefers-reduced-motion: no-preference) {
            .animate-in {
                opacity: 0;
                transform: translateY(18px);
                animation: fade-up .7s ease-out forwards;
            }

            .functions-section .row > .animate-in:nth-child(2) { animation-delay: .15s; }
            .functions-section .row > .animate-in:nth-child(3) { animation-delay: .3s; }

            .hero-laptop {
                animation: float-laptop 3s ease-in-out infinite;
            }

            @keyframes fade-up {
                to { opacity: 1; transform: translateY(0); }
            }

            @keyframes float-laptop {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-12px); }
            }
        }

        /* ================= RESPONSIVO ================= */

        @media (max-width: 768px) {

            .hero {

                padding: 60px 0;

            }

            .hero h1 {

                font-size: 38px;

            }

            .hero-laptop {

                font-size: 120px;

            }

            .nav-link {

                text-shadow:
                    0 2px 5px rgba(0, 0, 0, 0.8);

            }

        }

    </style>

</head>


<body>


    <!-- ================= NAVBAR ================= -->

    <nav class="navbar navbar-expand-lg navbar-gdc">

        <div class="container py-2">


            <!-- LOGO GDC -->

            <a
                class="navbar-brand"
                href="{{ route('home') }}"
            >

                <img
                    src="{{ asset('images/gdc.png') }}"
                    alt="Logo GDC"
                    class="logo-gdc"
                >

            </a>


            <!-- MENU MOBILE -->

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu"
                aria-controls="menu"
                aria-expanded="false"
                aria-label="Abrir menu"
            >

                <span class="navbar-toggler-icon"></span>

            </button>


            <!-- MENU -->

            <div
                class="collapse navbar-collapse"
                id="menu"
            >

                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">


                    <!-- INÍCIO -->

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="{{ route('home') }}"
                        >

                            Início

                        </a>

                    </li>


                    <!-- EMPRÉSTIMO -->

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="{{ route('emprestimo') }}"
                        >

                            Empréstimo

                        </a>

                    </li>


                    <!-- NOTEBOOKS -->

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="{{ route('contagem.notebooks') }}"
                        >

                            Notebooks

                        </a>

                    </li>


                    <!-- RECLAME CONOSCO -->

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="{{ route('reclame.aqui') }}"
                        >

                            Reclame Conosco

                        </a>

                    </li>


                    <!-- LOGIN -->

                   @if (session('usuario_id'))

    <div class="d-flex align-items-center gap-3">

        <span class="text-white fw-semibold">
            <i class="bi bi-person-circle me-1"></i>
            {{ session('usuario_nome') }}
        </span>

        <form action="{{ route('logout') }}" method="POST" class="m-0">
            @csrf

            <button
                type="submit"
                class="btn btn-outline-light btn-sm"
            >
                <i class="bi bi-box-arrow-right me-1"></i>
                Sair
            </button>
        </form>

    </div>

@else

    <a
        href="{{ route('login') }}"
        class="btn btn-light"
    >
        <i class="bi bi-box-arrow-in-right me-1"></i>
        Entrar
    </a>

@endif

                        </a>

                    </li>


                </ul>

            </div>

        </div>

    </nav>



    <!-- ================= HERO ================= -->

    <section class="hero">

        <div class="container">

            <div class="row align-items-center">


                <!-- TEXTO -->

                <div class="col-lg-7 animate-in">

                    <span class="badge bg-light text-dark mb-3 px-3 py-2">

                        Sistema de Gerenciamento

                    </span>


                    <h1>

                        Mais controle

                        <br>

                        mais praticidade.

                    </h1>


                    <p class="mt-3 mb-4">

                        O GDC facilita o controle dos carrinhos,
                        empréstimos e notebooks do SESI.

                    </p>


                    <a
                        href="{{ route('emprestimo') }}"
                        class="btn btn-hero btn-lg px-4"
                    >

                        <i class="bi bi-cart-check me-2"></i>

                        Solicitar Empréstimo

                    </a>

                </div>


                <!-- ÍCONE NOTEBOOK -->

                <div class="col-lg-5 text-center mt-5 mt-lg-0 animate-in">

                    <i
                        class="bi bi-laptop hero-laptop"
                    ></i>

                </div>


            </div>

        </div>

    </section>



    <!-- ================= PRINCIPAIS FUNÇÕES ================= -->

    <section class="container functions-section">


        <div class="text-center mb-5">

            <h2 class="section-title">

                O que você precisa fazer?

            </h2>


            <p class="section-subtitle">

                Acesse rapidamente as principais funções do GDC.

            </p>

        </div>



        <div class="row g-4">


            <!-- EMPRÉSTIMO -->

            <div class="col-md-4 animate-in">

                <div class="card feature-card shadow-sm p-4">


                    <div class="icon-box mb-4">

                        <i class="bi bi-cart-check"></i>

                    </div>


                    <h4 class="fw-bold">

                        Solicitar Empréstimo

                    </h4>


                    <p class="text-secondary">

                        Solicite um carrinho de notebooks
                        informando a data, horário e finalidade.

                    </p>


                    <a
                        href="{{ route('emprestimo') }}"
                        class="btn btn-outline-primary mt-auto"
                    >

                        Solicitar

                    </a>


                </div>

            </div>



            <!-- NOTEBOOKS -->

            <div class="col-md-4 animate-in">

                <div class="card feature-card shadow-sm p-4">


                    <div class="icon-box mb-4">

                        <i class="bi bi-laptop"></i>

                    </div>


                    <h4 class="fw-bold">

                        Ver Notebooks

                    </h4>


                    <p class="text-secondary">

                        Consulte a quantidade de notebooks
                        disponíveis e em utilização.

                    </p>


                    <a
                        href="{{ route('contagem.notebooks') }}"
                        class="btn btn-outline-primary mt-auto"
                    >

                        Ver Disponibilidade

                    </a>


                </div>

            </div>



            <!-- RECLAMAÇÃO -->

            <div class="col-md-4 animate-in">

                <div class="card feature-card shadow-sm p-4">


                    <div class="icon-box mb-4">

                        <i class="bi bi-chat-left-text"></i>

                    </div>


                    <h4 class="fw-bold">

                        Reclame Conosco

                    </h4>


                    <p class="text-secondary">

                        Informe problemas ou situações
                        relacionadas aos equipamentos.

                    </p>


                    <a
                        href="{{ route('reclame.aqui') }}"
                        class="btn btn-outline-primary mt-auto"
                    >

                        Registrar Problema

                    </a>


                </div>

            </div>


        </div>

    </section>


    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>


</body>

</html>
