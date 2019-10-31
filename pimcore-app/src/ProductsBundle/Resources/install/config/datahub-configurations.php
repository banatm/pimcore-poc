<?php 

return [
    "folders" => [

    ],
    "list" => [
        "test" => [
            "general" => [
                "active" => TRUE,
                "type" => "graphql",
                "name" => "test",
                "description" => "",
                "sqlObjectCondition" => "",
                "path" => NULL
            ],
            "schema" => [
                "queryEntities" => [
                    "Product" => [
                        "id" => "Product",
                        "name" => "Product",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "Code",
                                        "label" => "Code",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "Code",
                                            "title" => "Code",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "Name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Description",
                                        "label" => "Description",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => "",
                                            "height" => "",
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "phpdocType" => "string",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "Description",
                                            "title" => "Description",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "float:left; margin: 0 30px 0 0;",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "BodyLocations",
                                        "label" => "Body Locations the test is relevant to",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => "Name,id",
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "BodyLocation"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "BodyLocations",
                                            "title" => "Body Locations the test is relevant to",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "silab_id",
                                        "label" => "silab_id",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "silab_id",
                                            "title" => "silab_id",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Diseases",
                                        "label" => "Diseases the test is relevant to",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => [

                                            ],
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Disease"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "Diseases",
                                            "title" => "Diseases the test is relevant to",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Categories",
                                        "label" => "Categories",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => "id,Name,fullpath",
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Category"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "Categories",
                                            "title" => "Categories",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Included",
                                        "label" => "Products included in this profile",
                                        "dataType" => "manyToManyObjectRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToManyObjectRelation",
                                            "width" => "",
                                            "height" => "",
                                            "maxItems" => "",
                                            "queryColumnType" => "text",
                                            "phpdocType" => "array",
                                            "relationType" => TRUE,
                                            "visibleFields" => "id,Code,Name",
                                            "optimizedAdminLoading" => FALSE,
                                            "visibleFieldDefinitions" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Product"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "Included",
                                            "title" => "Products included in this profile",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Category" => [
                        "id" => "Category",
                        "name" => "Category",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "Name",
                                        "label" => "Name",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "phpdocType" => "string",
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "Name",
                                            "title" => "Name",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "ParentCategory",
                                        "label" => "ParentCategory",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => "",
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "phpdocType" => "\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject",
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "lazyLoading" => TRUE,
                                            "classes" => [
                                                [
                                                    "classes" => "Category"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "ParentCategory",
                                            "title" => "ParentCategory",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "fullpath",
                                        "label" => "fullpath",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "fullpath",
                                            "name" => "fullpath",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "id",
                                        "label" => "id",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "id",
                                            "name" => "id",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "creationDate",
                                        "label" => "creationDate",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "creationDate",
                                            "name" => "creationDate",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "modificationDate",
                                        "label" => "modificationDate",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "modificationDate",
                                            "name" => "modificationDate",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ]
                ],
                "mutationEntities" => [

                ],
                "specialEntities" => [
                    "document" => [
                        "id" => "document"
                    ],
                    "document_folder" => [
                        "id" => "document_folder"
                    ],
                    "asset" => [
                        "id" => "asset"
                    ],
                    "asset_folder" => [
                        "id" => "asset_folder"
                    ],
                    "object_folder" => [
                        "id" => "object_folder"
                    ]
                ]
            ],
            "security" => [
                "method" => "datahub_apikey",
                "apikey" => "qwerty1234567890"
            ],
            "workspaces" => [
                "asset" => [

                ],
                "document" => [

                ],
                "object" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel10335-1"
                    ]
                ]
            ]
        ]
    ]
];
