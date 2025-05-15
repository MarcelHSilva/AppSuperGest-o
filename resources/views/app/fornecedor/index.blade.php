<h3>Fornecedores</h3>

{{-- Comentario --}}
{{-- Comentario --}}


@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)
        Iteração atual:{{ $loop->iteration }}
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        {{-- se $variavel testada ou $variavel possuir valor nulo --}}
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não informado' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? 'Dado não informado' }}) {{ $fornecedor['telefone'] }}
        <br>
        @if($loop->first)
        Primeira Iteração
        @endif
        @if($loop->last)
        Ultima Iteração
        <br>
        Total de Registros {{ $loop->count }}
        @endif
        <hr>
    @empty
        Nenhum fornecedor cadastrado
    @endforelse

@endisset