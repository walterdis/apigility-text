<?php
namespace calculator\V1\Rpc\Ping;

use Zend\Mvc\Controller\AbstractActionController;
use ZF\ContentNegotiation\ViewModel;

class PingController extends AbstractActionController
{
    public function pingAction()
    {
        $total = 'Ambos os valores devem ser numéricos';

        $number_1 =  $this->params('number1');
        $number_2 = $this->params('number2');

        if(is_numeric($number_1) && is_numeric($number_2)) {
            $total = $number_1*$number_2;
        }
        return new ViewModel(
            ['ack' => date('d-m-Y H:i:s'), 'total' => $total]
        );
    }
}
