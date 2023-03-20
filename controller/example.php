<?php
helper("typer", 1);

useModel("example");
function indexAction()
{
    getSomeData();
    $data = ["msg" => "Just smile", "title" => "happyMVC", "main" => getBaseUrl()];
    getView("example", $data);
}

function withParameter($params) {
    $data = ["msg" => $params['param'], "title" => "happyMVC"];
    getView("example", $data);
}
