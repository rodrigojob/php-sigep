<?php

namespace PhpSigep\Model;

/**
 * @author: Rodrigo Job (rodrigo at econector.com.br)
 */
class LogisticaReversaPedidoResposta extends AbstractModel
{
    /**
     * @var string
     */
    protected $return;

    /**
     * @param $return
     * @return $this;
     */
    public function setReturn($return)
    {
        $this->return = $return;

        return $this;
    }
    
    /**
     * @return string
     */
    public function getReturn()
    {
        return $this->return;
    }
    
    /**
     * @return string
     */
    public function getColeta()
    {
        return $this->return->coleta;
    }
}
