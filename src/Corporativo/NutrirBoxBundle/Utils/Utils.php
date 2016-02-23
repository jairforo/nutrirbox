<?php

namespace Corporativo\NutrirBoxBundle\Utils;

/**
 * Classe destinada a conter Funcoes comuns para todo o sistema
 *
 * @author jairforo
 */
class Utils {

    public function getDiasSemanaAtual($diaSemana = null) {

        $diaSabado = 6; //sabado = 6º dia = fim da semana.
        $diaAtual = date('w'); //pego o dia atual
        $diaRestante = $diaSabado - $diaAtual;

        $inicio = strtotime("-$diaAtual days");
        $fim = strtotime("+$diaRestante days");

        $begin = new \DateTime(date('Y-m-d', $inicio));
        $end = new \DateTime(date('Y-m-d', $fim));

        $interval = new \DateInterval('P1D');
        $daterange = new \DatePeriod($begin, $interval, $end->modify('+1 day'));

        $arrSemana = array();
        foreach ($daterange as $date) {
            $arrSemana[$date->format("D")] = $date->format("Y-m-d");
        }

        return (is_null($diaSemana)) ? $arrSemana : $arrSemana[$diaSemana];
    }

    public function getDiaSemanaCurto($date = 'now') {
        return (new \Datetime($date))->format('D');
    }

    function isDataValida($data, $formato = 'Y-m-d H:i:s') {
        $d = \DateTime::createFromFormat($formato, $data);
        return $d && $d->format($formato) == $data;
    }
    
}
