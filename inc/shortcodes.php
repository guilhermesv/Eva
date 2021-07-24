<?php

function eva_no_ar() {
  return '<div class="no-ar"><span>no ar:</span><a href="#">motoboy</a></div>';
}
add_shortcode('no_ar', 'eva_no_ar');

function eva_letreiro( $atts = array() ) {

  // define um padrao para os atributos
  extract(shortcode_atts(array(
    'texto' => 'Escreva um texto legal',
    'tempo' => '6'
  ), $atts));

  $html = '<div class="letreiro" style="--tempo:' . $tempo . 's">';
  $html .= '<div class="letreiro-texto">' . $texto . '</div>';
  for ( $i = 0; $i < 5; $i++) {
    $html .= '<div class="letreiro-texto" aria-hidden="true">' . $texto . '</div>';
  }
  $html .= '</div>';

  return $html;
}
add_shortcode('letreiro', 'eva_letreiro');


 