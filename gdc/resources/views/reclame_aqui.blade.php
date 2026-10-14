<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Reclame Aqui - GDC</title>


    <!-- Bootstrap -->

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

        /* =========================
           GERAL
        ========================= */

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
                    rgba(10, 20, 45, 0.48),
                    rgba(10, 20, 45, 0.48)
                ),
                url("{{ asset('images/fundo-sesi.png') }}");

            background-size: cover;

            background-position: center;

            background-attachment: fixed;

            background-repeat: no-repeat;

        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar-gdc {

            background: transparent !important;

            border-bottom: none;

            box-shadow: none;

            padding-top: 15px;

            padding-bottom: 15px;

        }


        .logo-gdc {

            height: 55px;

            width: auto;

            object-fit: contain;

            display: block;

        }


        .nav-link-gdc {

            color: white;

            font-size: 14px;

            font-weight: 600;

            text-decoration: none;

            transition: 0.2s ease;

            text-shadow:
                0 2px 6px rgba(0, 0, 0, 0.65);

        }


        .nav-link-gdc:hover {

            color: #ddd8ff;

        }


        /* =========================
           CABEÇALHO
        ========================= */

        .page-header {

            margin-top: 50px;

            margin-bottom: 30px;

        }


        .title-icon {

            width: 58px;

            height: 58px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            background: rgba(255, 255, 255, 0.92);

            color: #6355e8;

            border-radius: 16px;

            font-size: 26px;

            margin-bottom: 15px;

            box-shadow:
                0 7px 18px rgba(0, 0, 0, 0.20);

        }


        .page-title {

            font-size: 32px;

            font-weight: 800;

            color: white;

            margin-bottom: 8px;

            text-shadow:
                0 3px 10px rgba(0, 0, 0, 0.65);

        }


        .page-subtitle {

            color: white;

            margin-bottom: 0;

            font-size: 15px;

            text-shadow:
                0 2px 7px rgba(0, 0, 0, 0.65);

        }


        /* =========================
           CARD
        ========================= */

        .reclame-card {

            max-width: 700px;

            background: rgba(255, 255, 255, 0.96);

            backdrop-filter: blur(8px);

            border: 1px solid rgba(255, 255, 255, 0.70);

            border-radius: 20px;

            box-shadow:
                0 15px 35px rgba(0, 0, 0, 0.22);

            overflow: hidden;

        }


        .card-header-gdc {

            padding: 24px 28px;

            border-bottom: 1px solid #eeeeF2;

            background: rgba(255, 255, 255, 0.98);

        }


        .card-title-gdc {

            font-size: 20px;

            font-weight: 750;

            color: #222;

            margin-bottom: 5px;

        }


        .card-subtitle-gdc {

            color: #888;

            font-size: 13px;

            margin-bottom: 0;

        }


        /* =========================
           FORMULÁRIO
        ========================= */

        .form-label {

            font-size: 13px;

            font-weight: 700;

            color: #34343d;

            margin-bottom: 8px;

        }


        .input-group-text {

            background: #f8f8fb;

            border-color: #dee0e6;

            color: #6355e8;

        }


        .form-control {

            min-height: 50px;

            border-color: #dee0e6;

            border-radius: 10px;

            font-size: 14px;

            transition: 0.2s ease;

        }


        .input-group .form-control {

            border-radius: 0 10px 10px 0;

        }


        .input-group .input-group-text {

            border-radius: 10px 0 0 10px;

        }


        textarea.form-control {

            min-height: 150px;

            resize: vertical;

        }


        .form-control::placeholder {

            color: #aaa;

        }


        .form-control:focus {

            border-color: #6355e8;

            box-shadow:
                0 0 0 0.2rem rgba(99, 85, 232, 0.12);

        }


        /* =========================
           BOTÃO
        ========================= */

        .btn-gdc {

            background: linear-gradient(
                135deg,
                #6355e8,
                #776bea
            );

            border: none;

            color: white;

            min-height: 52px;

            border-radius: 11px;

            font-weight: 700;

            box-shadow:
                0 7px 18px rgba(99, 85, 232, 0.20);

            transition: all 0.2s ease;

        }


        .btn-gdc:hover {

            background: linear-gradient(
                135deg,
                #5749d7,
                #695dde
            );

            color: white;

            transform: translateY(-1px);

            box-shadow:
                0 10px 23px rgba(99, 85, 232, 0.30);

        }


        /* =========================
           AVISO
        ========================= */

        .info-box {

            background: #f8f7ff;

            border: 1px solid #e5e2ff;

            border-radius: 12px;

            padding: 14px 16px;

            color: #666;

            font-size: 13px;

        }


        .info-box i {

            color: #6355e8;

        }


        /* =========================
           RESPONSIVO
        ========================= */

        @media (max-width: 768px) {

            .logo-gdc {

                height: 48px;

            }


            .navbar-links {

                gap: 15px !important;

            }


            .nav-link-gdc {

                font-size: 13px;

            }


            .page-header {

                margin-top: 35px;

            }


            .page-title {

                font-size: 26px;

            }

        }

    </style>

