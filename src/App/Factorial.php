<?php 

namespace wesleybnd\firstfactorial\App;

/**
 * Solution First Factorial
 * @author Wesley Bernardo
 * @version 1.0.0
 */
class Factorial{

  /**
    ** Versão PT-BR
    * Função recursiva é otimizada utilizando o operador ternário.
    * Enquando o valor do parametro for maior que 1 (num > 1) a função será invacada recursivamente,
    * passando como parametro o valor subtraido em uma unidade (num - 1).
    * Quando o valor for igual a 1 (ponto de extremidade) inicia-se o processo de retorno das chamadas realizada, 
    * neste ponto, será multiplicado o valor de retorno, como o valor do nível recursivo, ou seja, num * (num-1) 
    * retornando no ultimo nível recursivo o valor fatorial
    * 
    ** English version
    * Recursive function is optimized using the ternary operator.
    * When the parameter value is greater than 1 (num > 1) the function will be invoked recursively,
    * passing as a parameter the value subtracted in one unit (num - 1).
    * When the value equals 1 (endpoint) starts the process of returning calls made,
    * at this point the return value will be multiplied, as the recursive level value, i.e. num * (num-1)
    * returning at last recursive level or factorial value
    * @param int $num
    * @return int $num
    */
    public static function firstFactorial(int $num) : int{
      return ($num == 1 ? $num : $num * self::firstFactorial($num-1));
    }   
  
}

?>