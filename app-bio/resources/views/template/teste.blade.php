<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>BioProject - Módulo Web / Informática</title>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white">
        <div class="container-fluid ">
            <a class="navbar-brand" href="{{route('teste')}}">
                <img src="{{asset('img/medusa.png')}}" width="64" height="64">
                <span class="ms-3 fs-5 fw-bold">BioProject</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{route('atividade.index')}}">Atividades</a>
                    <a class="nav-link" href="{{route('integrante.index')}}">Integrantes</a>
                    <a class="nav-link" href="{{route('material.index')}}">Materiais</a>
                </div>
            </div>
        </div>
    </nav>
    

    <div class="container py-4">
        <div class="col-12 d-flex justify-content-end">
                @if(isset($rota))
                    <a href= "{{ route($rota) }}" class="btn btn-light ms-2">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#6020f5" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg>
                    </a>
                @endif
            </div>
   
        @yield('conteudo')
    </div>

    
</body>
<nav class="navbar fixed-bottom navbar-dark bg-white">
    <div class="container-fluid">
        <span class="text-gradient fw-light"><b>Projeto Multidisciplinar:</b> Biologia II + Desenvolvimento Web</span>
    </div>
</nav>

</html>

<script type="text/javascript">

    $(document).ready(function(){
        $('.date').mask('00/00/0000');
        $('.time').mask('00:00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('0000-0000');
        $('.phone_with_ddd').mask('(00) 0000-0000');
        $('.phone_us').mask('(000) 000-0000');
        $('.mixed').mask('AAA 000-S0S');
        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
        $('.money').mask('000.000.000.000.000,00', {reverse: true});
        $('.money2').mask("#.##0,00", {reverse: true});
        $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
            translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
            }
        });
        $('.ip_address').mask('099.099.099.099');
        $('.percent').mask('##0,00%', {reverse: true});
        $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
        $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
        $('.fallback').mask("00r00r0000", {
            translation: {
                'r': {
                pattern: /[\/]/,
                fallback: '/'
                },
                placeholder: "__/__/____"
            }
        });
        $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
    });

    function showRemoveModal(id, nome) {
        $('#id_remove').val(id);
        $('#removeModal').modal().find('.modal-body').html("");
        $('#removeModal').modal().find('.modal-body').append("Deseja remover o registro <b class='text-danger'>'"+nome+"'</b> ?");
        $("#removeModal").modal('show')
    }

    function closeRemoveModal() {
        $("#removeModal").modal('hide')
    }

    function showFotoModal(path, foto) {

        let img
        path += "/" + foto
        img = "<img src='" + path + "'>"
        
        $('#fotoModal').modal().find('.modal-content').html("");
        $('#fotoModal').modal().find('.modal-content').append(img);
        $("#fotoModal").modal('show')
    }

    function remove() {

        let id = $('#id_remove').val();
        let form = "form_" + $('#id_remove').val();
        document.getElementById(form).submit();
        $("#removeModal").modal('hide')
    }

    function showNewYearModal(id, nome) {
        $("#newYearModal").modal('show')
    }

    function closeNewYearModal() {
        $("#newYearModal").modal('hide')
    }

    function newYear() {
        
        if($('#ano_letivo').val() != "") {
            $('#novo_ano').val($('#ano_letivo').val()); 
            document.getElementById('form-recriar').submit();
        }

        $("#newYearModal").modal('hide')
    }

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
@yield('script')
</html>