</head>


<body>


    <!-- =========================
         NAVBAR
    ========================= -->

    <nav class="navbar navbar-gdc py-3">

        <div class="container">

            <div
                class="d-flex align-items-center justify-content-between w-100"
            >


                <!-- LOGO -->

                <a
                    href="{{ route('home') }}"
                    class="text-decoration-none"
                >

                    <img
                        src="{{ asset('images/gdc.png') }}"
                        alt="Logo GDC"
                        class="logo-gdc"
                    >

                </a>


                <!-- LINKS -->

                <div
                    class="d-flex align-items-center gap-4 navbar-links"
                >


                    <a
                        href="{{ route('home') }}"
                        class="nav-link-gdc"
                    >

                        <i class="bi bi-house me-1"></i>

                        Home

                    </a>


                    <a
                        href="{{ route('emprestimo') }}"
                        class="nav-link-gdc"
                    >

                        <i class="bi bi-calendar-check me-1"></i>

                        Empréstimo

                    </a>


                    <a
                        href="{{ route('contagem.notebooks') }}"
                        class="nav-link-gdc"
                    >

                        <i class="bi bi-laptop me-1"></i>

                        Notebooks

                    </a>


                </div>

            </div>

        </div>

    </nav>



    <!-- =========================
         CONTEÚDO
    ========================= -->

    <main class="container pb-5">


        <!-- =========================
             CABEÇALHO
        ========================= -->

        <div class="page-header text-center">


            <div class="title-icon">

                <i class="bi bi-chat-left-text"></i>

            </div>


            <h1 class="page-title">

                Reclame Conosco

            </h1>


            <p class="page-subtitle">

                Encontrou algum problema?
                Envie sua reclamação para nossa equipe.

            </p>


        </div>



        <!-- =========================
             CARD DO FORMULÁRIO
        ========================= -->

        <div class="reclame-card mx-auto">


            <!-- CABEÇALHO DO CARD -->

            <div class="card-header-gdc">

                <h2 class="card-title-gdc">

                    <i
                        class="bi bi-exclamation-circle me-2 text-primary"
                    ></i>

                    Registrar uma reclamação

                </h2>


                <p class="card-subtitle-gdc">

                    Descreva o problema ocorrido para que ele
                    possa ser analisado.

                </p>

            </div>



            <!-- FORMULÁRIO -->

            <div class="p-4 p-md-5">


                <form>


                    <!-- ASSUNTO -->

                    <div class="mb-4">


                        <label
                            for="assunto"
                            class="form-label"
                        >

                            Assunto da reclamação

                        </label>


                        <div class="input-group">


                            <span class="input-group-text">

                                <i class="bi bi-tag"></i>

                            </span>


                            <input
                                type="text"
                                class="form-control"
                                id="assunto"
                                placeholder="Digite o assunto da reclamação"
                                required
                            >


                        </div>

                    </div>



                    <!-- RECLAMAÇÃO -->

                    <div class="mb-4">


                        <label
                            for="reclamacao"
                            class="form-label"
                        >

                            Descrição do problema

                        </label>


                        <div class="input-group">


                            <span
                                class="input-group-text align-items-start pt-3"
                            >

                                <i class="bi bi-chat-left-text"></i>

                            </span>


                            <textarea
                                class="form-control"
                                id="reclamacao"
                                rows="6"
                                placeholder="Descreva detalhadamente o problema ocorrido..."
                                required
                            ></textarea>


                        </div>

                    </div>



                    <!-- AVISO -->

                    <div class="info-box mb-4">

                        <i class="bi bi-info-circle me-2"></i>

                        Tente informar detalhes como o carrinho utilizado,
                        horário e o problema encontrado. Isso ajudará na análise.

                    </div>



                    <!-- BOTÃO -->

                    <a
                        href="{{ route('reclame.confirmacao') }}"
                        class="btn btn-gdc w-100"
                    >

                        <i class="bi bi-send me-2"></i>

                        Enviar Reclamação

                    </a>


                </form>


            </div>

        </div>


    </main>



    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>


</body>

</html>
