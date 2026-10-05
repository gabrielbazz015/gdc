<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Empréstimo Confirmado - GDC</title>

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

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
        }

        .confirmacao-container {
            min-height: 100vh;

            display: flex;
            flex-direction: column;

            background:
                linear-gradient(
                    rgba(20, 20, 35, 0.68),
                    rgba(55, 45, 130, 0.65)
                ),
                url('/images/fundo-login.jpg') center/cover no-repeat;
        }

        /* NAVBAR */

        .navbar-gdc {
            padding: 20px 40px;
            position: relative;
        }

        .nav-link-gdc {
            color: rgba(255,255,255,0.9);
            text-decoration: none;

            font-size: 14px;
            font-weight: 600;
            letter-spacing: .5px;

            transition: .2s;
        }

        .nav-link-gdc:hover {
            color: white;
            opacity: .75;
        }

        /* LOGO */

        .logo-gdc {
            position: absolute;

            left: 50%;
            transform: translateX(-50%);

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-gdc img {
            height: 60px;
            width: auto;

            object-fit: contain;
            display: block;

            filter: drop-shadow(
                0 5px 15px rgba(0,0,0,.25)
            );
        }

        /* ÁREA */

        .confirmacao-area {
            flex: 1;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 40px 20px;
        }

        /* CARD */

        .confirmacao-card {
            width: 100%;
            max-width: 480px;

            background: rgba(255,255,255,.97);

            border-radius: 24px;

            overflow: hidden;

            box-shadow:
                0 25px 70px rgba(0,0,0,.30);

            text-align: center;
        }

        .card-top {
            height: 7px;

            background:
                linear-gradient(
                    90deg,
                    #6355e8,
                    #8d82ff
                );
        }

        .card-content {
            padding: 45px 38px;
        }

        /* ÍCONE */

        .icone-confirmacao {
            width: 80px;
            height: 80px;

            margin: 0 auto 25px;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #eeeaff;

            color: #6355e8;

            font-size: 38px;
        }

        /* TÍTULO */

        .titulo {
            font-size: 28px;
            font-weight: 800;

            color: #20202a;

            margin-bottom: 10px;
        }

        .texto {
            color: #777;

            font-size: 14px;

            line-height: 1.6;

            margin-bottom: 25px;
        }

        /* STATUS */

        .status {
            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 10px 18px;

            border-radius: 30px;

            background: #fff4d6;

            color: #9a6b00;

            font-size: 13px;

            font-weight: 700;

            margin-bottom: 30px;
        }

        /* BOTÃO */

        .btn-gdc {
            width: 100%;

            height: 52px;

            border: none;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #6355e8,
                    #776bea
                );

            color: white;

            font-size: 15px;

            font-weight: 700;

            text-decoration: none;

            display: flex;

            align-items: center;

            justify-content: center;

            transition: .2s;

            box-shadow:
                0 8px 20px rgba(99,85,232,.25);
        }

        .btn-gdc:hover {
            transform: translateY(-2px);

            color: white;

            box-shadow:
                0 12px 25px rgba(99,85,232,.35);
        }

        /* RODAPÉ */

        .card-footer-gdc {
            background: #f7f7fa;

            border-top: 1px solid #eeeeF2;

            padding: 14px;

            text-align: center;

            font-size: 11px;

            color: #999;
        }

        /* RESPONSIVO */

        @media (max-width: 600px) {

            .navbar-gdc {
                padding: 18px 20px;
            }

            .logo-gdc img {
                height: 48px;
            }

            .card-content {
                padding: 35px 23px;
            }

            .titulo {
                font-size: 24px;
            }

        }

    </style>

</head>


<body>

<div class="confirmacao-container">


    <!-- NAVBAR -->

    <nav class="navbar-gdc">

        <div class="d-flex justify-content-between align-items-center">

            <a
                href="{{ route('home') }}"
                class="nav-link-gdc"
            >

                <i class="bi bi-arrow-left me-1"></i>

                VOLTAR

            </a>


            <a
                href="{{ route('home') }}"
                class="logo-gdc"
            >

                <img
                    src="{{ asset('images/gdc.png') }}"
                    alt="Logo GDC"
                >

            </a>


            <a
                href="{{ route('reclame.aqui') }}"
                class="nav-link-gdc"
            >

                RECLAME AQUI

            </a>

        </div>

    </nav>


    <!-- CONFIRMAÇÃO -->

    <main class="confirmacao-area">

        <div class="confirmacao-card">

            <div class="card-top"></div>


            <div class="card-content">


                <!-- ÍCONE -->

                <div class="icone-confirmacao">

                    <i class="bi bi-check-lg"></i>

                </div>


                <!-- TÍTULO -->

                <h1 class="titulo">

                    Solicitação enviada!

                </h1>


                <p class="texto">

                    Sua solicitação de empréstimo foi registrada
                    com sucesso no sistema GDC.

                </p>


                <!-- STATUS -->

                <div class="status">

                    <i class="bi bi-clock"></i>

                    Aguardando aprovação

                </div>


                <!-- BOTÃO -->

                <a
                    href="{{ route('home') }}"
                    class="btn-gdc"
                >

                    <i class="bi bi-house me-2"></i>

                    Voltar para o início

                </a>


            </div>


            <!-- RODAPÉ -->

            <div class="card-footer-gdc">

                GDC • Gerenciamento de Carrinho

            </div>

        </div>

    </main>

</div>

</body>

</html>
