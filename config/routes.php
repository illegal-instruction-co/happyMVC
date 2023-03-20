<?php
# An example about how can be happy :)
setRoute("example", "example@indexAction"); // First is homepage
setRoute("example/with-parameter/{param}", "example@withParameter");
setRoute("lambda", function() { echo"LAMBDA"; }); 
