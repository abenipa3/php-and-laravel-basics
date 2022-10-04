<?php

$books = [
    [
        "name" => "Do Androids Dream of Electric Sheep?",
        "author" => "Philip K. Dick",
        "releaseYear" => 1968,
        "purchaseUrl" => "https://www.google.com",
    ],
    [
        "name" => "Project Hail Mary",
        "author" => "Andy Weir",
        "releaseYear" => 2021,
        "purchaseUrl" => "https://www.google.com",
    ],
    [
        "name" => "Pet Sematary",
        "author" => "Stephen King",
        "releaseYear" => 1983,
        "purchaseUrl" => "https://www.google.com",
    ],
    [
        "name" => "The Truth About Keeping Secrets",
        "author" => "Savannah Brown",
        "releaseYear" => 2019,
        "purchaseUrl" => "https://www.google.com",
    ],
    [
        "name" => "To Kill a Mockingbird",
        "author" => "Harper Lee",
        "releaseYear" => 1960,
        "purchaseUrl" => "https://www.google.com",
    ],
    [
        "name" => "The Martian",
        "author" => "Andy Weir",
        "releaseYear" => 2011,
        "purchaseUrl" => "https://www.google.com",
    ]
];

function filter($items, $fn)
{
    $filteredItems = [];

    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }

    return $filteredItems;
};

$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === "Andy Weir";
});

require "workspace.view.php";
