<?php
return array(
    'controllers' => array(
        'factories' => array(
            'calculator\\V1\\Rpc\\Ping\\Controller' => 'calculator\\V1\\Rpc\\Ping\\PingControllerFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'calculator.rpc.ping' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/ping[/:number1][/:number2]',
                    'defaults' => array(
                        'controller' => 'calculator\\V1\\Rpc\\Ping\\Controller',
                        'action' => 'ping',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'calculator.rpc.ping',
        ),
    ),
    'zf-rpc' => array(
        'calculator\\V1\\Rpc\\Ping\\Controller' => array(
            'service_name' => 'Ping',
            'http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'route_name' => 'calculator.rpc.ping',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'calculator\\V1\\Rpc\\Ping\\Controller' => 'Json',
        ),
        'accept_whitelist' => array(
            'calculator\\V1\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.calculator.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
        ),
        'content_type_whitelist' => array(
            'calculator\\V1\\Rpc\\Ping\\Controller' => array(
                0 => 'application/vnd.calculator.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'calculator\\V1\\Rpc\\Ping\\Controller' => array(
            'input_filter' => 'calculator\\V1\\Rpc\\Ping\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'calculator\\V1\\Rpc\\Ping\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'ack',
                'description' => 'Acknowledge the request with a timestamp',
            ),
        ),
    ),
);
