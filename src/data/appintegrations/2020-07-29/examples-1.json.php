<?php
// This file was auto-generated from sdk-root/src/data/appintegrations/2020-07-29/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'CreateApplication' => [ [ 'input' => [ 'ApplicationSourceConfig' => [ 'ExternalUrlConfig' => [ 'AccessUrl' => 'https://example.com', ], ], 'Description' => 'My first application.', 'Name' => 'My Application', 'Namespace' => 'myapplication', ], 'output' => [ 'Arn' => 'arn:aws:app-integrations:us-west-2:0123456789012:application/98542c53-e8ac-4570-9c85-c6552c8d9c5e', 'Id' => '98542c53-e8ac-4570-9c85-c6552c8d9c5e', ], 'comments' => [], 'description' => 'The following creates an application named My Application with access url https://example.com.', 'id' => 'create-an-application', 'title' => 'To create an application', ], ], 'GetApplication' => [ [ 'input' => [ 'Arn' => 'arn:aws:app-integrations:us-west-2:0123456789012:application/98542c53-e8ac-4570-9c85-c6552c8d9c5e', ], 'output' => [ 'ApplicationSourceConfig' => [ 'ExternalUrlConfig' => [ 'AccessUrl' => 'https://example.com', ], ], 'Description' => 'My first application.', 'Name' => 'My Application', 'Namespace' => 'myapplication', ], 'comments' => [], 'description' => 'The following retrives an application.', 'id' => 'get-an-application', 'title' => 'To get an application', ], ], 'ListApplications' => [ [ 'input' => [ 'MaxResults' => 1, ], 'output' => [ 'Applications' => [ [ 'Arn' => 'arn:aws:app-integrations:us-west-2:0123456789012:application/98542c53-e8ac-4570-9c85-c6552c8d9c5e', 'Id' => '98542c53-e8ac-4570-9c85-c6552c8d9c5e', 'Name' => 'My Application', 'Namespace' => 'myapplication', ], ], 'NextToken' => 'abc', ], 'comments' => [], 'description' => 'The following lists application summary in the account.', 'id' => 'list-applications', 'title' => 'To list applications in the account', ], ], 'UpdateApplication' => [ [ 'input' => [ 'Arn' => 'arn:aws:app-integrations:us-west-2:0123456789012:application/98542c53-e8ac-4570-9c85-c6552c8d9c5e', 'Name' => 'My New Application Name', ], 'output' => [], 'comments' => [], 'description' => 'The following updates an existing application named with a new name.', 'id' => 'update-an-application', 'title' => 'To update an application', ], ], ],];
