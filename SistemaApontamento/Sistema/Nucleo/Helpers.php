<?php
namespace Sistema\Nucleo;
class Helpers
{

/**
 * Validar numero de CPF
 * @author Diego <diegojonatanmiranda@gmail.com>
 * @param string $cpf 
 * @return string bool
 */
public static function validarCpf(string $cpf): bool
{
    $limparNumeros = preg_replace('/[^0-9]/', '', $cpf);

    if (mb_strlen($limparNumeros) != 11 ||  preg_match('/(\d)\1{10}/', $limparNumeros)) {
        return false;
    }
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $limparNumeros[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($limparNumeros[$c] != $d) {
            return false;
        }
    }
    return true;
}
public static function slug(string $string): string
{
    $mapa['a'] = 'ÀÁÃÂÉÊÍÓÕÔÚÜÇÑàáãâéêíóõôúüçñ';
    $mapa['b'] = 'AAAAEEIOOOUUCNaaaaeeiooouucn';

    //$nstring = UConverter::transcode($string ,'UTF-8','ISO-8859-1');
    echo $nstring = iconv('ISO-8859-1', 'UTF-8', $string) . '<br>';

    $slug = strtr($string, $mapa['a'], $mapa['b']);

    return $slug;
}
/**
 * Retorno de data formatada
 * @author Diego <diegojonatanmiranda@gmail.com>
 * @param string $dataFormatada Retorna a data formada no medelo que desejar
 * @return string formatação da data
 */
public static function dataAtual(): string
{
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n') - 1;
    $ano = date('Y');

    $nomesDiasDaSemana = ['domingo', 'segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sábado'];

    $nomeDosMeses = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];

    $dateFormatada = $nomesDiasDaSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomeDosMeses[$mes] . ' de ' . $ano;

    return $dateFormatada;
}
/**
 * montar url de acordo com o ambiente
 * @author Diego <diegojonatanmiranda@gmail.com>
 * @param string $servidor parte da url ex. admin
 * @return string url completa
 */
public static function url(string $url): string
{
    $servidor = filter_input(INPUT_SERVER, 'HTTP_HOST');
    //$servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($servidor == 'localhost:3000' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

    return str_starts_with($url, '/') ? $ambiente . $url : $ambiente . '/' . $url;;
}
/**
 * validar localhost
 * @author Diego <diegojonatanmiranda@gmail.com>
 * @param bool $servidor
 * @return bool retorna verdadeiro ou falso no server_name 
 */
public static function servidorSistema(): bool
{

    $servidor = filter_input(INPUT_SERVER, 'HTTP_HOST');
    //$servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    //if ($servidor == 'localhost') {
    if ($servidor == 'localhost:3000') {
        return true;
    }
    return false;
}
/**
 * validar url
 * @author Diego <diegojonatanmiranda@gmail.com>
 * @param string $url
 * @return bool retorna verdadeiro ou falso na url
 */
public static function validarUrl2(string $url): bool
{
    if ((mb_strlen($url) < 10)) {
        return  false;
    }
    if (!str_contains($url, '.')) {
        return  false;
    }
    if (str_contains($url, 'http://') or str_contains($url, 'https://')) {
        return true;
    }
    return false;
}
public static function validarUrl(string $url): bool
{
    return filter_var($url, FILTER_VALIDATE_URL);
}
/**
 * Validação de e-mail
 * @author Diego <diegojonatanmiranda@gmail.com>
 * @param string $email
 * @return bool retorna verdadeiro ou falso no e-mail informado
 */
public static function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
/**
 * Conta o tempo decorrido de uma data
 * @author Diego <diegojonatanmiranda@gmail.com>
 * @param string $data
 * @return string retorna quanto tempo passou 
 */

public static function contarTempo(string $data)
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $horas = round($diferenca / 3600);
    $dias = round($diferenca / 86400);
    $semanas = round($diferenca / 604800);
    $meses = round($diferenca / 2419200);
    $anos = round($diferenca / 29030400);

    if ($segundos <= 60) {
        return 'agora';
    } elseif ($minutos <= 60) {
        return $minutos == 1 ? 'há 1 minuto' : 'há ' . $minutos . ' minutos';
    } elseif ($horas <= 24) {
        return $horas == 1 ? 'há 1 hora' : 'há ' . $horas . ' horas';
    } elseif ($dias <= 7) {
        return $dias == 1 ? 'ontém' : 'há ' . $dias . ' dias';
    } elseif ($semanas <= 4) {
        return $semanas == 1 ? 'há 1 semana' : 'há ' . $semanas . ' semanas';
    } elseif ($meses <= 4) {
        return $meses == 1 ? 'há 1 mês' : 'há ' . $meses . ' meses';
    } else {
        return $anos == 1 ? 'há 1 ano' : 'há ' . $anos . ' anos';
    }
}

/**
 * Formatar um valor com ponto e virgula
 * @author Diego <diegojonatanmiranda@gmail.com>
 * @param float $valor
 * @return string
 */
public static function formatarValor(float $valor = null): string
{
    return number_format(($valor ? $valor : 0), 2, ',', '.');
}
/**
 * Formatar um valor com pontos
 * @author Diego <diegojonatanmiranda@gmail.com>
 * @param float $valor
 * @return string
 */
public static function formatarNumeros(string $numeros = null): string
{
    return number_format(($numeros ?: 0), 0, '.', '.');
}
/**
 * Saldação
 * @author Diego <diegojonatanmiranda@gmail.com>
 * 
 * @param 'date $hora pega a hora do sistema
 * 
 * @return string Retorna uma saldação de acordo com a hora local 
 */
public static function saudacao(): string
{
    $hora = date('H');

    $saudacao = match (true) {
        $hora >= 0 && $hora <= 5 => "Boa madrugada!!!!",
        $hora >= 6 && $hora <= 12 => "Bom dia!!!!",
        $hora >= 12 && $hora <= 18 => "Bom tarde!!!!",
        default =>  "Bom noite!!!!"
    };
    return $saudacao;
}
/**
 * @author Diego <diegojonatanmiranda@gmail.com>
 * Resume o texto informado
 * @param string $texto texto para ser resumido'
 * @param string $continue opcional - serve para exibir o que vai ser mostrado no fim do texto resumido'
 * @param int $limite quantidade de caracteres 
 * 
 * @return string texto resumido
 */
public static function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim(strip_tags($texto));

    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }
    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto . $continue;
}


}