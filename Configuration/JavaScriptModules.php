<?php

return [
  "dependencies" => ["backend"],
  "tags" => ["backend.form"],
  "imports" => [
    "@gugler/textpartlanguageediting" => "EXT:ckeditor_language/Resources/Public/JavaScript/textpartlanguageediting.js",
    "@gugler/textpartlanguagecommand" => "EXT:ckeditor_language/Resources/Public/JavaScript/textpartlanguagecommand.js",
    "@gugler/ckeditor-language-utils" => "EXT:ckeditor_language/Resources/Public/JavaScript/utils.js",
    "@ckeditor/ckeditor-language" =>
      "EXT:ckeditor_language/Resources/Public/JavaScript/index.js",
  ],
];
