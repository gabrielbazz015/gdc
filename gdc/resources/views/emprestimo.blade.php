<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Empréstimo - GDC</title>


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

            transition: 0.2s;

            text-shadow:
                0 2px 6px rgba(0, 0, 0, 0.65);

        }


        .nav-link-gdc:hover {

            color: #ddd8ff;

        }


        /* =========================
           TÍTULO DA PÁGINA
        ========================= */

        .page-header {

            margin-top: 45px;

            margin-bottom: 30px;

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

            text-shadow:
                0 2px 7px rgba(0, 0, 0, 0.65);

        }


        .title-icon {

            width: 50px;

            height: 50px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            background: rgba(255, 255, 255, 0.90);

            color: #6355e8;

            border-radius: 14px;

            font-size: 23px;

            margin-right: 12px;

            box-shadow:
                0 5px 15px rgba(0, 0, 0, 0.20);

        }


        /* =========================
           CARDS
        ========================= */

        .gdc-card {

            background: rgba(255, 255, 255, 0.95);

            backdrop-filter: blur(8px);

            border: 1px solid rgba(255, 255, 255, 0.60);

            border-radius: 18px;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.20);

        }


        .card-header-gdc {

            background: transparent;

            border-bottom: 1px solid #eeeeF2;

            padding: 24px 28px;

        }


        .card-title-gdc {

            font-size: 20px;

            font-weight: 750;

            margin: 0;

            color: #222;

        }


        .card-subtitle-gdc {

            font-size: 13px;

            color: #888;

            margin-top: 5px;

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


        .form-control,
        .form-select {

            min-height: 50px;

            border-color: #dee0e6;

            border-radius: 10px;

            font-size: 14px;

        }


        .input-group .form-control,
        .input-group .form-select {

            border-radius: 0 10px 10px 0;

        }


        .input-group .input-group-text {

            border-radius: 10px 0 0 10px;

        }


        textarea.form-control {

            min-height: 115px;

            resize: vertical;

        }


        .form-control:focus,
        .form-select:focus {

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
           TABELA
        ========================= */

        .table-container {

            overflow: hidden;

            border-radius: 14px;

            border: 1px solid #eeeeF2;

        }


        .table {

            margin-bottom: 0;

        }


        .table thead th {

            background: #f8f8fb;

            color: #555;

            font-size: 12px;

            font-weight: 750;

            text-transform: uppercase;

            letter-spacing: 0.4px;

            border-bottom: 1px solid #e8e8ee;

            padding: 15px;

            white-space: nowrap;

        }


        .table tbody td {

            padding: 16px 15px;

            font-size: 14px;

            color: #444;

            border-color: #eeeeF2;

        }


        .table-hover tbody tr:hover {

            background-color: #fafaff;

        }


        /* =========================
           BADGES
        ========================= */

        .badge-status {

            padding: 7px 11px;

            border-radius: 8px;

            font-size: 11px;

            font-weight: 700;

        }


        /* =========================
           RESPONSIVO
        ========================= */

        @media (max-width: 768px) {

            .page-header {

                margin-top: 30px;

            }


            .page-title {

                font-size: 26px;

            }


            .logo-gdc {

                height: 48px;

            }


            .navbar-links {

                gap: 15px !important;

                flex-wrap: wrap;

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

            <div class="d-flex align-items-center justify-content-between w-100">


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

                <div class="d-flex align-items-center gap-4 navbar-links">

                    <a
                        href="{{ route('home') }}"
                        class="nav-link-gdc"
                    >

                        <i class="bi bi-house me-1"></i>

                        Home

                    </a>


                    <a
                        href="{{ route('reclame.aqui') }}"
                        class="nav-link-gdc"
                    >

                        <i class="bi bi-chat-left-text me-1"></i>

                        Reclame Aqui

                    </a>

                </div>

            </div>

        </div>

    </nav>



    <!-- =========================
         CONTEÚDO
    ========================= -->

    <main class="container pb-5">


        <!-- CABEÇALHO -->

        <div class="page-header">

            <div class="d-flex align-items-center">

                <div class="title-icon">

                    <i class="bi bi-laptop"></i>

                </div>


                <div>

                    <h1 class="page-title">

                        Empréstimo de Carrinho

                    </h1>


                    <p class="page-subtitle">

                        Solicite um carrinho de notebooks para utilização.

                    </p>

                </div>

            </div>

        </div>



        <!-- =========================
             FORMULÁRIO
        ========================= -->

        <div class="gdc-card mb-5">

            <div class="card-header-gdc">

                <h2 class="card-title-gdc">

                    <i class="bi bi-calendar-plus me-2 text-primary"></i>

                    Nova solicitação

                </h2>


                <p class="card-subtitle-gdc">

                    Preencha os dados abaixo para agendar o empréstimo.

                </p>

            </div>


            <div class="p-4 p-md-4">


                <form
                    method="POST"
                    action="{{ route('emprestimo.store') }}"
                >

                    @csrf


                    <!-- USUÁRIO TEMPORÁRIO -->

                    <input
                        type="hidden"
                        name="id_usuario"
                        value="1"
                    >


                    <!-- RESPONSÁVEL TEMPORÁRIO -->

                    <input
                        type="hidden"
                        name="id_responsavel"
                        value="1"
                    >


                    <div class="row g-4">


                        <!-- CARRINHO -->

                        <div class="col-12">

                            <label
                                for="id_carrinho"
                                class="form-label"
                            >

                                Carrinho

                            </label>


                            <div class="input-group">

                                <span class="input-group-text">

                                    <i class="bi bi-cart3"></i>

                                </span>


                                <select
                                    class="form-select"
                                    id="id_carrinho"
                                    name="id_carrinho"
                                    required
                                >

                                    <option
                                        value=""
                                        selected
                                        disabled
                                    >

                                        Selecione o carrinho que deseja utilizar

                                    </option>


                                    <option value="1">

                                        Carrinho 1 — LMT

                                    </option>


                                    <option value="2">

                                        Carrinho 2 — LMT

                                    </option>


                                    <option value="3">

                                        Carrinho 3 — LMT

                                    </option>

                                </select>

                            </div>

                        </div>



                        <!-- DATA -->

                        <div class="col-md-6">

                            <label
                                for="data"
                                class="form-label"
                            >

                                Data do empréstimo

                            </label>


                            <div class="input-group">

                                <span class="input-group-text">

                                    <i class="bi bi-calendar-event"></i>

                                </span>


                                <input
                                    type="date"
                                    class="form-control"
                                    id="data"
                                    name="data"
                                    required
                                >

                            </div>

                        </div>



                        <!-- HORÁRIO -->

                        <div class="col-md-6">

                            <label
                                for="hora"
                                class="form-label"
                            >

                                Horário

                            </label>


                            <div class="input-group">

                                <span class="input-group-text">

                                    <i class="bi bi-clock"></i>

                                </span>


                                <input
                                    type="time"
                                    class="form-control"
                                    id="hora"
                                    name="hora"
                                    required
                                >

                            </div>

                        </div>



                        <!-- FINALIDADE -->

                        <div class="col-12">

                            <label
                                for="finalidade"
                                class="form-label"
                            >

                                Finalidade do empréstimo

                            </label>


                            <div class="input-group">

                                <span
                                    class="input-group-text align-items-start pt-3"
                                >

                                    <i class="bi bi-card-text"></i>

                                </span>


                                <textarea
                                    class="form-control"
                                    id="finalidade"
                                    name="finalidade"
                                    rows="4"
                                    placeholder="Informe para qual finalidade o carrinho será utilizado..."
                                    required
                                ></textarea>

                            </div>

                        </div>



                        <!-- BOTÃO -->

                        <div class="col-12">

                            <button
                                type="submit"
                                class="btn btn-gdc w-100"
                            >

                                <i class="bi bi-send me-2"></i>

                                Solicitar empréstimo

                            </button>

                        </div>


                    </div>

                </form>

            </div>

        </div>



        <!-- =========================
             TABELA
        ========================= -->

        <div class="gdc-card">

            <div class="card-header-gdc">

                <div
                    class="d-flex justify-content-between align-items-center flex-wrap gap-2"
                >


                    <div>

                        <h2 class="card-title-gdc">

                            <i class="bi bi-calendar-check me-2 text-primary"></i>

                            Empréstimos agendados

                        </h2>


                        <p class="card-subtitle-gdc">

                            Consulte as solicitações realizadas no sistema.

                        </p>

                    </div>


                    <!-- CONTADOR -->

                    <span class="badge bg-light text-dark border px-3 py-2">

                        <i class="bi bi-list-check me-1"></i>

                        {{ count($emprestimos) }} empréstimo(s)

                    </span>

                </div>

            </div>


            <div class="p-4">


                <div class="table-responsive table-container">

                    <table class="table table-hover align-middle">


                        <thead>

                            <tr>

                                <th>

                                    <i class="bi bi-calendar3 me-1"></i>

                                    Data

                                </th>


                                <th>

                                    <i class="bi bi-clock me-1"></i>

                                    Horário

                                </th>


                                <th>

                                    <i class="bi bi-cart3 me-1"></i>

                                    Carrinho

                                </th>


                                <th>

                                    Finalidade

                                </th>


                                <th>

                                    Status

                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @forelse($emprestimos as $emprestimo)


                                <tr>


                                    <!-- DATA -->

                                    <td class="fw-semibold">

                                        {{
                                            \Carbon\Carbon::parse(
                                                $emprestimo->data_retirada
                                            )->format('d/m/Y')
                                        }}

                                    </td>


                                    <!-- HORÁRIO -->

                                    <td>

                                        {{
                                            \Carbon\Carbon::parse(
                                                $emprestimo->data_retirada
                                            )->format('H:i')
                                        }}

                                    </td>


                                    <!-- CARRINHO -->

                                    <td>

                                        <span class="fw-semibold">

                                            Carrinho
                                            {{ $emprestimo->id_carrinho }}

                                        </span>

                                    </td>


                                    <!-- FINALIDADE -->

                                    <td>

                                        <span class="text-secondary">

                                            {{ $emprestimo->finalidade }}

                                        </span>

                                    </td>


                                    <!-- STATUS -->

                                    <td>


                                        @if($emprestimo->status == 'Solicitado')


                                            <span
                                                class="badge bg-warning text-dark badge-status"
                                            >

                                                <i
                                                    class="bi bi-hourglass-split me-1"
                                                ></i>

                                                Solicitado

                                            </span>


                                        @elseif($emprestimo->status == 'Aprovado')


                                            <span
                                                class="badge bg-success badge-status"
                                            >

                                                <i
                                                    class="bi bi-check-circle me-1"
                                                ></i>

                                                Aprovado

                                            </span>


                                        @elseif($emprestimo->status == 'Recusado')


                                            <span
                                                class="badge bg-danger badge-status"
                                            >

                                                <i
                                                    class="bi bi-x-circle me-1"
                                                ></i>

                                                Recusado

                                            </span>


                                        @else


                                            <span
                                                class="badge bg-secondary badge-status"
                                            >

                                                {{ $emprestimo->status }}

                                            </span>


                                        @endif


                                    </td>


                                </tr>


                            @empty


                                <tr>

                                    <td
                                        colspan="5"
                                        class="text-center py-5"
                                    >

                                        <div class="mb-3">

                                            <i
                                                class="bi bi-calendar-x"
                                                style="
                                                    font-size: 40px;
                                                    color: #aaa;
                                                "
                                            ></i>

                                        </div>


                                        <h6 class="fw-bold">

                                            Nenhum empréstimo agendado

                                        </h6>


                                        <p class="text-secondary mb-0">

                                            Quando uma solicitação for realizada,
                                            ela aparecerá aqui.

                                        </p>

                                    </td>

                                </tr>


                            @endforelse


                        </tbody>

                    </table>

                </div>

            </div>

        </div>


    </main>



    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>


</body>

</html>
