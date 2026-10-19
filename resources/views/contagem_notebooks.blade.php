```blade
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contagem dos Notebooks - GDC</title>

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
        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            margin: 0;
            color: #212529;
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

        /* NAVBAR */
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
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.65);
        }

        .nav-link-gdc:hover {
            color: #ddd8ff;
        }

        /* CABEÇALHO */
        .page-header {
            margin-top: 45px;
            margin-bottom: 35px;
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
            font-size: 27px;
            margin-bottom: 15px;
            box-shadow: 0 7px 18px rgba(0, 0, 0, 0.20);
        }

        .page-title {
            font-size: 32px;
            font-weight: 800;
            color: white;
            margin-bottom: 8px;
            text-shadow: 0 3px 10px rgba(0, 0, 0, 0.65);
        }

        .page-subtitle {
            color: white;
            margin-bottom: 0;
            font-size: 15px;
            text-shadow: 0 2px 7px rgba(0, 0, 0, 0.65);
        }

        /* CARDS */
        .gdc-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.65);
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.20);
            overflow: hidden;
        }

        .summary-icon {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 13px;
            background: rgba(99, 85, 232, 0.10);
            color: #6355e8;
            font-size: 22px;
            flex-shrink: 0;
        }

        .summary-number {
            font-size: 34px;
            font-weight: 800;
            color: #6355e8;
            line-height: 1;
        }

        .summary-label {
            color: #777;
            font-size: 13px;
            font-weight: 600;
        }

        /* CARDS DOS CARRINHOS */
        .cart-card {
            border: 1px solid #e9e9ef;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.96);
            transition: 0.2s ease;
        }

        .cart-card:hover {
            border-color: #d9d5ff;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .cart-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(99, 85, 232, 0.10);
            color: #6355e8;
            font-size: 20px;
        }

        .cart-name {
            font-weight: 750;
            color: #222;
            font-size: 17px;
        }

        .cart-info {
            font-size: 12px;
            color: #888;
        }

        /* CABEÇALHO DOS CARDS */
        .card-header-gdc {
            padding: 24px 28px;
            border-bottom: 1px solid #eeeeF2;
            background: rgba(255, 255, 255, 0.65);
        }

        .card-title-gdc {
            font-size: 20px;
            font-weight: 750;
            color: #222;
            margin-bottom: 5px;
        }

        .card-subtitle-gdc {
            font-size: 13px;
            color: #888;
            margin-bottom: 0;
        }

        /* TABELA */
        .table-container {
            border: 1px solid #eeeeF2;
            border-radius: 14px;
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

        /* BOTÕES */
        .btn-gdc {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #6355e8, #776bea);
            border: none;
            color: white;
            min-height: 50px;
            border-radius: 11px;
            font-weight: 700;
            box-shadow: 0 7px 18px rgba(99, 85, 232, 0.25);
            transition: all 0.2s ease;
            text-decoration: none;
        }

        .btn-gdc:hover {
            background: linear-gradient(135deg, #5749d7, #695dde);
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 10px 23px rgba(99, 85, 232, 0.35);
        }

        .btn-adicionar {
            background: linear-gradient(135deg, #6355e8, #776bea);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 16px;
            font-weight: 600;
        }

        .btn-adicionar:hover {
            background: #5749d7;
            color: white;
        }

        .status-form {
            min-width: 220px;
        }

        /* RESPONSIVO */
        @media (max-width: 768px) {
            .logo-gdc {
                height: 48px;
            }

            .navbar-links {
                gap: 12px !important;
            }

            .nav-link-gdc {
                font-size: 12px;
            }

            .page-header {
                margin-top: 30px;
            }

            .page-title {
                font-size: 26px;
            }

            .card-header-gdc {
                padding: 20px;
            }
        }

        @media (max-width: 420px) {
            .logo-gdc {
                height: 38px;
            }

            .navbar-links {
                gap: 9px !important;
            }

            .nav-link-gdc {
                font-size: 11px;
            }
        }
    </style>
</head>

<body>

    @php
        $tipoUsuario = strtolower(trim((string) session('usuario_tipo')));
        $ehResponsavel = $tipoUsuario === 'responsavel';

        $totalNotebooks = isset($notebooks) ? $notebooks->count() : 0;

        $quantidadesPorCarrinho = collect($carrinhos ?? [])
            ->mapWithKeys(function ($carrinho) use ($notebooks) {
                return [
                    $carrinho->id => collect($notebooks ?? [])
                        ->where('id_carrinho', $carrinho->id)
                        ->count()
                ];
            });
    @endphp

    <!-- NAVBAR -->
    <nav class="navbar navbar-gdc py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between w-100">

                <a href="{{ route('home') }}" class="text-decoration-none">
                    <img
                        src="{{ asset('images/gdc.png') }}"
                        alt="Logo GDC"
                        class="logo-gdc"
                    >
                </a>

                <div class="d-flex align-items-center gap-4 navbar-links">

                    <a href="{{ route('home') }}" class="nav-link-gdc">
                        <i class="bi bi-house me-1"></i>
                        Home
                    </a>

                    <a href="{{ route('emprestimo') }}" class="nav-link-gdc">
                        <i class="bi bi-calendar-check me-1"></i>
                        Empréstimo
                    </a>

                    <a href="{{ route('reclame.aqui') }}" class="nav-link-gdc">
                        <i class="bi bi-chat-left-text me-1"></i>
                        Reclame Aqui
                    </a>

                </div>
            </div>
        </div>
    </nav>

    <!-- CONTEÚDO -->
    <main class="container pb-5">

        <!-- CABEÇALHO -->
        <div class="page-header text-center">

            <div class="title-icon">
                <i class="bi bi-laptop"></i>
            </div>

            <h1 class="page-title">
                Contagem dos Notebooks
            </h1>

            <p class="page-subtitle">
                Consulte a quantidade e o status dos notebooks cadastrados no sistema.
            </p>

        </div>

        <!-- MENSAGENS -->
        @if(session('sucesso'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>
                {{ session('sucesso') }}
                <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>
        @endif

        @if(session('erro'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle me-2"></i>
                {{ session('erro') }}
                <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-triangle me-2"></i>
                {{ $errors->first() }}
                <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Fechar"></button>
            </div>
        @endif

        <!-- TOTAL GERAL -->
        <div class="row g-3 mb-4">
            <div class="col-12">

                <div class="gdc-card p-4 d-flex flex-wrap align-items-center justify-content-between gap-3">

                    <div class="d-flex align-items-center gap-3">

                        <div class="summary-icon">
                            <i class="bi bi-laptop"></i>
                        </div>

                        <div>
                            <h2 class="card-title-gdc mb-1">
                                Total de notebooks cadastrados
                            </h2>

                            <p class="card-subtitle-gdc">
                                Quantidade atual registrada no banco de dados.
                            </p>
                        </div>

                    </div>

                    <div class="text-end">
                        <span class="summary-number">
                            {{ $totalNotebooks }}
                        </span>

                        <div class="summary-label">
                            notebooks no total
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- CARRINHOS -->
        <div class="gdc-card mb-5">

            <div class="card-header-gdc">
                <h2 class="card-title-gdc">
                    <i class="bi bi-cart3 me-2 text-primary"></i>
                    Notebooks cadastrados por carrinho
                </h2>

                <p class="card-subtitle-gdc">
                    Quantidade de notebooks registrada em cada carrinho.
                </p>
            </div>

            <div class="p-4">
                <div class="row g-3">

                    @forelse($carrinhos ?? [] as $carrinho)

                        @php
                            $quantidade = $quantidadesPorCarrinho[$carrinho->id] ?? 0;
                            $percentual = min(($quantidade / 30) * 100, 100);

                            $identificacao = $carrinho->identificacao
                                ?? $carrinho->identificação
                                ?? sprintf('Carrinho %02d', $carrinho->id);
                        @endphp

                        <div class="col-md-4">
                            <div class="cart-card p-4 h-100">

                                <div class="cart-icon mb-3">
                                    <i class="bi bi-cart3"></i>
                                </div>

                                <div class="cart-name mb-1">
                                    {{ $identificacao }}
                                </div>

                                <div class="cart-info mb-3">
                                    <i class="bi bi-geo-alt me-1"></i>
                                    {{ $carrinho->localizacao ?? 'Localização não informada' }}
                                </div>

                                <div class="d-flex justify-content-between align-items-center gap-2">
                                    <span class="cart-info">
                                        Notebooks cadastrados
                                    </span>

                                    <strong class="text-primary fs-4">
                                        {{ $quantidade }}
                                    </strong>
                                </div>

                                <div class="mt-3">
                                    <span class="badge bg-success">
                                        <i class="bi bi-check-circle me-1"></i>
                                        {{ $quantidade }} notebook(s)
                                    </span>
                                </div>

                                <div
                                    class="progress mt-3"
                                    style="height: 7px;"
                                    role="progressbar"
                                    aria-label="Quantidade de notebooks no {{ $identificacao }}"
                                    aria-valuenow="{{ $quantidade }}"
                                    aria-valuemin="0"
                                    aria-valuemax="30"
                                >
                                    <div
                                        class="progress-bar"
                                        style="width: {{ $percentual }}%; background: #6355e8;"
                                    ></div>
                                </div>

                                <small class="cart-info d-block mt-2">
                                    {{ $quantidade }} de 30 notebooks
                                </small>

                            </div>
                        </div>

                    @empty

                        <div class="col-12 text-center text-muted py-4">
                            Nenhum carrinho cadastrado no sistema.
                        </div>

                    @endforelse

                </div>
            </div>
        </div>

        <!-- LISTA DE NOTEBOOKS -->
        <div class="gdc-card">

            <div class="card-header-gdc">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                    <div>
                        <h2 class="card-title-gdc">
                            <i class="bi bi-list-ul me-2 text-primary"></i>
                            Notebooks cadastrados
                        </h2>

                        <p class="card-subtitle-gdc">
                            Consulte os dados e gerencie cada equipamento.
                        </p>
                    </div>

                    <div class="d-flex align-items-center flex-wrap gap-2">

                        <span class="badge bg-light text-dark border px-3 py-2">
                            <i class="bi bi-database me-1"></i>
                            {{ $totalNotebooks }} registro(s)
                        </span>

                        @if($ehResponsavel)
                            <button
                                type="button"
                                class="btn btn-adicionar"
                                data-bs-toggle="modal"
                                data-bs-target="#modalAdicionarNotebook"
                            >
                                <i class="bi bi-plus-circle me-2"></i>
                                Adicionar notebook
                            </button>
                        @endif

                    </div>
                </div>
            </div>

            <div class="p-4">

                <div class="table-responsive table-container">

                    <table class="table table-hover align-middle">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Patrimônio</th>
                                <th>Modelo</th>
                                <th>Carrinho</th>
                                <th>Status</th>
                                @if($ehResponsavel)
                                    <th>Ações</th>
                                @endif
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($notebooks ?? [] as $notebook)

                                @php
                                    $status = $notebook->status ?? 'Disponível';

                                    $coresStatus = [
                                        'Disponível' => 'success',
                                        'Sendo utilizado' => 'warning',
                                        'Em manutenção' => 'danger',
                                    ];

                                    $cor = $coresStatus[$status] ?? 'secondary';
                                @endphp

                                <tr>
                                    <td>{{ $notebook->id }}</td>

                                    <td class="fw-semibold">
                                        {{ $notebook->patrimonio ?? 'Não informado' }}
                                    </td>

                                    <td>
                                        {{ $notebook->modelo ?? 'Não informado' }}
                                    </td>

                                    <td>
                                        {{ $notebook->carrinho_identificacao
                                            ?? $notebook->identificacao
                                            ?? $notebook->id_carrinho
                                            ?? 'Não informado' }}
                                    </td>

                                    <td>
                                        @if($ehResponsavel)

                                            <form
                                                action="{{ route('notebook.status', $notebook->id) }}"
                                                method="POST"
                                                class="d-flex align-items-center gap-2 status-form"
                                            >
                                                @csrf

                                                <select
                                                    name="status"
                                                    class="form-select form-select-sm"
                                                    aria-label="Status do notebook {{ $notebook->patrimonio }}"
                                                    required
                                                >
                                                    <option value="Disponível"
                                                        {{ $status === 'Disponível' ? 'selected' : '' }}>
                                                        Disponível
                                                    </option>

                                                    <option value="Sendo utilizado"
                                                        {{ $status === 'Sendo utilizado' ? 'selected' : '' }}>
                                                        Sendo utilizado
                                                    </option>

                                                    <option value="Em manutenção"
                                                        {{ $status === 'Em manutenção' ? 'selected' : '' }}>
                                                        Em manutenção
                                                    </option>
                                                </select>

                                                <button
                                                    type="submit"
                                                    class="btn btn-sm btn-primary"
                                                    title="Salvar status"
                                                >
                                                    <i class="bi bi-check-lg"></i>
                                                </button>
                                            </form>

                                        @else

                                            <span class="badge bg-{{ $cor }} {{ $cor === 'warning' ? 'text-dark' : '' }}">
                                                {{ $status }}
                                            </span>

                                        @endif
                                    </td>

                                    @if($ehResponsavel)
                                        <td>
                                            <form
                                                action="{{ route('notebook.destroy', $notebook->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Tem certeza que deseja excluir o notebook {{ $notebook->patrimonio }}?');"
                                            >
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="btn btn-sm btn-outline-danger"
                                                    title="Excluir notebook"
                                                >
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>

                            @empty

                                <tr>
                                    <td
                                        colspan="{{ $ehResponsavel ? 6 : 5 }}"
                                        class="text-center py-5"
                                    >
                                        <i
                                            class="bi bi-laptop"
                                            style="font-size: 40px; color: #aaa;"
                                        ></i>

                                        <h6 class="fw-bold mt-3">
                                            Nenhum notebook encontrado
                                        </h6>

                                        <p class="text-muted small mb-0">
                                            Os notebooks cadastrados aparecerão nesta tabela.
                                        </p>
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>
            </div>
        </div>

        <!-- BOTÃO DE EMPRÉSTIMO -->
        <div class="text-center mt-4 mb-5">
            <a
                href="{{ route('emprestimo') }}"
                class="btn btn-gdc px-5"
            >
                <i class="bi bi-calendar-plus me-2"></i>
                Solicitar Empréstimo
            </a>
        </div>

    </main>

    <!-- MODAL DE CADASTRO -->
    @if($ehResponsavel)
        <div
            class="modal fade"
            id="modalAdicionarNotebook"
            tabindex="-1"
            aria-labelledby="tituloModalNotebook"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <form action="{{ route('notebook.store') }}" method="POST">
                        @csrf

                        <div class="modal-header">
                            <h5 class="modal-title" id="tituloModalNotebook">
                                <i class="bi bi-laptop me-2 text-primary"></i>
                                Adicionar notebook
                            </h5>

                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Fechar"
                            ></button>
                        </div>

                        <div class="modal-body">

                            <div class="mb-3">
                                <label for="patrimonio" class="form-label">
                                    Patrimônio
                                </label>

                                <input
                                    type="text"
                                    name="patrimonio"
                                    id="patrimonio"
                                    class="form-control"
                                    placeholder="Ex.: NB088"
                                    maxlength="50"
                                    value="{{ old('patrimonio') }}"
                                    required
                                >
                            </div>

                            <div class="mb-3">
                                <label for="modelo" class="form-label">
                                    Modelo
                                </label>

                                <input
                                    type="text"
                                    name="modelo"
                                    id="modelo"
                                    class="form-control"
                                    placeholder="Ex.: Dell Latitude"
                                    maxlength="100"
                                    value="{{ old('modelo') }}"
                                >
                            </div>

                            <div class="mb-3">
                                <label for="id_carrinho" class="form-label">
                                    Carrinho
                                </label>

                                <select
                                    name="id_carrinho"
                                    id="id_carrinho"
                                    class="form-select"
                                    required
                                >
                                    <option value="">Selecione o carrinho</option>

                                    @foreach($carrinhos ?? [] as $carrinho)
                                        <option
                                            value="{{ $carrinho->id }}"
                                            {{ old('id_carrinho') == $carrinho->id ? 'selected' : '' }}
                                        >
                                            Carrinho {{ sprintf('%02d', $carrinho->id) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="alert alert-light border small mb-0">
                                <i class="bi bi-info-circle me-1"></i>
                                O notebook será cadastrado com o status
                                <strong>Disponível</strong>.
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-light"
                                data-bs-dismiss="modal"
                            >
                                Cancelar
                            </button>

                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-circle me-1"></i>
                                Cadastrar notebook
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    @endif

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
